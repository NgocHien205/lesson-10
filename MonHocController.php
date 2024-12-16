<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonHocController extends Controller
{
    //bảng môn học
    public function MonHocIndex()
    {
        $monhocw = DB::table('monhoc')->get();
        return view('MonHoc.MonHocIndex',['monhocw'=>$monhocw]);
    }

     //chi tiết môn : detailMHMH
     public function detailMH($mamh) 
    {
        $monhocw = DB::table('MonHoc')->where('MaMH',$mamh)->first();
        return view('MonHoc.detailMH',['monhocw'=>$monhocw]);
    }
    //thêm mới môn học: insertMH
    public function insertMH()
    {
        return view('MonHoc.insertMH');
    }
    public function insertMHSubmit(Request $request)
    {
        DB::table('MonHoc')->insert(
        [
        'MaMH' =>$request->MaMH,
        'TenMH' =>$request->TenMH,
        'SoTiet' =>$request->SoTiet,
        ]
        );
        return redirect('/MonHocw');
    }
    // Sửa môn học :editMH
    public function editMH($mamh)
    {
        $monhocw = DB::table('MonHoc')->where('MaMH',$mamh)->first();
        return view('MonHoc.editMH',['monhocw'=>$monhocw]);
    }
    public function editMHSubmit(Request $request)
    {
        DB::table('MonHoc')
        ->where('MaMH',$request->MaMH)
        ->update(
            [
            'MaMH' =>$request->MaMH,
            'TenMH' =>$request->TenMH,
            'SoTiet' =>$request->SoTTiet,
            ]
            );
            return redirect('/MonHocw');
    }
    // deleteMH -> $mamh
    public function deleteMH($mamh)
    {
        DB::table('MonHoc')->where('MaMH','=', $mamh)->delete();
        return redirect('/MonHocw');
    }   







}
