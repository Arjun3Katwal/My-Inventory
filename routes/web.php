<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('/landing');
})->name('dashboard');

Route::get('/landing', [App\Http\Controllers\admin::class, 'landing'])->name('landing');

//category

Route::get('/createCategory', [App\Http\Controllers\categoryController::class, 'create'])->name('createCategory');
Route::post('/storeCategory', [App\Http\Controllers\categoryController::class, 'store'])->name('storeCategory');
Route::get('/editCategory/{id}', [App\Http\Controllers\categoryController::class, 'edit'])->name('editCategory');
Route::post('/updateCategory/{id}', [App\Http\Controllers\categoryController::class, 'update'])->name('updateCategory');
Route::get('/deleteCategory/{id}', [App\Http\Controllers\categoryController::class, 'delete'])->name('deleteCategory');
Route::get('/viewCategory', [App\Http\Controllers\categoryController::class, 'index'])->name('viewCategory');

//brand
Route::get('/viewBrand', [App\Http\Controllers\brandController::class, 'view'])->name('viewBrand');
Route::get('/createBrand', [App\Http\Controllers\brandController::class, 'create'])->name('createBrand');
Route::post('/storeBrand', [App\Http\Controllers\brandController::class, 'store'])->name('storeBrand');
Route::get('/editBrand/{id}', [App\Http\Controllers\brandController::class, 'edit'])->name('editBrand');
Route::post('/updateBrand/{id}', [App\Http\Controllers\brandController::class, 'update'])->name('updateBrand');
Route::get('/deleteBrand/{id}', [App\Http\Controllers\brandController::class, 'delete'])->name('deleteBrand');

//sizes
Route::get('/viewSize', [App\Http\Controllers\sizeController::class, 'index'])->name('viewSize');
Route::get('/createSize', [App\Http\Controllers\sizeController::class, 'create'])->name('createSize');
Route::post('/storeSize', [App\Http\Controllers\sizeController::class, 'store'])->name('storeSize');
Route::get('/editSize/{id}', [App\Http\Controllers\sizeController::class, 'edit'])->name('editSize');
Route::post('/updateSize/{id}', [App\Http\Controllers\sizeController::class, 'update'])->name('updateSize');
Route::get('/deleteSize/{id}', [App\Http\Controllers\sizeController::class, 'delete'])->name('deleteSize');

//Prdoucts
Route::get('/viewProduct', [App\Http\Controllers\itemController::class, 'index'])->name('viewProduct');
Route::get('/createProduct', [App\Http\Controllers\itemController::class, 'create'])->name('createProduct');
Route::post('/storeProduct', [App\Http\Controllers\itemController::class, 'store'])->name('storeProduct');
Route::get('/editProduct/{id}', [App\Http\Controllers\itemController::class, 'edit'])->name('editProduct');
Route::post('/updateProduct/{id}', [App\Http\Controllers\itemController::class, 'update'])->name('updateProduct');
Route::get('/deleteProduct/{id}', [App\Http\Controllers\itemController::class, 'delete'])->name('deleteProduct');
Route::get('/showProduct/{id}', [App\Http\Controllers\itemController::class, 'show'])->name('showProduct');

//stock
Route::get('/viewStock', [App\Http\Controllers\stockController::class, 'viewStock'])->name('viewStock');
Route::get('/history', [App\Http\Controllers\stockController::class, 'history'])->name('history');
Route::post('/storeStock', [App\Http\Controllers\stockController::class, 'store'])->name('storeStock');



//employee
Route::get('/viewEmployee', [App\Http\Controllers\employeeController::class, 'index'])->name('viewEmployee');
Route::get('/createEmployee', [App\Http\Controllers\employeeController::class, 'create'])->name('createEmployee');
Route::post('/storeEmployee', [App\Http\Controllers\employeeController::class, 'store'])->name('storeEmployee');
Route::get('/editEmployee/{id}', [App\Http\Controllers\employeeController::class, 'edit'])->name('editEmployee');
Route::post('/updateEmployee/{id}', [App\Http\Controllers\employeeController::class, 'update'])->name('updateEmployee');
Route::get('/deleteEmployee/{id}', [App\Http\Controllers\employeeController::class, 'delete'])->name('deleteEmployee');
Route::get('/showEmployee/{id}', [App\Http\Controllers\employeeController::class, 'show'])->name('showEmployee');


//customer

Route::get('/viewCustomer', [App\Http\Controllers\customerController::class, 'index'])->name('viewCustomer');
Route::get('/createCustomer', [App\Http\Controllers\customerController::class, 'create'])->name('createCustomer');
Route::post('/storeCustomer', [App\Http\Controllers\customerController::class, 'store'])->name('storeCustomer');
Route::get('/editCustomer/{id}', [App\Http\Controllers\customerController::class, 'edit'])->name('editCustomer');
Route::post('/updateCustomer/{id}', [App\Http\Controllers\customerController::class, 'update'])->name('updateCustomer');
Route::get('/deleteCustomer/{id}', [App\Http\Controllers\customerController::class, 'delete'])->name('deleteCustomer');
Route::get('/showCustomer/{id}', [App\Http\Controllers\customerController::class, 'show'])->name('showCustomer');

//supplier

Route::get('/viewSupplier', [App\Http\Controllers\supplierController::class, 'index'])->name('viewSupplier');
Route::get('/createSupplier', [App\Http\Controllers\supplierController::class, 'create'])->name('createSupplier');
Route::post('/storeSupplier', [App\Http\Controllers\supplierController::class, 'store'])->name('storeSupplier');
Route::get('/editSupplier/{id}', [App\Http\Controllers\supplierController::class, 'edit'])->name('editSupplier');
Route::post('/updateSupplier/{id}', [App\Http\Controllers\supplierController::class, 'update'])->name('updateSupplier');
Route::get('/deleteSupplier/{id}', [App\Http\Controllers\supplierController::class, 'delete'])->name('deleteSupplier');
Route::get('/showSupplier/{id}', [App\Http\Controllers\supplierController::class, 'show'])->name('showSupplier');

//salary

Route::get('/viewSalary', [App\Http\Controllers\salaryController::class, 'index'])->name('viewSalary');
Route::get('/createSalary', [App\Http\Controllers\salaryController::class, 'create'])->name('createSalary');
Route::post('/storeSalary', [App\Http\Controllers\salaryController::class, 'store'])->name('storeSalary');
Route::get('/editSalary/{id}', [App\Http\Controllers\salaryController::class, 'edit'])->name('editSalary');
Route::post('/updateSalary/{id}', [App\Http\Controllers\salaryController::class, 'update'])->name('updateSalary');
Route::get('/deleteSalary/{id}', [App\Http\Controllers\salaryController::class, 'delete'])->name('deleteSalary');
Route::get('/showSalary/{id}', [App\Http\Controllers\salaryController::class, 'show'])->name('showSalary');
Route::get('/paySalary', [App\Http\Controllers\salaryController::class, 'paySalary'])->name('paySalary');
Route::get('/paypay/{id}', [App\Http\Controllers\salaryController::class, 'paypay'])->name('paypay');