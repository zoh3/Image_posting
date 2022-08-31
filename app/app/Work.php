<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'title',
        'body',
        ];
    
    protected $guarded = ['id'];
    
    public static $rules = [
        'body' =>'required|max:500',
        'image' =>'image|file',
        ];
    
    
}
