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
                    LinkColumn::make('delete')
                        ->title(fn ($row) => 'Eliminar ')
                        ->location(fn ($row) => route('hp.hora_update', $row->id))
                        ->attributes(function ($row) {
                            return [
                                'class' => 'btn btn-danger text-blue-500 hover:no-underline',
                            ];
                        }),
                ]),
        ];
    }
}
