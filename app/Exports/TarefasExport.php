<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TarefasExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       $user = auth()->user();
       return $user->tarefas;
    }

    public function headings(): array
    {
        return ['Id da tarefa','Usuário','tarefa','data limite'];
    }

    public function map($row): array
    {
        return [
            "id" => $row->id,
            "user" => $row->user->name,
            "tarefa" => $row->tarefa,
            "data_limite_conclusao" => date('d/m/Y', strtotime($row->data_limite_conclusao)),
        ];
    }
}
