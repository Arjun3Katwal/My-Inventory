<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;
use App\Models\brand;
use App\Models\size;

class Item extends Model
{
    use HasFactory;
    protected $fillable=['category_id', 'brand_id', 'size_id', 'name','sku','retail_price','cost_price','image','year','description','status','location', 'quantity'];



    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function brand()
    {
        return $this->belongsTo(brand::class);
    }

    public function size()
    {
        return $this->belongsTo(size::class);
    }


    public function setSizeAttribute($value)
    {
        $this->attributes['size_id'] = json_encode($value);
    }


    public function getSizeAttribute($value)
    {
        return $this->attributes['size_id'] = json_decode($value);
    }
}
