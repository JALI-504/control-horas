<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;

use App\Models\Hora;

class HoraTable extends DataTableComponent
{
    protected $model = Hora::class;

    public array $bulkActions = [
        'deleteSelected' => 'Eliminar',
    ];

    public function deleteSelected(){
        if (count($this->getSelected()) > 0) {

            Hora::destroy($this->getSelected());
        }

    }


    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setColumnSelectStatus(true);
    }

    public function columns(): array
    {
            return [
            Column::make("Id", "id")
                    ->sortable()->deselected(),
            Column::make("Usuario", "user.name")
                ->sortable()
                ->searchable(),
            Column::make("Fecha", "fecha")
                ->sortable()
                ->searchable(),
            Column::make("Hora inicio", "hora_inicio")
                ->sortable(),
            Column::make("Hora final", "hora_final")
                ->sortable(),
            Column::make("Hora total", "hora_total")
                ->sortable(),

            ButtonGroupColumn::make('Actions')
                ->attributes(function ($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->buttons([
                    LinkColumn::make('edit') // make() has no effect in this case but needs to be set anyway
                        ->title(fn ($row) => 'Editar ' . $row->name)
                        ->location(fn ($row) => route('hp.hora_update', $row->id))
                        ->attributes(function ($row) {
                            return [
                                'class' => 'btn btn-warning text-blue-500 hover:no-underline',
                            ];
                        }),
                        Column::make('Borrar')->format(function ($value, $column, $row) {

                            return '<button class="btn btn-sm btn-danger"
                                    data-toggle="modal"
                                    wire:click.prevent="delete(' . $row->id . ')"
                                    data-target="#modalEliminarSolicitud">
                                    <i class="fas fa-trash"></i>Borrar</button>';
                                   
                        })->html(),
                ]),
        ];
    }
}
