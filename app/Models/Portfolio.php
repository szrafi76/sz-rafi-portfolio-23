<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table = 'portfolios';
    protected $fillable  = ['title', 'subTitle', 'client', 'description', 'status', 'order', 'category_id','completion_date', 'banner', 'gallery'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
