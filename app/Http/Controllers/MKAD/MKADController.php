<?php
namespace App\Http\Controllers\MKAD;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Models\FormJaminan;
use App\Models\Karyawan;
use App\Models\KelasRawatInap;
use App\Models\JenisPemeriksaan;
use App\Models\RumahSakit;
use Alert;
use Mail;

class MKADController extends Controller
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
        $formjaminan['menunggu'] =FormJaminan::where('status_pengajuan','=','Menunggu Persetujuan MKAD')->latest()->limit(3)->get();
        $formjaminan['sudah'] =FormJaminan::where('status_pengajuan','!=','Menunggu Persetujuan MKAD')->latest()->limit(3)->get();
        $formjaminan['count_menunggu'] = FormJaminan::where('status_pengajuan','=','Menunggu Persetujuan MKAD')->count();
        $formjaminan['count_sudah'] = FormJaminan::where('status_pengajuan','!=','Menunggu Persetujuan MKAD')->count();
        return view('mkad.dashboard', $formjaminan);
    }

    public function indexKaryawan() {
        $formjaminan_personal = FormJaminan::join('karyawans', 'form_jaminans.id_karyawan', 'karyawans.id')
                                    ->join('kelas_rawat_inaps', 'karyawans.id_kelas_rawat_inap', 'kelas_rawat_inaps.id')  
                                    ->select('karyawans.*', 'form_jaminans.*', 'kelas_rawat_inaps.*', 'form_jaminans.id as id')      
                                    ->where('karyawans.status_karyawan', 'karyawan_tetap')
                                    ->where('form_jaminans.jenis_surat', 'personal')
                                    ->orderBy('form_jaminans.status_pengajuan', 'ASC')
                                    ->latest('form_jaminans.created_at')->get();
        $formjaminan_keluarga = FormJaminan::join('karyawans', 'form_jaminans.id_karyawan', 'karyawans.id')
                                    ->join('kelas_rawat_inaps', 'karyawans.id_kelas_rawat_inap', 'kelas_rawat_inaps.id')  
                                    ->select('karyawans.*', 'form_jaminans.*', 'kelas_rawat_inaps.*', 'form_jaminans.id as id')      
                                    ->where('karyawans.status_karyawan', 'karyawan_tetap')
                                    ->where('form_jaminans.jenis_surat', 'keluarga')
                                    ->orderBy('form_jaminans.status_pengajuan', 'ASC')
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
        return view('mkad.form-jaminan.index', $data);
    }

    public function indexPensiunan() {
        $formjaminan_personal = FormJaminan::join('karyawans', 'form_jaminans.id_karyawan', 'karyawans.id')
                                    ->join('kelas_rawat_inaps', 'karyawans.id_kelas_rawat_inap', 'kelas_rawat_inaps.id')  
                                    ->select('karyawans.*', 'form_jaminans.*', 'kelas_rawat_inaps.*', 'form_jaminans.id as id')      
                                    ->where('karyawans.status_karyawan', 'pensiunan')
                                    ->where('form_jaminans.jenis_surat', 'personal')
                                    ->orderBy('form_jaminans.status_pengajuan', 'ASC')
                                    ->latest('form_jaminans.created_at')->get();
        $formjaminan_keluarga = FormJaminan::join('karyawans', 'form_jaminans.id_karyawan', 'karyawans.id')
                                    ->join('kelas_rawat_inaps', 'karyawans.id_kelas_rawat_inap', 'kelas_rawat_inaps.id')  
                                    ->select('karyawans.*', 'form_jaminans.*', 'kelas_rawat_inaps.*', 'form_jaminans.id as id')      
                                    ->where('karyawans.status_karyawan', 'pensiunan')
                                    ->where('form_jaminans.jenis_surat', 'keluarga')
                                    ->orderBy('form_jaminans.status_pengajuan', 'ASC')
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
        return view('mkad.form-jaminan.index_pensiunan', $data);
    }

    public function showJaminan($id)
    {
        $formjaminan = FormJaminan::findOrFail($id);

        return view('mkad.form-jaminan.show', compact('formjaminan'));
    }

    public function approveJaminan($id)
    {
        $sm = User::where('role','sm')->latest()->limit(1)->get();
        $formjaminan = FormJaminan::findOrFail($id);
        $formjaminan->status_pengajuan = 'Sudah Di setujui MKAD';
        $formjaminan->save();
        if($formjaminan){
            Mail::to($sm[0]['email'])->send(new \App\Mail\Sm_Mail($sm,$formjaminan));
        }
        Alert::success('Form Jaminan Berhasil Di setujui' );

        return redirect()->back();
    }
}
