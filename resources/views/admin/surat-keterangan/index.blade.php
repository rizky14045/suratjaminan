@extends('layouts.backend')
@section('styles')
    <style>
        .text-ck ul li{
            list-style:disc !important;
            color:black;
        }
    </style>
@endsection
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
                                                            href="{{ url('/admin') }}" class="text-dark">Home</a></li>
                                                    <li class="breadcrumb-item d-inline-block active">Surat Keterangan</li>
                                                </ol>
                                                <h4 class="text-dark">Surat Keterangan</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quicklink-sidebar-menu ctm-border-radius shadow-sm bg-white card">
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item text-center button-1"><a href="#"
                                            class="text-white">Surat Keterangan</a></li>
                                    <li class="list-group-item text-center button-1"><a
                                            href="{{ url('/admin/visa') }}" class="text-white">Visa</a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>

                <div class="col-xl-9 col-lg-8  col-md-12">
                    <div class="ctm-border-radius shadow-sm card">
                        <div class="card-body">
                            <!--Content table-->
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-karyawan" role="tabpanel"
                                    aria-labelledby="pills-karyawan-tab">
                                    <!--Content table-->
                                    <li class="nav-item float-right">
                                        <button class="btn btn-theme text-white ctm-border-radius button-1"
                                            data-toggle="modal" data-target="#add-Karyawan"> <i
                                                class="fa fa-plus mx-2"></i>Tambah Data Surat Keterangan</button>
                                    </li><br><br>
                                    <div class="table-back employee-office-table">
                                        <div class="table-responsive">
                                            <table id="data-table-1" class="table custom-table table-hover table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nomor Surat</th>
                                                        <th>Nama Karyawan</th>
                                                        <th>Nid</th>
                                                        <th>Penerima</th>
                                                        <th>Alamat Penerima</th>
                                                        <th>Keperluan</th>
                                                        <th>Tanggal Masuk Karyawan</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($surats as $i => $item)
                                                        <tr>
                                                            <td>{{ $i + 1 }}</td>
                                                            <td>{{ $item->nomor_surat }}</td>
                                                            <td>{{ $item->karyawan->nama_karyawan ?? ''}}</td>
                                                            <td>{{ $item->karyawan->nid  ?? ''}}</td>
                                                            <td class="text-ck">{{ $item->penerima }}</td>
                                                            <td class="text-ck">{{ $item->alamat_penerima }}</td>
                                                            <td class="text-ck">{{ $item->keperluan }}</td>
                                                            <td class="text-ck">{{ $item->tanggal_masuk_karyawan ?? $item->karyawan->tanggal_masuk_karyawan }}</td>
                                                            <td class="text-ck">{{ $item->status }}</td>

                                                            <td class="text-right" align="center">
                                                                <div class="table-action">
                                                                    <a href="{{ url('/admin/surat-keterangan/' . $item->id) }}"
                                                                        title="View surat-keterangan"><button
                                                                            class="btn btn-sm btn-info"><span
                                                                                class="lnr lnr-eye"></span>View</button></a>
                                                                                @if ($item->rangking == 4)
                                                                                    
                                                                                    @if ($item->file == null)       
                                                                                    <a href="{{ url('/admin/surat-keterangan/pdf/' . $item->id) }}"
                                                                                        title="Edit FormJaminan">
                                                                                        <button class="btn btn-sm btn-success">
                                                                                            <span class="lnr lnr-eye"></span>Generate PDF
                                                                                        </button>
                                                                                    </a>
                                                                                    @else
                                                                                    <a href="{{ asset('surat-keterangan-pdf/' . $item->file) }}"
                                                                                        title="Edit FormJaminan">
                                                                                        <button class="btn btn-sm btn-primary">
                                                                                            <span class="lnr lnr-eye"></span>Print
                                                                                        </button>
                                                                                    </a>
                                                                                    
                                                                                    @endif
                                                                                @endif
                                                                                @if ($item->rangking != 4)
                                                                                    
                                                                                    <a href="{{ url('/admin/surat-keterangan/' . $item->id . '/edit') }}"
                                                                                        title="Edit surat-keterangan"><button
                                                                                        class="btn btn-sm btn-primary"><span
                                                                                        class="lnr lnr-eye"></span>Edit</button>
                                                                                    </a>
                                                                                @endif
                                                                    <button type="button" class="btn btn-sm btn-danger"
                                                                        data-toggle="modal"
                                                                        data-target="#deleteConfirm{{ $item->id }}"><span
                                                                            class="lnr lnr-trash">Delete</span></button>
                                                                    <div class="modal fade" id="deleteConfirm{{ $item->id }}"
                                                                        tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog modal-sm">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel">Delete
                                                                                        Confirmation</h4>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    Are you sure want to delete this record?
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-default"
                                                                                        data-dismiss="modal">Close</button>
                                                                                    {!! Form::open([
            'method' => 'DELETE',
            'url' => ['/admin/surat-keterangan', $item->id],
            'style' => 'display:inline',
        ]) !!}
                                                                                    {!! Form::button('Delete', [
            'type' => 'submit',
            'class' => 'btn btn-danger btn-sm',
            'title' => 'Confirm Delete',
        ]) !!}
                                                                                    {!! Form::close() !!}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
    <!--/Content-->
    <div class="modal fade" id="add-Karyawan" role="document">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content ">
                <!-- Modal body -->
                <div class="modal-body style-add-modal">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title mb-3">Tambah Data</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif

                    {!! Form::open(['url' => '/admin/surat-keterangan', 'class' => '', 'enctype' => 'multipart/form-data']) !!}

                    @include ('admin.surat-keterangan.form', ['formMode' => 'create'])

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
