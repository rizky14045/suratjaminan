@extends('layouts.backend-mkad')
@section('styles')

<style>
     td ul li{
        list-style-type: disc !important;
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
                                                        href="{{ url('/mkad') }}" class="text-dark">Home</a></li>
                                                <li class="breadcrumb-item d-inline-block active">Surat Keterangan</li>
                                            </ol>
                                            <h4 class="text-dark">Surat Keterangan Detail</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>

            <div class="col-xl-9 col-lg-8  col-md-12">
                <div class="card shadow-sm ctm-border-radius">
                    <div class="card-body align-center">
                        <h4 class="card-title float-left mb-0 mt-2">Surat Keterangan Detail</h4>
                        <ul class="nav nav-tabs float-right border-0 tab-list-emp">
                        </ul>
                    </div>
                </div>
                <div class="ctm-border-radius shadow-sm card">
                    <div class="card-body">

                        <!--Content table-->
                        <div class="table-back employee-office-table">
                            <div class="table-responsive">
                                <table class="table custom-table table-hover table-hover">
                                    <tbody>
                                        <tr>
                                            <th> Nomor Surat </th>
                                            <td> {{ $record->nomor_surat }} </td>
                                        </tr>
                                        <tr>
                                            <th> Nama Karyawan </th>
                                            <td> {{ $record->karyawan->nama_karyawan }} </td>
                                        </tr>
                                        <tr>
                                            <th> Nid </th>
                                            <td> {{ $record->karyawan->nid }} </td>
                                        </tr>
                                        <tr>
                                            <th> Penerima </th>
                                            <td> {{ $record->penerima}} </td>
                                        </tr>
                                        <tr>
                                            <th> Keperluan </th>
                                            <td> {{ $record->keperluan }} </td>
                                        </tr>
                                        <tr>
                                            <th> Tanggal Masuk Karyawan </th>
                                            <td> {{ $record->karyawan->tanggal_masuk_karyawan ?? $record->tanggal_masuk_karyawan }} </td>
                                        </tr>
                                        <tr>
                                            <td colspan="10" align="center">
                                                <a href="{{ url('/mkad') }}"><button
                                                        class="btn btn-sm btn-warning"><span
                                                            class="lnr lnr-arrow-left"> Back</span>
                                                        </button>
                                                </a>
                                                @if ($record->rangking == 2)
                                                    <a href="{{ url('/mkad/surat-keterangan/approve/' . $record->id) }}"><button
                                                            class="btn btn-sm btn-success"><span
                                                                class="lnr lnr-checkmark-circle"> Approve</span>
                                                            </button>
                                                    </a>
                                                @endif
                                        </tr>
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
    <!--/Content-->
@endsection
