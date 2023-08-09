<?php

namespace App\Http\Controllers;
use App\Models\Guru;
use App\Models\Jumlah;
use App\Models\Kepsek;
use App\Models\Staff;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdminContoller extends Controller
{
    function show(){
        $data['staff'] = Staff::all();
        $data['guru'] = Guru::all();
        return view('admin.admin', $data);
    }
    function showJumlah(){
        $data['jumlah'] = Jumlah::all();
        return view('admin.profil.jumlah', $data);
    }

    function showGuru(){
        $data['staff'] = Staff::all();
        $data['guru'] = Guru::all();
        return view('admin.profil.guru', $data);
    }
    function showStaff(){
        $data['staff'] = Staff::all();
        $data['guru'] = Guru::all();
        return view('admin.profil.staff', $data);
    }
    function showKepsek(){
        $data['kepsek'] = Kepsek::first();
        return view('admin.profil.kepsek', $data);
    }

        //web
    function home(){
        $data['kepsek'] = Kepsek::first();
     return view('home', $data);
        }
    function showGurustaff(){
        $data['jumlah'] = Jumlah::first();
        $data['guru'] = Guru::all();
        $data['staff'] = Staff::all();
        return view('profil.gurustaff', $data);
    }
    function showKepalasekolah(){
        $data['kepsek'] = Kepsek::first();
        return view('profil.kepalasekolah', $data);
    }

    function createGuru(Request $req){
       Guru::create([
            'id' => $req->id,
            'namaGuru' => $req->namaGuru,
            'fotoGuru' => $req->file('fotoGuru')->store('fotoGuru')

        ]);
        return redirect('/admin-profil-guru');
     }
     function deleteGuru($id){
        $admin = Guru::where('id', $id)->first();
        $admin->delete();
        Storage::delete($admin->fotoGuru);
         return redirect('/admin-profil-guru');
      }
    function createStaff(Request $req){
      Staff::create([
            'id' => $req->id,
            'namaStaff' => $req->namaStaff,
            'fotoStaff' => $req->file('fotoStaff')->store('fotoStaff')

        ]);
        return redirect('/admin-profil-staff');
     }
     function deleteStaff($id){
        $admin =Staff::where('id', $id)->first();
        $admin->delete();
        Storage::delete($admin->fotoStaff);
         return redirect('/admin-profil-staff');
      }
    function createJumlah(Request $req){
      Jumlah::create([
            'id' => $req->id,
            'jumGuru' => $req->jumGuru,
            'jumMurid' => $req->jumMurid,
            'jumStaff' => $req->jumStaff

        ]);
        return redirect('/admin-profil-jumlah');
     }

}
