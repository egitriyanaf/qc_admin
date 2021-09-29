<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DataTables;
use App\Models\MasterProduksi;
use Illuminate\Support\Facades\DB;

class MasterProduksiController extends Controller
{
    public function index(){
        return view('masterproduksi');
    }
    public function datajson_masterproduksi(){
        return DataTables::of(MasterProduksi::all())->make(true);
    }
}
