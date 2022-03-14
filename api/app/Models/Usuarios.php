<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Usuarios extends Model{
    protected $table = "usuarios";
    protected $fillable = [
       "produto_nome","produto_preco","produto_estoque"
    ];
}
