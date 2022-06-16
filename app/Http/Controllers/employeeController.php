<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class employeeController extends Controller
{
    public function create()
    {
        return view('Employees.AddEmployee');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:50|',
            'phone' =>'required',
            'address' =>'required',
            'salary'=>'required',
            'idno'=>'required',
            'city'=>'required',
            'experience'=>'required',
            'email'=>'required'
        ]);

        $image = $request->file('image');
        $imageName = time().$image->getClientOriginalName();  
        $image->move('uploads/product/images/', $imageName);

        employee::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'salary' => $request->salary,
            'city' => $request->city,
            'email' => $request->email,
            'experience' => $request->experience,
            'idno' => $request->idno,
           
            'image'=> 'uploads/product/images/'.$imageName,
            
        ]);

         return back()->with('success', 'You have successfully updated a post!');

    }

    public function index()
    {

        $employee = employee::OrderBy('created_at', 'DESC')->get();
        $i = 1;
        return view('Employees.viewEmployee', compact('employee', 'i'));
    }

    public function edit($id)
    {
        $emp = employee::findOrFail($id);
        return view('Employees.edit', compact('emp'));
    }
    public function update(Request $request, $id)
    
    {
        
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'salary' => 'required',
            'city' => 'required',
            'idno' => 'required',
            'experience' => 'required',
            'email' => 'required',

        ]);

        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('img', $image_new_name);
        }

        employee::find($id)->update($request->all());
        // $category->name = $request->name;
        // $category->status = $request->status;
        // $category->save();

        return redirect()->route('viewEmployee')->with([
            'successful_message' => 'updated successfully'
        ]);
       
    }

    public function delete($id)
    {
        employee::find($id)->delete();
        return redirect()->route('viewEmployee')->with([
            'successful_message' => 'Deleted successfully'
        ]);
    }

    public function show($id){
        $employee =employee::find($id);
        $i=1;
        return view('Employees.show',compact('employee','i'));
    }
}
