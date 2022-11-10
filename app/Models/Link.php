<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function directory() {
        return $this->belongsTo(Directory::class);
    }

    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
