<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Blog extends Model
{
    use HasFactory;
    use HasTrixRichText;

    protected $fillable = [
            'blog_title',
            'user_id',
            'category_id',
            'body',
            'blog_image'
    ];


    public function user(){
        return $this->belongsTo(User::class); 
    }
}
