<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stock;
use App\Models\Item;

class stockController extends Controller
{
    public function viewStock(){
        $product = Item::all();
        return view('stock.stock',compact('product'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:50',

        ]);
       
        stock::create([
            'product_id' => $request->product_id,
            'date' =>$request->date,
            'stock_type' =>$request->stock_type,
            'quantity' =>$request->quantity,
        ]);
    }
    
    public function history(){
    
        $stock = stock::all();
        $i =1;
        return view('stockHistory.view',compact('stock','i','item'));
    }
 


   
}
