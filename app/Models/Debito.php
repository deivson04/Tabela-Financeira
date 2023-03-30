<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debito extends Model
{
    use HasFactory;
    protected $table = 'debitos';
    protected $primaryKey = 'id';

    protected $fillable = ['user_id','descricao da comprar','tipo de pagamento','parcela da comprar','data da comprar'];
}
