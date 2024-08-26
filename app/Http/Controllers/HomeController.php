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
        $count = 0;
        $json_data =  json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $json), true );

        foreach ($json_data as $item){
   
            Karyawan::where('nid',$item['nid'])->update([
                    'jabatan' => $item['jabatan'],
                ]);
            $count = 1 + $count;
        }
        alert()->success('New ' . 'Announcement'. ' Created!' );

        return redirect('admin');
    }
}
