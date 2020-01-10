<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Multitenantable
{
    // the name boot in bootMultitenantable make this function called when the model bootstrap
    public static function bootMultitenantable()
    {
        if (auth()->check()) {
            // observer
            static::creating(function ($model) {
                $model->user_id = Auth()->id();
            });

            // bootGlobalScope
            static::addGlobalScope("user_id", function (Builder $builder) {
                return $builder->where("user_id", auth()->id());
            });

        }
    }
}
