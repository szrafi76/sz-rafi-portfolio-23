<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable  = ['title', 'client', 'description', 'status', 'order', 'category','completion_date', 'banner', 'gallery'];
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category');
    }
}
