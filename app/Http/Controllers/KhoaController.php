<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhoaController extends Controller
{
    public function index()
    {
        // Truy vấn đọc dữ liệu từ bảng khoa
        $khoa = DB::select('select * from nvkkhoa');
        //Chuyển dữ liệu lên view để diển thị
        return view('khoa.index',['khoa'=>$khoa]);
    }

    public function nvkGetKhoa($makh)
    {
        // Truy vấn đọc dữ liệu từ bảng khoa theo điều kiện makh
        $khoa = DB::select('select * from nvkkhoa where nvkMaKhoa=?',[$makh])[0];
        return view('khoa.detail',['khoa'=>$khoa]);
    }
    #edit
    public function nvkedit($makh)
    {
        $khoa = DB::select('select * from nvkkhoa where nvkMaKhoa=?',[$makh])[0];
        return view('khoa.edit',['khoa'=>$khoa]);
    }
    public function nvkEditsubmitl(Request $request)
    {
        //Lấy dữ liệu trên form sửa
        $makh = $request->input('nvkMaKhoa');
        $tenkh = $request->input('nvkTenKhoa');
        DB::update("UPDATE nvkkhoa SET nvkTenKhoa = ? WHERE nvkMaKhoa=?",[$tenkh,$makh]);
        return redirect('/khoa');
    }
    #Create Form
    public function create()
    {
        return view('khoa.create');
    }
    public function createSubmit(Request $request)
    {
        DB::insert('insert into nvkkhoa(nvkMaKhoa, nvkTenKhoa) values(?,?)',
        [$request->nvkMaKhoa,$request->nvkTenKhoa]);
        return redirect('/khoa');
    }
    // delete -> $makh
    public function delete($makh)
    {
        $khoa = DB::delete('delete from nvkkhoa where nvkMaKhoa =?',[$makh]);
        return redirect('/khoa');
    }
}
