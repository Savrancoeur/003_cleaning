<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_category');
    }

    public function workers()
    {
        return $this->belongsToMany(Worker::class, 'category_worker');
    }
}