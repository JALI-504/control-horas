<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;


use App\Models\Supervisor;
use WireUi\Traits\Actions;

class SupervisorTable extends DataTableComponent
{
    use Actions;
    protected $model = Supervisor::class;

    public array $bulkActions = [
        'deleteSelected' => 'Eliminar',
    ];

    public function deleteSelected(){

        Supervisor::destroy($this->getSelected());
     
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
                ->sortable()
                ->deselected(),
            Column::make("Nombre", "nombre_sup")
                ->sortable(),
            Column::make("Telefono", "tel")
                ->sortable(),
            Column::make("Email","email")
                ->sortable(), 
            Column::make("Centro Educativo","Centro.nombre_centro")
                 ->sortable(), 
            Column::make("Carrera","Carrera.carrera")
                 ->sortable(), 
            Column::make("Created at", "created_at")
                ->sortable()
                ->deselected(),
            Column::make("Updated at", "updated_at")
                ->sortable()
                ->deselected(),

                ButtonGroupColumn::make('Actions')
                ->attributes(function ($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->buttons([
                    LinkColumn::make('edit') // make() has no effect in this case but needs to be set anyway
                        ->title(fn ($row) => 'Editar ' . $row->name)
                        ->location(fn ($row) => route('hp.sup_update', $row->id))
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
