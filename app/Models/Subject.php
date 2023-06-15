<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;

    public function students(){
        return $this->belongsToMany('App\Models\student');
    }
    public function teacher(){
        return $this->belongsTo('App\Models\teacher', 'id_teacher');
    }
}
