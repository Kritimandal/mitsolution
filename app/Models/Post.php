<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'description',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
        'image',
        'alt_text',
        'priority',
        'sub_category_id',
        
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function projects()
    {
        return $this->hasMany(Projects::class);
    }
}
