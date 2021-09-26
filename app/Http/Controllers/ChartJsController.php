<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Demografi;
use DB;
use Carbon\Carbon;

class ChartJsController extends Controller
{
    public function getData()
    {
        $year= Demografi::groupBy(DB::RAW("tahun"))->pluck('tahun');
                        // dd($year);

        $user = Demografi::select(DB::RAW("(sum(jumlah_penduduk)) as jumlah_penduduk"))
        ->groupBy(DB::RAW("tahun"))->pluck('jumlah_penduduk');

    	return view('grafik')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));
    }
}
