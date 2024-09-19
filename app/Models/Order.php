<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'name', 'address', 'status', 'remark'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'order_category');
    }
}