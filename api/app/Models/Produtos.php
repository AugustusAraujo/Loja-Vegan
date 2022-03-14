<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Produtos extends Model{
    protected $table = "produtos";
    protected $fillable = [
        "usuario_id",'valor_pedido',"items","status"
    ];
}
