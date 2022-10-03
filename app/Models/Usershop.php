<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usershop extends Model
{
    use HasFactory;
    protected  $fillable = [
        'full_name',
        'gender',
        'address',
        'number'

    ];
    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
