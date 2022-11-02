<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public function Pets(){
        return $this->belongsToMany(Pet::class);
    }
    public function Doctors(){
        return $this->belongsToMany(Doctor::class);
    }
}
