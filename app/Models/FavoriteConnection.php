<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteConnection extends Model
{
    use HasFactory;

    protected $fillable = ['category', 'category_id'];

    public function smallOrders() {
        return $this->hasMany(SmallOrder::class, 'favorite_connection', 'category_id');
    }
}
