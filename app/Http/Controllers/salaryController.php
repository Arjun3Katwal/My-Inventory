<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\salary;
use App\Models\employee;
use Illuminate\Support\Facades\DB;

class salaryController extends Controller
{
    public function create()
    {
        $employee = employee::all();
        $salary = salary::all();
        $i=1;
        return view('Salary.addSalary',compact('salary','i','employee'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'emp_id'=>'required',
            'month' =>'required',
            'advanced_salary' =>'required',
            'year'=>'required',
            
        ]);

       
       salary::create([
            'emp_id' => $request->emp_id,
            'month' => $request->month,
            'advanced_salary' => $request->advanced_salary,
            'year' => $request->year,
            
            
        ]);

         return back()->with('success', 'You have successfully updated a post!');

    }

    public function index()
    {

        $salary=DB::table('salaries')
        ->join('employees','salaries.emp_id','employees.id')
        ->select('salaries.*','employees.name','employees.salary','employees.image')
        ->orderBy('id','DESC')
        ->get();
        // $salary = salary::OrderBy('created_at', 'DESC')->get();
        $i = 1;
        return view('Salary.view', compact('salary', 'i'));
    }

    public function edit($id)
    {
        $sal= salary::findOrFail($id);
        return view('Salary.edit', compact('sal'));
    }
    public function update(Request $request, $id)
    
    {
        
        $request->validate([
            'emp_id'=>'required',
            'month' =>'required',
            'advanced_salary' =>'required',
            'year'=>'required',

        ]);

      

        // customer::find($id)->update($request->all());
        $salary = salary::find($id);
        $salary->emp_id = $request->emp_id;
        $salary->month= $request->month;
        $salary->advanced_salary = $request->advanced_salary;
        $salary->year = $request->year;
       
      

        $salary->save();
        // $category->name = $request->name;
        // $category->status = $request->status;
        // $category->save();

        return redirect()->route('viewSalary')->with([
            'successful_message' => 'updated successfully'
        ]);
       
    }

    public function delete($id)
    {
        salary::find($id)->delete();
        return redirect()->route('viewSalary')->with([
            'successful_message' => 'Deleted successfully'
        ]);
    }

    public function show($id){
        $salary =salary::find($id);
        $i=1;
        return view('Salary.paypay',compact('salary','i'));
    }


    public function paySalary(){
        // $month = date("F", strtotime('-1 month'));
        // $salary=DB::table('salaries')
        // ->join('employees','salaries.emp_id','employees.id')
        // ->select('salaries.*','employees.name','employees.salary','employees.image')
        // ->where('month',$month)
        // ->get();
       $employee=DB::table('employees')->get();
       $i=1;
        return view('Salary.PaySalary',compact('employee','i'));
        }


        public function paypay($id){
            $salary =salary::find($id); 
            $employee = employee::find($id); 
            $i=1;
            return view('Salary.paypay',compact('salary','i','employee'));
        }
}
