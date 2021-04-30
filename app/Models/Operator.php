<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $table ='operator';
    protected $primarykey ='id';
      protected $fillable = ['iron_id'];
      public function index(){
      	return $this->belongsTo(Iron::class);
      }
}
