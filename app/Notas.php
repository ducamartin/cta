<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
  public $table = "notas";
  public $primaryKey = "id";
  public  $timestamps = false;
  public $guarder = [];
}
