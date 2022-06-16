<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\salary;

class employee extends Model
{
    use HasFactory;
    protected $fillable=['name','phone','address','image','salary','city','idno','experience','email'];

    public function salary()
    {
        return $this->belongsTo(salary::class);
    }
}
