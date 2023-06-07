<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConditionIndex extends Model
{
    use HasFactory;

    protected $table = 'condition_indexes';

    protected $fillable = ['category', 'category_id'];

    public function fullOrders() {
        return $this->hasMany(FullOrder::class, 'condition_index', 'category_id');
    }
}
