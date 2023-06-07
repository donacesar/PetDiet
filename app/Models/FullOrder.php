<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FullOrder extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function petSex() {
        return $this->belongsTo(PetSex::class, 'pet_sex', 'category_id');
    }

    public function conditionIndex() {
        return $this->belongsTo(ConditionIndex::class, 'condition_index', 'category_id');
    }

    public function activity() {
        return $this->belongsTo(Activity::class, 'activity', 'category_id');
    }
}
