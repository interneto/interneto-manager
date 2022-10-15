<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    use HasFactory;

    protected $guarted = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function webs() {
        return $this->hasMany(Web::class);
    }
}
