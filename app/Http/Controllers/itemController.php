<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\category;
use App\Models\brand;
use App\Models\size;

class itemController extends Controller
{
    public function create()
    {
        $category = category::all();
        $brand = brand::all();
        $sizes = size::all();
        $i=1;
        $items = Item::all();
        
        return view('Items.create', compact('category', 'i','brand', 'sizes'));
    }

    public function show($id){
        $product =Item::find($id);
        $i = 1;
        return view('Items.show',compact('product','i'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:50',

        ]);


        $size = array();
        $quantity =        
        $image = $request->file('image');
        $imageName = time().$image->getClientOriginalName();  
        $image->move('uploads/product/images/', $imageName);

        Item::create([
            'name' => $request->name,
            'sku' =>$request->sku,
            'category_id' =>$request->category_id,
            'brand_id' =>$request->brand_id,
            'cost_price'=>$request->cost_price,
            'retail_price'=>$request->retail_price,
            'year'=>$request->year,
            'description'=>$request->description,
            'location'=>$request->location,
            'status'=>$request->status,
            'quantity'=>$request->quantity,
            'image'=> 'uploads/product/images/'.$imageName,
            'size_id' => $request->size_id,
        ]);


         return back()->with('success', 'You have successfully updated a post!');

    }

    public function index()
    {

        $product = Item::OrderBy('created_at', 'DESC')->get();
        $i = 1;
        return view('Items.index', compact('product', 'i'));
    }

    public function edit($id)
    {
        $pro = Item::findOrFail($id);
        $category = category::all();
        $brand = brand::all();
        $sizes = size::all();
        $i = 1;
        return view('Items.edit', compact('pro','category','brand','sizes','i'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'sku' =>'required',
            'category_id' =>'required',
            'brand_id' =>'required',
        ]);

        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('img', $image_new_name);
        }

        $product = Item::find($id);
        $product->name = $request->name;

        $product->save();

        return redirect()->route('viewProduct')->with([
            'successful_message' => 'updated successfully'
        ]);
    }

    public function delete($id)
    {
        Item::find($id)->delete();
        return redirect()->route('viewProduct')->with([
            'successful_message' => 'Deleted successfully'
        ]);
    }
}
