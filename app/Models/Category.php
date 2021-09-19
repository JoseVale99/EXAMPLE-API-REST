<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
   
    use SoftDeletes; //delete 
    public $timestamp = false;

    protected $fillable = [
        'id',
        'cat_name',
        'cat_observations'
    ];




}
