<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnlineReviews extends Model
{
    protected $fillable = [
        'title','text',
    ];

    public function User()
    {
        return $this->belongsTo('App\Models\User');
        

    }

    protected $dates = [
        
    ];


    // public function Hospital()
    // {
    //     return $this->belongsTo('App\Models\Hospital');
        

    // }
}
