<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Masters\ProductsController;
use App\Http\Controllers\Masters\LocationController;
use App\Http\Controllers\Masters\AddAssociateBankController;
use App\Http\Controllers\Masters\AreaController;
use App\Http\Controllers\Masters\EmployeeRegistraionController;
use App\Http\Controllers\Masters\PropertyController;
use App\Http\Controllers\Masters\ClientController;
// use App\Http\Controllers\Masters\FieldExecutiveController;
use App\Http\Controllers\Masters\TechnicalHeadController;
use App\Http\Controllers\Admin\AddnewController;
use App\Http\Controllers\Masters\FloorController;
use App\Http\Controllers\Masters\TagsController;
use App\Http\Controllers\Masters\CategoryController;
use App\Http\Controllers\Masters\BranchController;
use App\Http\Controllers\Masters\StatusController;
use App\Http\Controllers\Masters\SettingController;
use App\Http\Controllers\FieldExecutive\New_ValuerController;
use App\Http\Controllers\FieldExecutive\Valuation_ReportController;
use App\Http\Controllers\AssistantValuer\AssitValuationReport;
use App\Http\Controllers\AssistantValuer\AssitNewValuationController;
use App\Http\Controllers\TechnicalManager\ValuationManagerController;
use App\Http\Controllers\TechnicalHead\ValuationHeadController;
use App\Http\Controllers\Setting\UserRoleController;
use App\Http\Controllers\Login\LoginController;
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

// Route::view('demo','Masters.tabledesign')->name('demo');

Route::get('tabledesign',[AddAssociateBankController::class,'index_table'])->name('tabledesign');





//login
Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('logininsert',[LoginController::class,'insert'])->name('logininsert');
Route::get('log_out',[LoginController::class,'log_out'])->name('log_out');
//login  

    Route::post('authenticate',[LoginController::class,'authenticate'])->name('authenticate');

 Route::group(['middleware' => 'RolesAndPermission'], function () 
 {

    Route::get('dashboard',[LoginController::class,'dashboard'])->name('dashboard');

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
    Route::post('areainsert_ajax',[LocationController::class,'insert_area_ajax'])->name('areainsert_ajax');
    Route::get('areadelete/{id}',[LocationController::class,'delete_area'])->name('areadelete');
    Route::get('areaedit/{id}',[LocationController::class,'edit_area'])->name('areaedit');
    Route::post('areaupdate',[LocationController::class,'update_area'])->name('areaupdate');
    Route::get('empregistration',[EmployeeRegistraionController::class,'index_emp_registraion'])->name('empregistration');
    Route::post('empregistinsert',[EmployeeRegistraionController::class,'insert_emp_regist'])->name('empregistinsert');
    Route::get('empregistdelete/{id}',[EmployeeRegistraionController::class,'delete_emp_regist'])->name('empregistdelete');
    Route::get('get_area_by_id',[EmployeeRegistraionController::class,'get_area_by_id'])->name('get_area_id');
    
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
    
    
    //Setting
    Route::get('user_role',[UserRoleController::class,'index'])->name('user_role');
    Route::post('user_role_insert',[UserRoleController::class,'insert'])->name('user_role_insert');
    Route::get('user_role_delete/{id}',[UserRoleController::class,'delete'])->name('user_role_delete');
    Route::get('user_role_edit/{id}',[UserRoleController::class,'edit'])->name('user_role_edit');
    Route::get('user_role_update',[UserRoleController::class,'update'])->name('user_role_update');
    
    //Setting
    


//Add New 08-05-23
    Route::get('addnew',[AddnewController::class,'index_add_new'])->name('addnew');
    Route::post('addnewinsert',[AddnewController::class,'insert'])->name('addnewinsert');
    Route::get('addnewdelete/{id}',[AddnewController::class,'delete'])->name('addnewdelete');
    Route::get('addnewedit/{id}',[AddnewController::class,'edit'])->name('addnewedit');
    Route::post('addnewupdate',[AddnewController::class,'update'])->name('addnewupdate');
    Route::get('addnewarea',[AddnewController::class,'insert_area'])->name('addnewarea');
    Route::post('ongoingmodel',[AddnewController::class,'index_model'])->name('ongoingmodel');
    Route::get('ongoingmodelvalue',[AddnewController::class,'model_ongoing'])->name('ongoingmodelvalue');
    Route::get('completedmodelvalue',[AddnewController::class,'model_completed'])->name('completedmodelvalue');
    Route::get('cancelledmodelvalue',[AddnewController::class,'model_cancelled'])->name('cancelledmodelvalue');
    Route::get('pendingmodelvalue',[AddnewController::class,'model_pending'])->name('pendingmodelvalue');
    Route::get('get_area_by_id_for_new',[AddnewController::class,'get_area_by_id'])->name('get_area_by_id_for_new');
    Route::get('get_name_id',[AddnewController::class,'emp_name'])->name('get_name_id');




//New Valuer Controller   08-05-23
    Route::get('FE.new/{id}',[New_ValuerController::class,'index'])->name('FE.new');
    Route::post('FE/create',[New_ValuerController::class,'create'])->name('FE.create');
    Route::get('FE/delete/{id}',[New_ValuerController::class,'delete'])->name('FE.delete');
    Route::get('FE/edit/{id}',[New_ValuerController::class,'edit'])->name('FE.edit');
    Route::post('FE/update',[New_ValuerController::class,'update'])->name('FE.update');
    Route::get('FE/ongoingmodel',[Valuation_ReportController::class,'index_model'])->name('FE.ongoingmodel');
    Route::get('FE/ongoingmodelvalue',[Valuation_ReportController::class,'model_ongoing'])->name('FE.ongoingmodelvalue');


    //assistant valuer 

    // Assistant Valuer Controller  08-05-23
Route::get('Av.new/{id}',[AssitNewValuationController::class,'index'])->name('Av.new');
Route::get('AV/ongoingmodel',[AssitValuationReport::class,'index_model'])->name('AV.ongoingmodel');
Route::get('assist_edit/{id}',[AssitNewValuationController::class,'edit'])->name('assist_edit');
Route::post('assit_update',[AssitNewValuationController::class,'update'])->name('assit_update');
//assitant valuer

//TechnicalManager
Route::get('technicalmanager_report',[ValuationManagerController::class,'index_report'])->name('technicalmanager_report');

Route::get('technicalmanager_edit/{id}',[ValuationManagerController::class,'index'])->name('technicalmanager_edit');
Route::post('tech_manager_update',[ValuationManagerController::class,'update'])->name('tech_manager_update');
// Technical Manager Controller  08-05-23
//routes for model of technical manager
Route::post('technicalmanagermodel',[ValuationManagerController::class,'index_model'])->name('technicalmanagermodel');
Route::get('technical_manager_modelvalue',[ValuationManagerController::class,'model_technical_manager'])->name('technical_manager_modelvalue');
//routes for model of technical manager
//TechnicalManager


//Technical Head
Route::get('technicalhead_report',[ValuationHeadController::class,'index_report'])->name('technicalhead_report');
Route::get('technicalhead_edit/{id}',[ValuationHeadController::class,'index'])->name('technicalhead_edit');
Route::post('tech_head_update',[ValuationHeadController::class,'update'])->name('tech_head_update');
//Technical Head


 });

