<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projecte extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'slug'];

    public function tasca()
    {
        return $this->hasMany(Tasca::class);
    }
}
