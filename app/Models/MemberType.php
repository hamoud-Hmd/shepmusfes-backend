<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MemberType extends Model
{
    use HasFactory;
    protected $hidden=['created_at','updated_at'];

    public function member()
    {
        return $this->hasMany(Member::class);
    }
}
