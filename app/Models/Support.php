<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $table = 'supports';

    protected $fillable = ['support_category', 'title', 'subtitle', 'slug', 'content', 'image'];
}
