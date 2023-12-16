<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class car extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'price',
        'content',
        'published',
        'image',
        'cat_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
