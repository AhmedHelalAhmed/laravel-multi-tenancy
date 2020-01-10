<?php

namespace App;

use App\Traits\Multitenantable;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use Multitenantable;
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

    }
}
