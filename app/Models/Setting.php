<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'setting';
    protected $fillable = [
        'site_name',
        'site_logo',
        'logo_alt_text',
        'site_location',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'site_phone_number',
        'site_email',
        'facebook_link',
        'linkedin_link',
        'twitter_link',
        'instagram_link',
    ]; 
}
