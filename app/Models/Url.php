<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'counter',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'code',
        'url'
    ];
}
