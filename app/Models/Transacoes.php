<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transacoes extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'categoria',
        'tipo',
        'vencimento',
        'pagamento',
        'valor',
        'status',
        'receita_despesa'
    ];
}
