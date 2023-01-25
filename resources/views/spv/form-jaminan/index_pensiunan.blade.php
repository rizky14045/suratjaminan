@extends('layouts.backend-spv')

@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
                    <aside class="sidebar sidebar-user">
                        <div class="card ctm-border-radius shadow-sm">
                            <div class="card-body py-4">
                                <div class="row">
                                    <div class="col-md-12 mr-auto text-left">
                                        <div class="custom-search input-group">
                                            <div class="custom-breadcrumb">
                                                <ol class="breadcrumb no-bg-color d-inline-block p-0 m-0 mb-2">
                                                    <li class="breadcrumb-item d-inline-block"><a
                                                            href="{{ url('/mkad') }}" class="text-dark">Home</a></li>
                                                    <li class="breadcrumb-item d-inline-block active">Form Jaminan</li>
                                                </ol>
                                                <h4 class="text-dark">Form Jaminan Pensiunan</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="quicklink-sidebar-menu ctm-border-radius shadow-sm bg-white card">
                            <div class="card-body">
                                <ul class="list-group">

                                    <li class="list-group-item text-center button-1"><a
                                            href="{{ url('/spv/form-jaminan') }}" class="text-white">Karyawan</a>
                                    </li>
                                    <li class="list-group-item text-center button-1"><a
                                            href="{{ url('/spv/form-jaminan-pensiunan') }}"
                                            class="text-white">Pensiunan</a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>

                <div class="col-xl-9 col-lg-8  col-md-12">
                    <div class="card shadow-sm ctm-border-radius">
                        {{-- <div class="card-body align-center">
                            <div class="card-icon bg-warning">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <h6 class="card-title float-left mb-0 mt-4 ml-2">TOTAL FORM JAMINAN PERAWATAN KESEHATAN DIGITAL
                                YANG
                                SUDAH DI BUAT : <span> {{ $formjaminan->count() }}</span></h6>
                            <ul class="nav nav-tabs float-right border-0 tab-list-emp">
                                <li class="nav-item pl-3 mt-2">
                                    <button class="btn btn-theme text-white ctm-border-radius button-1" data-toggle="modal"
                                        data-target="#add-FormJaminan"> <i class="fa fa-plus mx-2"></i>Tambah Form</button>
                                </li>
                            </ul>

                        </div> --}}
                        <div class="card-body align-center">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item mr-md-1">
                                    <a class="nav-link active" id="pills-personal-tab" data-toggle="pill"
                                        href="#pills-personal" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Personal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-keluarga-tab" data-toggle="pill" href="#pills-keluarga"
                                        role="tab" aria-controls="pills-keluarga" aria-selected="false">Keluarga</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="ctm-border-radius shadow-sm card">
                        <div class="card-body">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-personal" role="tabpanel"
                                    aria-labelledby="pills-personal-tab">
                                    <!--Content table-->
                                    <div class="table-back employee-office-table">
                                        <div class="table-responsive">
                                            <table id="data-table-1" class="table custom-table table-hover table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nomor Surat</th>
                                                        <th>Jenis Surat</th>
                                                        <th>Nama Karyawan</th>
                                                        <th>NID</th>
                                                        <th>Jenis Pemeriksaan</th>
                                                        <th>Rumah Sakit</th>
                                                        <th>Kelas Rawat Inap</th>
                                                        <th>Status Pengajuan</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($formjaminan_personal as $i => $item)
                                                        <tr>
                                                            <td>{{ $i + 1 }}</td>
                                                            <td>{{ $item->nomor_surat }}</td>
                                                            <td>{{ $item->jenis_surat }}</td>
                                                            <td>{{ $item->karyawan['nama_karyawan'] }}</td>
                                                            <td>{{ $item->karyawan['nid'] }}</td>
                                                            <td>{{ $item->jenisPemeriksaan['jenis_pemeriksaan'] }}</td>
                                                            <td>{{ $item->rumahSakit['nama_rumah_sakit'] }}</td>
                                                            <td>{{ $item->jenis_kelas }} /
                                                                {{ number_format($item->harga) }}</td>
                                                            <td>{{ $item->status_pengajuan }}</td>
                                                            </td>
                                                            <td class="text-right" align="center">
                                                                <div class="table-action">
                                                                    <a href="{{ url('/spv/form-jaminan/' . $item->id) }}"
                                                                        title="View FormJaminan">
                                                                        <button class="btn btn-sm btn-info">
                                                                            <span class="lnr lnr-eye"></span>View
                                                                        </button>
                                                                    </a>
                                                                    @if ($item->status_pengajuan == 'Menunggu Persetujuan SPV')
                                                                    <a href="{{ url('/spv/form-jaminan/approve/' . $item->id) }}"
                                                                        title="Approve FormJaminan">
                                                                        <button class="btn btn-sm btn-success">
                                                                            <span class="fa fa-check"></span>Approve
                                                                        </button>
                                                                    </a>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /Content Table -->
                                </div>
                                <div class="tab-pane fade" id="pills-keluarga" role="tabpanel"
                                    aria-labelledby="pills-keluarga-tab">
                                    <!--Content table-->
                                    <div class="table-back employee-office-table">
                                        <div class="table-responsive">
                                            <table id="data-table-2" class="table custom-table table-hover table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nomor Surat</th>
                                                        <th>Jenis Surat</th>
                                                        <th>Nama Karyawan</th>
                                                        <th>NID</th>
                                                        <th>Nama Pasien</th>
                                                        <th>Jenis Pemeriksaan</th>
                                                        <th>Rumah Sakit</th>
                                                        <th>Kelas Rawat Inap</th>
                                                        <th>Status Pengajuan</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($formjaminan_keluarga as $i => $item)
                                                        <tr>
                                                            <td>{{ $i + 1 }}</td>
                                                            <td>{{ $item->nomor_surat }}</td>
                                                            <td>{{ $item->jenis_surat }}</td>
                                                            <td>{{ $item->karyawan['nama_karyawan'] }}</td>
                                                            <td>{{ $item->karyawan['nid'] }}</td>
                                                            <td>{{ $item->nama_pasien }}</td>
                                                            <td>{{ $item->jenisPemeriksaan['jenis_pemeriksaan'] }}</td>
                                                            <td>{{ $item->rumahSakit['nama_rumah_sakit'] }}</td>
                                                            <td>{{ $item->jenis_kelas }} /
                                                                {{ number_format($item->harga) }}</td>
                                                            <td>{{ $item->status_pengajuan }}</td>
                                                            <td class="text-right" align="center">
                                                                <div class="table-action">
                                                                    <a href="{{ url('/mkad/form-jaminan/' . $item->id) }}"
                                                                        title="View FormJaminan">
                                                                        <button class="btn btn-sm btn-info">
                                                                            <span class="lnr lnr-eye"></span>View
                                                                        </button>
                                                                    </a>
                                                                     @if ($item->status_pengajuan == 'Menunggu Persetujuan SPV')  
                                                                     <a href="{{ url('/spv/form-jaminan/approve/' . $item->id) }}"
                                                                         title="Approve FormJaminan">
                                                                         <button class="btn btn-sm btn-success">
                                                                             <span class="fa fa-check"></span>Approve
                                                                         </button>
                                                                     </a>
                                                                    @endif
                                                                 
                                                                        
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /Content Table -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection