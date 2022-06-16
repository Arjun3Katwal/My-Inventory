<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;

class supplierController extends Controller
{
    public function create()
    {
        return view('Supplier.AddSupplier');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:50|',
            'phone' =>'required',
            'address' =>'required',
            'image'=>'required',
            'shop'=>'required',
            'accountholder'=>'required',
            'accountnumber'=>'required',
            'city'=>'required',
            'bankname'=>'required',
            'bankbranch'=>'required',
            'email'=>'required',
            'type'=>'required'
        ]);

        $image = $request->file('image');
        $imageName = time().$image->getClientOriginalName();  
        $image->move('uploads/product/images/', $imageName);

       supplier::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'salary' => $request->salary,
            'city' => $request->city,
            'email' => $request->email,
            'shop' => $request->shop,
            'accountholder' => $request->accountholder,
            'accountnumber' => $request->accountnumber,
            'bankname' => $request->bankname,
            'bankbranch' => $request->bankbranch,
            'type' => $request->type,
            'image'=> 'uploads/product/images/'.$imageName,
            
        ]);

         return back()->with('success', 'You have successfully updated a post!');

    }

    public function index()
    {

        $supplier = supplier::OrderBy('created_at', 'DESC')->get();
        $i = 1;
        return view('Supplier.view', compact('supplier', 'i'));
    }

    public function edit($id)
    {
        $sup=supplier::findOrFail($id);
        return view('Supplier.edit', compact('sup'));
    }
    public function update(Request $request, $id)
    
    {
        
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'bankname' => 'required',
            'bankbranch' => 'required',
            'city' => 'required',
            'type'=>'required',
            'shop' => 'required',
            'accountholder' => 'required',
            'accountnumber' => 'required',
            'email' => 'required',

        ]);

        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('img', $image_new_name);
     
        }

        // customer::find($id)->update($request->all());
        $supplier = supplier::find($id);
        $supplier->name = $request->name;
        $supplier->phone = $request->phone;
        $supplier->address = $request->address;
        $supplier->bankname = $request->bankname;
        $supplier->bankbranch = $request->bankbranch;
        $supplier->type= $request->city;
        $supplier->type= $request->city;
        $supplier->shop = $request->shop;
        $supplier->accountholder = $request->accountholder;
        $supplier->accountnumber = $request->accountnumber;
        $supplier->email = $request->email;
      

        $supplier->save();
        // $category->name = $request->name;
        // $category->status = $request->status;
        // $category->save();

        return redirect()->route('viewSupplier')->with([
            'successful_message' => 'updated successfully'
        ]);
       
    }

    public function delete($id)
    {
        supplier::find($id)->delete();
        return redirect()->route('viewSupplier')->with([
            'successful_message' => 'Deleted successfully'
        ]);
    }

    public function show($id){
        $supplier =supplier::find($id);
        $i=1;
        return view('Supplier.show',compact('supplier','i'));
    }
}
