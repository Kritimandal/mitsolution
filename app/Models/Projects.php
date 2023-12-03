<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $fillable= [
        'name',
        'demo_url',
        'status',
        'image',
        'alt_text',
        'priority',
        'post_id'
    ];

    public function post(){
        return $this->belongsTo(Post::class);
    }

}
