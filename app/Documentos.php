<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
  public $table = "document";
  public $primaryKey = "id";
  public  $timestamps = false;
  public $guarder = [];
}
