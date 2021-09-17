<?php

namespace App\Http\Controllers;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    //

    public function index(){
        return response()->json(Category::all(),200);
    }
}
