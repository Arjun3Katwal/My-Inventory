<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class customerController extends Controller
{
    public function create()
    {
        return view('Customer.AddCustomer');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:50|',
            'phone' =>'required',
            'address' =>'required',
            'image'=>'required',
            'shopname'=>'required',
            'account_holder'=>'required',
            'account_number'=>'required',
            'city'=>'required',
            'bank_name'=>'required',
            'bank_branch'=>'required',
            'email'=>'required'
        ]);

        $image = $request->file('image');
        $imageName = time().$image->getClientOriginalName();  
        $image->move('uploads/product/images/', $imageName);

       customer::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'salary' => $request->salary,
            'city' => $request->city,
            'email' => $request->email,
            'shopname' => $request->shopname,
            'account_holder' => $request->account_holder,
            'account_number' => $request->account_number,
            'bank_name' => $request->bank_name,
            'bank_branch' => $request->bank_branch,
            'image'=> 'uploads/product/images/'.$imageName,
            
        ]);

         return back()->with('success', 'You have successfully updated a post!');

    }

    public function index()
    {

        $customer = customer::OrderBy('created_at', 'DESC')->get();
        $i = 1;
        return view('Customer.view', compact('customer', 'i'));
    }

    public function edit($id)
    {
        $cust =customer::findOrFail($id);
        return view('Customer.edit', compact('cust'));
    }
    public function update(Request $request, $id)
    
    {
        
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'bank_name' => 'required',
            'bank_branch' => 'required',
            'city' => 'required',
            'shopname' => 'required',
            'account_holder' => 'required',
            'account_number' => 'required',
            'email' => 'required',

        ]);

        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('img', $image_new_name);
        }

        // customer::find($id)->update($request->all());
        $customer = customer::find($id);
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->bank_name = $request->bank_name;
        $customer->bank_branch = $request->bank_branch;
        $customer->city = $request->city;
        $customer->shopname = $request->shopname;
        $customer->account_holder = $request->account_holder;
        $customer->account_number = $request->account_number;
        $customer->email = $request->email;

        $customer->save();
        // $category->name = $request->name;
        // $category->status = $request->status;
        // $category->save();

        return redirect()->route('viewCustomer')->with([
            'successful_message' => 'updated successfully'
        ]);
       
    }

    public function delete($id)
    {
        customer::find($id)->delete();
        return redirect()->route('viewCustomer')->with([
            'successful_message' => 'Deleted successfully'
        ]);
    }

    public function show($id){
        $customer =customer::find($id);
        $i=1;
        return view('Customer.show',compact('customer','i'));
    }
}
