<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use App\Models\Centro;
use WireUi\Traits\Actions;

class CentroTable extends DataTableComponent
{
    use Actions;
    protected $model = Centro::class;

    public array $bulkActions = [
        'deleteSelected' => 'Eliminar',
    ];

    public array $alerta = [];

    public function deleteSelected(){

        Centro::destroy($this->getSelected());
     
      }
  


    // public function deleteSelected(){
    //     if (count($this->getSelected()) > 0) {
    //         Centro::destroy($this->getSelected());
    
    //         // Actualiza la variable $alerta para mostrar la alerta
    //         foreach ($this->getSelected() as $id) {
    //             $this->alerta[$id] = 'El centro se eliminó correctamente.';
    //         }
    //     }
    // }


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
            Column::make("Nombre del Centro", "nombre_centro")
                ->sortable(),   
            // Column::make("Nombre de la Carrera", "Carrera.carrera")
            //     ->sortable(),   
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
                        })->html(),
                        // Column::make('Borrar')->format(function ($value, $column, $row) {

                        //     return '<button class="btn btn-sm btn-danger"
                        //             data-toggle="modal"
                        //             wire:click.prevent="delete(' . $row->id . ')"
                        //             data-target="#modalEliminarSolicitud">
                        //             <i class="fas fa-trash"></i>Borrar</button>';
                                   
                        // })->html(),
                ]),

        ];
    }
}
