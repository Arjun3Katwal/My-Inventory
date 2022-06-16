<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\employee;

class salary extends Model
{
    use HasFactory;
    protected $fillable=['emp_id','month','year','advanced_salary'];


   

    public function employee()
    {
        return $this->hasMany(employee::class);
    }
}
