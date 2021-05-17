<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function threads(){

        return $this->hasMany(Thread::class);
    }

    public function path(){

        return '/blog/' . $this->name;
    }
}
