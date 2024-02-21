<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bb extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    protected $fillable = ['title','content','price'];
}
