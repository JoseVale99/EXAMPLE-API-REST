<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

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
    public function create(Request $request){

        $category = Category::create($request->all());

        return response()->json(
            [$category,'message' => 'data insert success!']
        );
    } 

    public function update(Request $request,$id){

        $category = Category::find($id);
       if (!$category){
        return response()->json(['error'=>'404 Not Found'],404);
       }
      $category->update($request->all());
      return response()->json(
          [$category,'message' => 'data update success!']); 
    }
    public function delete($id){
        $category = Category::find($id);
        if (!$category){
            return response()->json(['error'=>'404 Not Found'],404);
           }
           $category->delete();
           return response()->json(
            [$category,'message' => 'data delete success!']);  
    }
}


