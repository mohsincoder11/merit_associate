<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Masters\ProductsController;
use App\Http\Controllers\Masters\LocationController;
use App\Http\Controllers\Masters\AddAssociateBankController;
use App\Http\Controllers\Masters\AreaController;
use App\Http\Controllers\Masters\EmployeeRegistraionController;
use App\Http\Controllers\Masters\PropertyController;
use App\Http\Controllers\Masters\ClientController;
//use App\Http\Controllers\Masters\FieldExecutiveController;
//use App\Http\Controllers\Masters\TechnicalHeadController;
use App\Http\Controllers\Admin\AddnewController;
use App\Http\Controllers\Masters\FloorController;
use App\Http\Controllers\Masters\TagsController;
use App\Http\Controllers\Masters\CategoryController;
use App\Http\Controllers\Masters\BranchController;
use App\Http\Controllers\Masters\StatusController;
use App\Http\Controllers\Masters\SettingController;
use App\Http\Controllers\FieldExecutive\New_ValuerController;
use App\Http\Controllers\FieldExecutive\Valuation_ReportController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('products',[ProductsController::class,'index'])->name('products');
Route::post('insert',[ProductsController::class,'insert'])->name('insert');
Route::get('delete/{id}',[ProductsController::class,'delete'])->name('delete');
Route::get('edit/{id}',[ProductsController::class,'edit'])->name('edit');
Route::post('update',[ProductsController::class,'update'])->name('update');


Route::get('location',[LocationController::class,'index'])->name('location');
Route::post('insertlocation',[LocationController::class,'insert_into_location'])->name('insertlocation');
Route::get('deletelocation/{id}',[LocationController::class,'delete_from_location'])->name('deletelocation');
Route::get('editlocation/{id}',[LocationController::class,'edit_location'])->name('editlocation');
Route::post('updatelocation',[LocationController::class,'update_location'])->name('updatelocation');


Route::get('associatesbank',[AddAssociateBankController::class,'index_associate_bank'])->name('associatesbank');
Route::post('associatesbankinsert',[AddAssociateBankController::class,'insert_associate_bank'])->name('associatesbankinsert');
Route::get('associatesbankdelete/{id}',[AddAssociateBankController::class,'delete_assocaite_bank'])->name('associatesbankdelete');
Route::get('associateedit/{id}',[AddAssociateBankController::class,'edit_assocaite_bank'])->name('associateedit');
Route::post('assocaiteupdate',[AddAssociateBankController::class,'update_associate_bank'])->name('assocaiteupdate');
    

Route::get('area',[LocationController::class,'index_area'])->name('area');
Route::post('areainsert',[LocationController::class,'insert_area'])->name('areainsert');
Route::get('areadelete/{id}',[LocationController::class,'delete_area'])->name('areadelete');
Route::get('areaedit/{id}',[LocationController::class,'edit_area'])->name('areaedit');
Route::post('areaupdate',[LocationController::class,'update_area'])->name('areaupdate');


Route::get('empregistration',[EmployeeRegistraionController::class,'index_emp_registraion'])->name('empregistration');

Route::post('empregistinsert',[EmployeeRegistraionController::class,'insert_emp_regist'])->name('empregistinsert');
Route::get('empregistdelete/{id}',[EmployeeRegistraionController::class,'delete_emp_regist'])->name('empregistdelete');
Route::get('empregistedit/{id}',[EmployeeRegistraionController::class,'edit_emp_registration'])->name('empregistedit');
Route::post('empregistupdate',[EmployeeRegistraionController::class,'update_emp_regist'])->name('empregistupdate');

Route::get('property',[PropertyController::class,'index_property'])->name('property');
Route::post('propertyinsert',[PropertyController::class,'insert_property'])->name('propertyinsert');
Route::get('propertydelete/{id}',[PropertyController::class,'delete_property'])->name('propertydelete');
Route::get('propertyedit/{id}',[PropertyController::class,'edit_property'])->name('propertyedit');
Route::post('propertyupdate',[PropertyController::class,'update_property'])->name('propertyupdate');


Route::get('client',[ClientController::class,'index_client'])->name('client');
Route::post('clientinsert',[ClientController::class,'insert_client'])->name('clientinsert');
Route::get('clientdelete/{id}',[ClientController::class,'delete_client'])->name('clientdelete');
Route::get('clientedit/{id}',[ClientController::class,'edit_client'])->name('clientedit');
Route::post('clientupdate',[ClientController::class,'update_client'])->name('clientupdate');



// Route::get('technicalhead',[TechnicalHeadController::class,'index_tech_head'])->name('technicalhead');
// Route::post('technicalheadinsert',[TechnicalHeadController::class,'insert_tech_head'])->name('technicalheadinsert');
// Route::get('technicalheaddelete/{id}',[TechnicalHeadController::class,'delete_tech_head'])->name('technicalheaddelete');




 Route::get('branch',[BranchController::class,'index_branch'])->name('branch');
 Route::post('branch_insert',[BranchController::class,'insert_branch'])->name('branch_insert');
 Route::get('branchdelete/{id}',[BranchController::class,'delete'])->name('branchdelete');
 Route::get('branchedit/{id}',[BranchController::class,'edit'])->name('branchedit');
 Route::post('branchupdate',[BranchController::class,'update'])->name('branchupdate');




 Route::get('floor',[FloorController::class,'index_cat'])->name('floor');
 Route::post('floorinsert',[FloorController::class,'insert_floor'])->name('floorinsert');
 Route::get('floordelete/{id}',[FloorController::class,'delete_floor'])->name('floordelete');
//  Route::get('cat',[FloorController::class,'index_cat'])->name('cat');
 Route::post('catinsert',[FloorController::class,'insert_category'])->name('catinsert');
 Route::get('catdelete/{id}',[FloorController::class,'delete_category'])->name('catdelete');

 Route::get('flooredit/{id}',[FloorController::class,'edit_floor'])->name('flooredit');
 Route::get('catedit/{id}',[FloorController::class,'edit_cat'])->name('catedit');


 Route::post('floorupdate',[FloorController::class,'update_floor'])->name('floorupdate');
 Route::post('catupdate',[FloorController::class,'update_cat'])->name('catupdate');



 Route::get('tag',[TagsController::class,'index_tag'])->name('tag');
 Route::post('taginsert',[TagsController::class,'insert_tag'])->name('taginsert');
 Route::get('tagdelete/{id}',[TagsController::class,'delete_tag'])->name('tagdelete');
 Route::get('tagedit/{id}',[TagsController::class,'edit_tag'])->name('tagedit');
 Route::post('tagupdate',[TagsController::class,'update_tag'])->name('tagupdate');


 Route::get('status',[StatusController::class,'index_status'])->name('status');
 Route::post('statusinsert',[StatusController::class,'insert_status'])->name('statusinsert');
 Route::get('statusdelete/{id}',[StatusController::class,'delete'])->name('statusdelete');
 Route::get('statusedit/{id}',[StatusController::class,'edit'])->name('statusedit');
 Route::post('statusupdate',[StatusController::class,'update'])->name('statusupdate');


 Route::get('setting',[SettingController::class,'index_setting'])->name('setting');
 Route::post('setting_insert',[SettingController::class,'insert_setting'])->name('setting_insert');


 Route::get('addnew',[AddnewController::class,'index_add_new'])->name('addnew');
 Route::post('addnewinsert',[AddnewController::class,'insert'])->name('addnewinsert');
 Route::get('addnewdelete/{id}',[AddnewController::class,'delete'])->name('addnewdelete');
 Route::get('addnewedit/{id}',[AddnewController::class,'edit'])->name('addnewedit');
 Route::get('addnewupdate',[AddnewController::class,'update'])->name('addnewupdate');
 Route::get('addnewarea',[AddnewController::class,'insert_area'])->name('addnewarea');

 Route::post('ongoingmodel',[AddnewController::class,'index_model'])->name('ongoingmodel');
 Route::get('ongoingmodelvalue',[AddnewController::class,'model_ongoing'])->name('ongoingmodelvalue');
 Route::get('completedmodelvalue',[AddnewController::class,'model_completed'])->name('completedmodelvalue');
 Route::get('cancelledmodelvalue',[AddnewController::class,'model_cancelled'])->name('cancelledmodelvalue');
 Route::get('pendingmodelvalue',[AddnewController::class,'model_pending'])->name('pendingmodelvalue');


 Route::get('get_area_id',[AddnewController::class,'area'])->name('get_area_id');


 Route::get('get_name_id',[AddnewController::class,'emp_name'])->name('get_name_id');







//  Route::get('fielddashboard',[FieldExecutiveController::class,'index_field_executive'])->name('fielddashboard');
 
//  Route::get('fieldvaluation',[FieldExecutiveController::class,'field_valuation'])->name('fieldvaluation');
//  Route::get('fieldreport',[FieldExecutiveController::class,'field_report'])->name('fieldreport');
 
//  Route::get('fieldreminder',[FieldExecutiveController::class,'field_reminder'])->name('fieldreminder');

 // Route::get('fieldexecutive',[FieldExecutiveController::class,'index_field_executive'])->name('fieldexecutive');
// Route::post('fieldexecutiveinsert',[FieldExecutiveController::class,'insert_field_executive'])->name('fieldexecutiveinsert');
// Route::get('fieldexecutivedelete/{id}',[FieldExecutiveController::class,'delete_field_executive'])->name('fieldexecutivedelete');
// Route::get('fieldexecutiveedit/{id}',[FieldExecutiveController::class,'edit_field_executive'])->name('fieldexecutiveedit');
// Route::post('fieldexecutiveupdate',[FieldExecutiveController::class,'update_field_executive'])->name('fieldexecutiveupdate');


// field executive  .....shiba

Route::get('FE/new/{id}',[New_ValuerController::class,'index'])->name('FE.new');
Route::post('FE/create',[New_ValuerController::class,'create'])->name('FE.create');
Route::get('FE/delete/{id}',[New_ValuerController::class,'delete'])->name('FE.delete');
Route::get('FE/edit/{id}',[New_ValuerController::class,'edit'])->name('FE.edit');
Route::post('FE/update',[New_ValuerController::class,'update'])->name('FE.update');


//Route::get('FE/valuation_report',[Valuation_ReportController::class,'index'])->name('FE.valuation_report');



Route::get('FE/ongoingmodel',[Valuation_ReportController::class,'index_model'])->name('FE.ongoingmodel');
Route::get('FE/ongoingmodelvalue',[Valuation_ReportController::class,'model_ongoing'])->name('FE.ongoingmodelvalue');
//field executive   .....shiba











