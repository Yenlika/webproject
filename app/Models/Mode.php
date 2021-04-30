<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mode extends Model
{
     protected $table ='iron';
    protected $primarykey ='id';
      protected $fillable = ['Name', 'Surname','Email','Photo'];
      public function index(){
      	return $this->hasMany(Operator::class);
      }
}
