<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;

use App\Models\Supervisor;

class SupervisorTable extends DataTableComponent
{
    protected $model = Supervisor::class;

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
            Column::make("nombre_sup")
                ->sortable(),
            Column::make("tel")
                ->sortable(),
            Column::make("email")
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
                    LinkColumn::make('delete')
                        ->title(fn ($row) => 'Eliminar ' . $row->name)
                        ->location(fn ($row) => route('hp.sup', $row->id))
                        ->attributes(function ($row) {
                            return [
                                'class' => 'btn btn-danger text-blue-500 hover:no-underline',
                                'wire:click' => 'delete(' . $row->id . ')',
                                
                            ];
                        }),
                ]),

        ];
    }
}
