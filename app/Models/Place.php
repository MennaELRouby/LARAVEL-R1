<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Place extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'type',
        'fprice',
        'toprice',
        'content',
        'image'
    ];
}
