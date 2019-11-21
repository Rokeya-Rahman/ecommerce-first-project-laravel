<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class NewShopController extends Controller
{
    public function index() {
        //$categories  = Category::where('publication_status', 1)->get();
        $newProducts = Product::where('publication_status', 1)
                                ->orderBy('id', 'DESC')
                                //->orderBy('id', 'ASC')
                                //->skip(2)
                                ->take(8)
                                ->get();

        return view('front-end.home.home', [
            //'categories'    =>$categories,
            'newProducts'   =>$newProducts
        ]);
    }

    public function categoryProduct($id) {
        $categoryProducts = Product::where('category_id', $id)
                                    ->where('publication_status', 1)
                                    ->get();
        //$categories  = Category::where('publication_status', 1)->get();

        return view('front-end.category.category-content', [
            //'categories'    =>$categories
            'categoryProducts' => $categoryProducts
        ]);
    }

    public function productDetails($id) {
        $product = Product::find($id);
        return view('front-end.product.product-details', ['product' => $product]);
    }
}
