<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paid extends Model
{
    use HasFactory;
    protected $fillable=['employee_id','salary_month','paid_amount'];
}
