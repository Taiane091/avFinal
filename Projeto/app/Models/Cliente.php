<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
   protected $fillable=['Nome', 'Telefone', 'Cidade', 'Produto desejado', 'Tipo de compra'];
}  
