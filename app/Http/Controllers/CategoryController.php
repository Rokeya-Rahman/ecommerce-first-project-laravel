<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;

class categoryController extends Controller
{
    public function index() {
        return view('admin.category.add-category');
    }

    public function saveCategory(Request $request) {
        $category = new Category();
        $category->category_name            = $request->category_name;
        $category->category_description     = $request->category_description;
        $category->publication_status       = $request->publication_status;
        $category->save();

//        Category::create($request->all());

//        DB::table('categories')->insert([
//            'category_name'         => $request->category_name,
//            'category_description'  => $request->category_description,
//            'publication_status'    => $request->publication_status
//        ]);

//        return 'success';

        return redirect('/category/add')->with('massage', 'Category info save successfully');
    }

    public function manageCategory() {
        $categories = Category::all();
        //return$categories;

        return view('admin.category.manage-category', ['categories'=>$categories]);
    }

    public function unpublishedCategory($id) {
        $category = Category::find($id);
        $category->publication_status = 0;
        $category->save();

        return redirect('/category/manage')->with('massage', 'Category info unpublished');
    }

    public function publishedCategory($id) {
        $category = Category::find($id);
        $category->publication_status = 1;
        $category->save();

        return redirect('/category/manage')->with('massage', 'Category info published');
    }

    public function editCategory($id) {
        $category = Category::find($id);
        return view('admin.category.edit-category', ['category'=>$category]);
    }

    public function updateCategory(Request $request) {
        $category = Category::find($request->category_id);
        $category->category_name        = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status   = $request->publication_status;
        $category->save();

        return redirect('/category/manage')->with('massage', 'Category info update');
    }

    public function deleteCategory($id) {
        $category = Category::find($id);
        $category->delete();

        return redirect('/category/manage')->with('massage', 'Category info delete');
    }
}
