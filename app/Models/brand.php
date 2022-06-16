<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class brand extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    
    public function Item()
    {
        return $this->hasMany(Item::class);
    }
}
