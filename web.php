<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllernamennh;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KhoaController;
use App\Http\Controllers\MonHocController;
use App\Http\Controllers\nnhaccount;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



#
#
#---lab01---
Route::get('/greeting', function () {
    return "<h1>Hello WORK</h1>";
});
//redirect   
Route::redirect('/here','/three');

Route::get('/three', function (){
    return "<h1>redirect to three </h1>";
});
//router return view
Route::get('/Nguyen-Hien', function (){
    return view('NguyenHien');
});

//route parameter
route::get('/dev/{name}',function($name="NguyenHien"){
    return "<h1> xin chao ".$name."</h1>";
});

route::get('/devmaster/{id}',function($id="NguyenHien"){
    return "<h1> devmaster ".$id."</h1>";
});


route::get('/account-index',[Controllernamennh::class,'index'])->name('nnh.create');

route::get('/account-create',[Controllernamennh::class,'create'])->name('nnh.create');

Route::get('/account-show',[Controllernamennh::class,'showData'])->name('nnh.show');

route::get('/account-list',[Controllernamennh::class,'list'])->name('nnh.list');

route::get('/account-getall',[Controllernamennh::class,'getAllAccount'])->name('nnh.getAllAccount');
#
#
#---lab03---:view
route::get('/nnh-view1',function(){
    return view('nnh-view1',['name'=>"k23CN1-project 1 - nnh"]);
});

route::get('/nnh-view2',function(){
    return view('nnh-view2',[
        'name'=>"k23CN1-project 1 - nnh",
        'array'=>[1,4,7,2,3],    
    ]);
});

route::get('/nnh-view3',function(){
    return view('nnh-view3',[
        'name'=>"k23CN1-project 1 - nguyễn ngọc hiến",
        'array'=>[1,2,3,4,6],
        'use'=>[],    
    ]);
});
#
#
#----lab04----:fruits
Route::get('/test', function () {
    return view('test');
});

Route::get('/fruits', [ProductController::class,'inde'])->name('test');
#
#
#----lab05----:Template Blade Layout
Route::get('/home',function(){
    return view('index');
});

Route::get('/about-us',function(){
    return view('about');
});

Route::get('/contact',function(){
    return view('contact');
});

#---lab06---:6: #Template Blade Layout – Chỉnh sửa lại Lab 5
Route::get('/login',
    [LoginController::class,'index'])->name('login.index');
Route::post('/login',
    [LoginController::class,'loginSubmit'])->name('login.submit');
#
#
#--lab07---:#Khoa
Route::get('/khoas',
    [KhoaController::class,'khoaIndex'])->name('khoa.index');

//chi tiết : detail
Route::get('/khoas/detail/{makh}',
    [KhoaController::class,'detail'])->name('khoa.detail');

//sửa : edit
Route::get('/khoas/edit/{makh}',
    [KhoaController::class,'edit'])->name('khoa.edit');
Route::post('/khoas/edit',
    [KhoaController::class,'editSubmit'])->name('khoa.editSubmit');

//thêm : insert
Route::get('/khoas/insert',
    [KhoaController::class,'insert'])->name('khoa.insert');
Route::post('/khoas/insert',
    [KhoaController::class,'insertSubmit'])->name('khoa.insertSubmit');

// xóa : delete
Route::get('/khoas/delete/{makh}',
    [KhoaController::class,'delete'])->name('khoa.delete');
#
#
#----lab08----:Môn họchọc
Route::get('/MonHocw',
    [MonHocController::class,'MonHocIndex'])->name('MonHoc.index');

//chi tiết môn học:detaiMH
Route::get('/MonHocw/detailMH/{mamh}',
    [MonHocController::class,'detailMH'])->name('MonHoc.detail');

//thêm mới :insertMH
Route::get('/MonHocw/insertMH',
    [MonHocController::class,'insertMH'])->name('MonHoc.insertMH');
Route::post('/MonHocw/insertMH',
    [MonHocController::class,'insertMHSubmit'])->name('MonHoc.insertMHSubmit');

// sửa môn học: editMH
Route::get('/MonHocw/editMH',
    [MonHocController::class,'editMH'])->name('MonHoc.editMH');
Route::post('/MonHocw/editMHSubmit',
    [MonHocController::class,'editMHSubmit'])->name('MonHoc.editMHSubmit'); 

## Xóa thông tin môn học
Route::get('/MonHocw/deleteMH/{mamh}',
    [MonHocController::class,'deleteMH'])->name('MonHoc.deleteMH');