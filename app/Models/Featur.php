<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Featur extends Model
{
    use HasFactory;
    protected $table = 'features';
    protected $fillable = ['icon','title','descript'];
}
