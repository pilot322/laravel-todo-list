<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /** @use HasFactory<\Database\Factories\ItemFactory> */
    use HasFactory;
    protected $fillable = ['name', 'amount', 'box_id'];

    public function box()
    {
        return $this->belongsTo(Box::class);
    }
    // px. $ninja->dojo()->name
}
