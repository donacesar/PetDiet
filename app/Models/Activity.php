<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['category', 'category_id'];

    public function fullOrders() {
        return $this->hasMany(FullOrder::class, 'activity', 'category_id');
    }
}
