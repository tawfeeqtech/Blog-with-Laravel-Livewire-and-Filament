<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'text_color',
        'bg_color',
    ];

    const COLOR = [
        'gray' => 'gray',
        'blue' => 'blue',
        'red' => 'red',
        'yellow' => 'yellow',
        'pink' => 'pink',
        'indigo' => 'indigo',
        'purple' => 'purple',
        'green' => 'green',
        'lime' => 'lime',
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
