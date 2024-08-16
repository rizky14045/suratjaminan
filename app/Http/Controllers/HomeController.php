<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function sm(){
        $data['sm']= User::where('role','sm')->latest()->limit(1)->get();
        return view('qrcode-sm',$data);
    }
    public function mkad(){
        $data['mkad']= User::where('role','mkad')->latest()->limit(1)->get();
        return view('qrcode-mkad',$data);
    }
    public function asman(){
        $data['asman']= User::where('role','asman')->latest()->limit(1)->get();
        return view('qrcode-asman',$data);
    }

    public function json(){

        $json = file_get_contents(public_path('karyawan.json'));
       
        $json_data =  json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $json), true );

        foreach ($json_data as $item){
   
            Karyawan::create([
                    'nama_karyawan' => $item['nama_karyawan'],
                    'nid' => $item['nid'],
                    'jenjang_jabatan' => $item['jenjang_jabatan'],
                    'alamat' => $item['alamat'],
                    'tanggal_lahir' => $item['tanggal_lahir'],
                    'istri' => $item['istri'],
                    'anak_1' => $item['anak_1'],
                    'anak_2' => $item['anak_2'],
                    'anak_3' => $item['anak_3'],
                    'status_karyawan' => $item['status_karyawan'],
                    'tgl_lahir_istri' => $item['tgl_lahir_istri'],
                    'tgl_lahir_anak_1' => $item['tgl_lahir_anak_1'],
                    'tgl_lahir_anak_2' => $item['tgl_lahir_anak_2'],
                    'tgl_lahir_anak_3' => $item['tgl_lahir_anak_3'],
                    'email' => $item['email'],
                    'id_kelas_rawat_inap' => $item['jenis_kelas'],
                ]);
        }

        alert()->success('New ' . 'Announcement'. ' Created!' );

        return redirect('admin');
    }
}
