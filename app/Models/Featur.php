<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Featur extends Model
{
    use HasFactory;
    protected $table = 'featurs';
    protected $fillable = ['fruits','vegetable'];
}
