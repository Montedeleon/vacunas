<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Nette\Schema\Elements\Structure;

class Registro extends Model
{
    use HasFactory;

   protected function curp(): Attribute{

    return new Attribute(
        set: function($value){

            return strtoupper($value);
        }
    );
   }

}
