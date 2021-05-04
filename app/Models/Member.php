<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Member extends Model
{
    use HasFactory;
    protected $hidden=['created_at','updated_at'];
    protected $fillable=['name','description','email', 'tel', 'committee_id'. 'member_type_id'. 'image'];

    public function committee(): BelongsTo
    {
        return $this->belongsTo(Committee::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(MemberType::class,'member_type_id');
    }

    public function president(): HasOne
    {
        return $this->hasOne(President::class);
    }


}
