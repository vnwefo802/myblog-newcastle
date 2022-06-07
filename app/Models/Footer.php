<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
  protected $table = 'footers';

    protected $guarded = ['title', 'facebook', 'twitter', 'instagram', 'youtube', 'blog_section', 'community_section', 'contact_us_section'];
}
