<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filho extends Model
{
    use HasFactory;

    protected $fillable = ['nome','RA'];
}
