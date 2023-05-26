<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmallOrder extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function favoriteConnection() {
        return $this->belongsTo(FavoriteConnection::class, 'favorite_connection', 'category_id');
    }

    public function petSex() {
        return $this->belongsTo(PetSex::class, 'pet_sex', 'category_id');
    }

    public function service() {
        return $this->belongsTo(Service::class, 'service', 'category_id');
    }
}
