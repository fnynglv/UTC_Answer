<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookSeries extends Model
{
    use HasFactory;
    public function BookHighlight(){
        return $this->hasMany(BookHighlight::class);
    }

    public function BookRead(){
        return $this->hasMany(BookRead::class);
    }

    public function Category(){
        return $this->belongsTo(Category::class);
    }
}
