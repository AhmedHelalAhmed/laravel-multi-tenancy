<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'description',
        'status',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function boot()
    {
        parent::boot();
        static::addGlobalScope("hotel_created_user", function (Builder $builder) {
            if(auth()->check())
            {
                return $builder->where("user_id", auth()->id());

            }
        });
    }
}
