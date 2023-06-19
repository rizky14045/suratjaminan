<?php

namespace App\Http\Controllers\Admin;

use App\Models\FormJaminan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExportController extends Controller
{
    public function index(Request $request){

        $karyawan = $request->karyawan;
        $tanggal_mulai = $request->tanggal_mulai;
        $tanggal_selesai = $request->tanggal_selesai;

        if($karyawan){
            $data['forms'] = FormJaminan::join('karyawans', 'form_jaminans.id_karyawan', 'karyawans.id')
            ->join('kelas_rawat_inaps', 'karyawans.id_kelas_rawat_inap', 'kelas_rawat_inaps.id')  
            ->select('karyawans.*', 'form_jaminans.*', 'kelas_rawat_inaps.*', 'form_jaminans.id as id')      
            ->where('karyawans.status_karyawan', $karyawan)
            ->whereBetween('form_jaminans.created_at',[$tanggal_mulai,$tanggal_selesai])
            ->latest('form_jaminans.created_at')->get();

            $data['karyawan'] = $karyawan;
            $data['tanggal_mulai'] = $tanggal_mulai;
            $data['tanggal_selesai'] = $tanggal_selesai;
            return view('admin.export',$data);
        }else{
            $data['karyawan'] = '';
            $data['tanggal_mulai'] = '';
            $data['tanggal_selesai'] = '';
            return view('admin.export',$data);
        }

    }
}
