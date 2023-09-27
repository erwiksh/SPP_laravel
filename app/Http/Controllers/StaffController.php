<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;

class StaffController extends Controller
{

    public function data(){
        $data = staff::all();
        return view('guru.dataSiswa',compact('data'));
    }

    public function add(){
        return view('guru.manageData.add');
    }

    public function insertData(Request $request){
        // dd($request->all());
        staff::create($request->all());
        return redirect()->route('staff')->with('success','Data berhasil ditambahkan');
    }

    public function update($id)
    {
        // Cari data berdasarkan ID
        $data = Staff::find($id);
    
        // Periksa apakah data ditemukan
        if (!$data) {
            return redirect()->route('staff')->with('error', 'Data tidak ditemukan.');
        }
    
        // Jika data ditemukan, tampilkan halaman update
        return view('guru.manageData.update', compact('data'));
    }

    public function updateData(Request $request, $id){
        $data = Staff::find($id);
    
        // Periksa apakah data ditemukan
        if (!$data) {
            return redirect()->route('staff')->with('error', 'Data tidak ditemukan');
        }
    
        // Update data menggunakan instance model
        $data->update($request->all());
    
        return redirect()->route('staff')->with('success', 'Data berhasil diubah');
    }

   
    public function delete($id)
    {
        // Cari data berdasarkan ID
        $data = staff::find($id);
    
        // Periksa apakah data ditemukan
        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
    
        // Hapus data
        $data->delete();
    
        return redirect()->route('staff')->with('success', 'Data berhasil dihapus.');
    }
}    


