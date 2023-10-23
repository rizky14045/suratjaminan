<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Models\FormJaminan;
use App\Models\MonitoringTagihan;


class AdminController extends Controller
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
        $formjaminan['monitoring'] =MonitoringTagihan::latest()->limit(3)->get();
        $formjaminan['sudah'] =FormJaminan::latest()->limit(3)->get();
        $formjaminan['count_monitoring'] = MonitoringTagihan::count();
        $formjaminan['count_sudah'] = FormJaminan::count();
    
        return view('admin.dashboard', $formjaminan);
    }

}
