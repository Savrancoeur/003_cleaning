<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'nrc', 'phone', 'status', 'start_date'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_worker', 'worker_id', 'cat_id');
    }
}
