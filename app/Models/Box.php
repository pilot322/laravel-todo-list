<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    /** @use HasFactory<\Database\Factories\BoxFactory> */
    use HasFactory;
    protected $fillable = ['name', 'descripiton', 'color'];
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
