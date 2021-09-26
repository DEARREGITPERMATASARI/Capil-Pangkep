<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Produk;
use App\Models\Perkembangan;
use App\Models\Demografi;




class DashboardController extends Controller
{
    public $response;
    public function __construct(){
        $this->response = new ResponseHelper();
    }
    
    public function getBerita($limit = NULL, $offset = NULL)
    {
        $data["count"] = Berita::count();
        
        if($limit == NULL && $offset == NULL){
            $data["berita"] = Berita::get();
        } else {
            $data["berita"] = Berita::take($limit)->skip($offset)->get();
        }

        // return $this->response->successData($data);
        return view('user.home',[
            'data' => $data["berita"],
            'count' => $data["count"]
        ]);
    }

    public function getGaleri($limit = NULL, $offset = NULL)
    {
        $data["count"] = Galeri::count();
        
        if($limit == NULL && $offset == NULL){
            $data["galeri"] = Galeri::get();
        } else {
            $data["galeri"] = Galeri::take($limit)->skip($offset)->get();
        }

        // return $this->response->successData($data);
        return view('user.galeri', [
            'data' => $data["galeri"],
            'count' => $data["count"] 
        ]);
    }

    public function getData($limit = NULL, $offset = NULL)
    {
        $data["count"] = Demografi::count();
        // $demo = Demografi::groupBy('tahun')->get()->sum('jumlah_penduduk');

        $demo = Demografi::select(DB::RAW("(sum(jumlah_penduduk)) as jumlah_penduduk"))
        ->groupBy(DB::RAW("tahun"))->pluck('jumlah_penduduk');
        // dd($ demo);
        
        
        if($limit == NULL && $offset == NULL){
            $data["demografi"] = Demografi::groupBy('tahun')->get();
        } else {
            $data["demografi"] = Demografi::groupby('tahun')->take($limit)->skip($offset)->get();
        }
        $year= Demografi::groupBy(DB::RAW("tahun"))->pluck('tahun');
        // dd($year);

        $user = Demografi::select(DB::RAW("(sum(jumlah_penduduk)) as jumlah_penduduk"))
        ->groupBy(DB::RAW("tahun"))->pluck('jumlah_penduduk');


        // return $this->response->successData($data);
        return view('user.data_demografi', [
            'data' => $data["demografi"],
            'count' => $data["count"],
            // 'sum' => $data["sum"]
            'demo' => $demo,
            // 'demo' => number_format($demo,0,',','.'),
            'year' => $year,
            'user' => $user 
        ]);
    }

    public function getProduk($limit = NULL, $offset = NULL)
    {
        $data["count"] = Produk::count();
        
        if($limit == NULL && $offset == NULL){
            $data["produk"] = Produk::get();
        } else {
            $data["produk"] = Produk::take($limit)->skip($offset)->get();
        }

        // return $this->response->successData($data);
        return view('user.produk_hukum', [
            'data' => $data["produk"],
            'count' => $data["count"]
        ]);
    }

    public function getPerkembangan($limit = NULL, $offset = NULL)
    {
        $data["count"] = Perkembangan::count();
        
        if($limit == NULL && $offset == NULL){
            $data["perkembangan"] = Perkembangan::get();
        } else {
            $data["perkembangan"] = Perkembangan::take($limit)->skip($offset)->get();
        }

        // return $this->response->successData($data);
        return view('user.perkembangan_penduduk', [
            'data' => $data["perkembangan"],
            'count' => $data["count"]
        ]);
    }

    public function getByTahun($id)
    {   
        $data["demografi"] = Demografi::where('tahun', $id)->get();

        $demo = Demografi::select(DB::RAW("(sum(jumlah_penduduk)) as jumlah_penduduk"))
        ->groupBy(DB::RAW("tahun"))->pluck('jumlah_penduduk');

        return view('user.detail_data_demografi', [
            'data' => $data["demografi"],
            'demo' => $demo,
        ]);    
    }
}
