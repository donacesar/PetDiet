<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['category', 'category_id'];

    public function smallOrders() {
        return $this->hasMany(SmallOrder::class, 'service', 'category_id');
    }
}
