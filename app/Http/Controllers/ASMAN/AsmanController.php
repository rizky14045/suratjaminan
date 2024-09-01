<?php

namespace App\Http\Controllers\ASMAN;

use PDF;
use Mail;
use Alert;
use App\User;
use App\Models\Visa;
use App\Models\Karyawan;
use App\Models\RumahSakit;
use App\Models\FormJaminan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KelasRawatInap;
use App\Models\SuratKeterangan;
use App\Models\JenisPemeriksaan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AsmanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {   
        $formjaminan['menunggu'] =FormJaminan::where('rangking',2)->latest()->limit(3)->get();
        $formjaminan['sudah'] =FormJaminan::where('rangking','!=' ,2)
        ->where('rangking','!=' ,1 )
        ->latest()->limit(3)->get();
        $formjaminan['count_menunggu'] = FormJaminan::where('rangking',2)->count();
        $formjaminan['count_sudah'] = FormJaminan::where('rangking','!=',2)->where('rangking','!=' ,1 )->count();
        $formjaminan['keterangan'] =SuratKeterangan::where('rangking','=', 1)->OrWhere('rangking','=', 2)->latest()->limit(3)->get();
        $formjaminan['visa'] =Visa::where('rangking','=', 1)->OrWhere('rangking','=', 2)->latest()->limit(3)->get();
        $formjaminan['count_keterangan'] = SuratKeterangan::where('rangking','=', 1)->OrWhere('rangking','=', 2)->count();
        $formjaminan['count_visa'] = Visa::where('rangking','=', 1)->OrWhere('rangking','=', 2)->count();
        return view('asman.dashboard', $formjaminan);
    }

    public function indexKaryawan() {
        $formjaminan_personal = FormJaminan::join('karyawans', 'form_jaminans.id_karyawan', 'karyawans.id')
                                    ->join('kelas_rawat_inaps', 'karyawans.id_kelas_rawat_inap', 'kelas_rawat_inaps.id')  
                                    ->select('karyawans.*', 'form_jaminans.*', 'kelas_rawat_inaps.*', 'form_jaminans.id as id')      
                                    ->where('karyawans.status_karyawan', 'karyawan_tetap')
                                    ->where('form_jaminans.jenis_surat', 'personal')
                                    ->where('form_jaminans.rangking', '!=' ,1)
                                    ->orderBy('form_jaminans.rangking', 'asc')
                                    ->latest('form_jaminans.created_at')->get();
        $formjaminan_keluarga = FormJaminan::join('karyawans', 'form_jaminans.id_karyawan', 'karyawans.id')
                                    ->join('kelas_rawat_inaps', 'karyawans.id_kelas_rawat_inap', 'kelas_rawat_inaps.id')  
                                    ->select('karyawans.*', 'form_jaminans.*', 'kelas_rawat_inaps.*', 'form_jaminans.id as id')      
                                    ->where('karyawans.status_karyawan', 'karyawan_tetap')
                                    ->where('form_jaminans.jenis_surat', 'keluarga')
                                    ->where('form_jaminans.rangking', '!=' ,1)
                                    ->orderBy('form_jaminans.rangking', 'asc')
                                    ->latest('form_jaminans.created_at')->get();

        $karyawan = Karyawan::where('status_karyawan', 'karyawan_tetap')->get();
        $kelasrawatinap = KelasRawatInap::pluck('jenis_kelas', 'id');
        $jenisPemeriksaan = JenisPemeriksaan::pluck('jenis_pemeriksaan', 'id');
        $rumahSakit = RumahSakit::pluck('nama_rumah_sakit', 'id');
        $data['formjaminan_personal'] = $formjaminan_personal;
        $data['formjaminan_keluarga'] = $formjaminan_keluarga;
        $data['karyawan'] = $karyawan;
        $data['kelasRawatInap'] = $kelasrawatinap;
        $data['jenisPemeriksaan'] = $jenisPemeriksaan;
        $data['rumahSakit'] = $rumahSakit;
        return view('asman.form-jaminan.index', $data);
    }

    public function indexPensiunan() {
        $formjaminan_personal = FormJaminan::join('karyawans', 'form_jaminans.id_karyawan', 'karyawans.id')
                                    ->join('kelas_rawat_inaps', 'karyawans.id_kelas_rawat_inap', 'kelas_rawat_inaps.id')  
                                    ->select('karyawans.*', 'form_jaminans.*', 'kelas_rawat_inaps.*', 'form_jaminans.id as id')      
                                    ->where('karyawans.status_karyawan', 'pensiunan')
                                    ->where('form_jaminans.jenis_surat', 'personal')
                                    ->where('form_jaminans.rangking', '!=' ,1)
                                    ->orderBy('form_jaminans.rangking', 'asc')
                                    ->latest('form_jaminans.created_at')->get();
        $formjaminan_keluarga = FormJaminan::join('karyawans', 'form_jaminans.id_karyawan', 'karyawans.id')
                                    ->join('kelas_rawat_inaps', 'karyawans.id_kelas_rawat_inap', 'kelas_rawat_inaps.id')  
                                    ->select('karyawans.*', 'form_jaminans.*', 'kelas_rawat_inaps.*', 'form_jaminans.id as id')      
                                    ->where('karyawans.status_karyawan', 'pensiunan')
                                    ->where('form_jaminans.jenis_surat', 'keluarga')
                                                                        ->orderBy('form_jaminans.rangking', 'asc')
                                    ->orderBy('form_jaminans.rangking', 'asc')
                                    ->latest('form_jaminans.created_at')->get();

        $karyawan = Karyawan::where('status_karyawan', 'pensiunan')->get();
        $kelasrawatinap = KelasRawatInap::pluck('jenis_kelas', 'id');
        $jenisPemeriksaan = JenisPemeriksaan::pluck('jenis_pemeriksaan', 'id');
        $rumahSakit = RumahSakit::pluck('nama_rumah_sakit', 'id');
        $data['formjaminan_personal'] = $formjaminan_personal;
        $data['formjaminan_keluarga'] = $formjaminan_keluarga;
        $data['karyawan'] = $karyawan;
        $data['kelasRawatInap'] = $kelasrawatinap;
        $data['jenisPemeriksaan'] = $jenisPemeriksaan;
        $data['rumahSakit'] = $rumahSakit;
        return view('asman.form-jaminan.index_pensiunan', $data);
    }

    public function showJaminan($id)
    {
        $formjaminan = FormJaminan::findOrFail($id);

        return view('asman.form-jaminan.show', compact('formjaminan'));
    }

    public function showPDF($id)
    {
        $formjaminan = FormJaminan::where('id',$id)->first();
        $mkad = User::where('role','mkad')->latest()->limit(1)->get();
        $sm = User::where('role','sm')->latest()->limit(1)->get();
        $slug = Str::slug($formjaminan['karyawan']['nama_karyawan'], '-');
        $nomor_pecah = explode("/",$formjaminan->nomor_surat);
        $nomor_gabung = implode("-",$nomor_pecah);
        $pdf_name = $nomor_gabung.'-'.$formjaminan->jenis_surat.'-'.date('Y-m-d').'-'.$formjaminan['karyawan']['nid'].'-'. $slug .'.pdf' ;
       return PDF::loadView('admin/template/pdf_asman', compact(['formjaminan','mkad','sm']))->setPaper('a4', 'portrait')->stream($pdf_name);
    }

    public function approveJaminan($id)
    {
        $formjaminan = FormJaminan::findOrFail($id);
        $formjaminan->rangking = 3;
        $formjaminan->status_pengajuan = 'Menunggu Persetujuan MBS';
        $formjaminan->save();
        Alert::success('Form Jaminan Berhasil Disetujui' );
        return redirect()->back();
    }

    public function ubahPassword(){
        return view('asman.ubah-password');
    }
    public function savePassword(Request $request){

        $validated = $request->validate([
            'password_lama' => 'required|string',
            'password' => [
                'required',
                'string',
            ],
            'konfirmasi_password' => 'string|required|same:password'
        ]);
    

        $user = User::find(Auth::user()->id);
        if( Hash::check($request->password_lama,$user->password) ){
            $user->password = bcrypt($request->password);
            $user->save();

            return redirect()->back()->with('success', 'Berhasil Merubah Password');
        } else {
            return redirect()->back()->with('failed', 'Password lama salah');
        }

    }
}
