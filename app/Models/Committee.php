<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Committee extends Model
{
    use HasFactory;
    protected $hidden=['created_at','updated_at'];
    public function members(): HasMany
    {
        return $this->hasMany(Member::class);
    }

    public function president(): HasOne
    {
        return $this->hasOne(President::class);
    }

//    public function president(): HasOne
//    {
//        return $this->hasOne(Member::class);
//    }
}
