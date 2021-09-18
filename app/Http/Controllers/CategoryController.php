<?php

namespace App\Http\Controllers;
use App\Models\Category;
class CategoryController extends Controller
{
    //

    public function index(){
        return response()->json(Category::all(),200);
    }

    public function show($id){
        $category = Category::find($id);
        
        if (!$category){
            return response()->
            json(
                ['error'=>'404 Not Found'],404);
        }
            return response()->json(
        [$category,'message' => 'data show success!']
        );
    }
    

}


