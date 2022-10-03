<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected  $fillable = [
        'content',
        'date'
    ];

    public function usershop(){
        return $this->belongsTo(Usershop::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
