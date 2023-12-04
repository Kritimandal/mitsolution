<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'meta_description',
        'meta_title',
        'meta_keywords',
    ];

    public function subcategory()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function banner()
    {
        return $this->hasMany(Banner::class);
    }
}
