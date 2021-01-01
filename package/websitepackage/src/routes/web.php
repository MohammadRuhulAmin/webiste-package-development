<?php

use Illuminate\Support\Facades\Route;

//Route::get('/test',function(){
//    return view('WebSitepkg::template.adminTemplate');
//});
//
//Route::get('/test2',function(){
//    return view('WebSitepkg::SiteAdmin.SiteAdminIndex');
//});

Route::group(['namespace'=>'TeamBravo\WebSitepkg\Http\Controllers'],function(){
    Route::get('/site_admin','SiteAdminController@index')
        ->name('siteAdmin.dashboard')
        ->middleware('EmployeeAccessControl');

    Route::get('/site_admin/employee_list','SiteAdminController@employeeListView')
        ->name('siteAdmin.employeeList')
        ->middleware('EmployeeAccessControl');

    Route::get('/site_admin/employ_list/delete/{id}','SiteAdminController@employeeDelete')
        ->name('employee.delete')
        ->middleware('EmployeeAccessControl');

    Route::get('/site_admin/employ_list/edit/{id}','SiteAdminController@editEmployee')
        ->name('employee.edit')
        ->middleware('EmployeeAccessControl');

    Route::post('/site_admin/employee_list/update/{id}','SiteAdminController@updateEmployee')
        ->name('employee.update')
        ->middleware('EmployeeAccessControl');

    Route::get('/site_admin/create','SiteAdminController@createEmployee')
        ->name('SiteAdmin.CreateEmployee')
        ->middleware('EmployeeAccessControl');

    Route::post('/site_admin/employee/store','SiteAdminController@storeEmployee')
        ->name('employee.store')
        ->middleware('EmployeeAccessControl');

});

