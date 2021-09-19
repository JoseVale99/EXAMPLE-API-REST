<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
   
    use SoftDeletes; //delete 
    protected $dates = ['deleted_at']; // Register a new column
    protected $table = 'categories';
    public $timestamp = false;
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'cat_name',
        'cat_observations'
    ];




}
