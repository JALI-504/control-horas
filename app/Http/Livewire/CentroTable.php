<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use App\Models\Centro;

class CentroTable extends DataTableComponent
{
    protected $model = Centro::class;

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
                Column::make("nombre_centro")
                ->sortable(),
                Column::make("facultad")
                ->sortable(),
                Column::make("carrera")
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
                        ->location(fn ($row) => route('hp.centro_update', $row->id))
                        ->attributes(function ($row) {
                            return [
                                'class' => 'btn btn-warning text-blue-500 hover:no-underline',
                            ];
                        }),
                    LinkColumn::make('delete')
                        ->title(fn ($row) => 'Eliminar ' . $row->name)
                        ->location(fn ($row) => route('hp.centro_update', $row->id))
                        ->attributes(function ($row) {
                            return [
                                'target' => '_blank',
                                'class' => 'btn btn-danger text-blue-500 hover:no-underline',
                            ];
                        }),
                ]),

        ];
    }
}
