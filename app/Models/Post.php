<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable= [
        'title',
        'description',
        'status',
        'image',
        'alt_text',
        'priority',
        'sub_category_id'
    ];

    public function subcategory(){
        return $this->belongsTo(SubCategory::class);
    }

    public function projects(){
        return $this->hasMany(Projects::class);
    }
}
