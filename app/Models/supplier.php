<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    protected $fillable=['name','phone','address','email','shop','image','accountholder','accountnumber','bankname','bankbranch','city','type'];
}
