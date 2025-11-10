<?php
namespace App\Http\Controllers;
use App\Models\{Product,Category};
use Illuminate\Http\Request;


class ProductController extends Controller
{
public function index(Request $request)
{
$q = $request->input('q');
$category = $request->input('category');


$products = Product::with('images')
->when($q, fn($s)=>$s->where('name','like',"%$q%"))
->when($category, fn($s)=>$s->whereHas('category', fn($c)=>$c->where('slug',$category)))
->where('is_active', true)
->paginate(12);


$categories = Category::orderBy('name')->get();
return view('shop.index', compact('products','categories','q','category'));
}


public function show(Product $product)
{
$product->load('images','category');
return view('shop.show', compact('product'));
}
}