<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Demografi;

class DemografiController extends Controller
{
    public $response;
    public function __construct(){
        $this->response = new ResponseHelper();
    }
    
    public function getAll($limit = NULL, $offset = NULL)
    {
        $data["count"] = Demografi::count();
        
        if($limit == NULL && $offset == NULL){
            $data["demografi"] = Demografi::get();
        } else {
            $data["demografi"] = Demografi::take($limit)->skip($offset)->get();
        }

        // return $this->response->successData($data);
        return view('data_demografi', [
            'data' => $data["demografi"],
            'count' => $data["count"]
        ]);
    }

    public function getByTahun($id)
    {   
        $data["demografi"] = Demografi::where('tahun', $id)->get();

        return view('user.detail_data_demografi', [
            'data' => $data["demografi"],
        ]);    
    }

    public function getById($id)
    {   
        $data["demografi"] = Demografi::where('demografi', $id)->get();

        return $this->response->successData($data);
    }

    public function insert(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tahun'           => 'required',
			'nama_kecamatan'  => 'required|string',
            'jumlah_penduduk' => 'required'
		]);

		if($validator->fails()){
            return $this->response->errorResponse($validator->errors());
		}

		$demografi = new Demografi();
        $demografi->tahun           = $request->tahun;
		$demografi->nama_kecamatan  = $request->nama_kecamatan;
        $demografi->jumlah_penduduk = $request->jumlah_penduduk;
		$demografi->save();

        return redirect('/data-demografi');
        // $data = Demografi::where('id_demografi','=', $demografi->id_demografi)->first();
        // return $this->response->successResponseData('Data Demografi berhasil ditambahkan', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
			'tahun'           => 'required',
			'nama_kecamatan'  => 'required|string',
            'jumlah_penduduk' => 'required'
		]);

		if($validator->fails()){
            return $this->response->errorResponse($validator->errors());
		}

		$user = Demografi::where('id_demografi', $id)->first();
        $user->tahun            = $request->tahun;
		$user->nama_kecamatan   = $request->nama_kecamatan;
        $user->jumlah_penduduk  = $request->jumlah_penduduk;
		$user->save();

        // return $this->response->successResponse('Data Demografi berhasil diubah');
        return redirect('/data-demografi');
    }

    public function delete($id)
    {
        $delete = Demografi ::where('id_demografi', $id)->delete();

        if($delete){
            // return $this->response->successResponse('Data Demografi berhasil dihapus');
            return redirect('/data-demografi')->with('success', 'Data Demografi berhasil dihapus');
        } else {
            // return $this->response->errorResponse('Data Demografi gagal dihapus');
            return redirect('/data-demografi')->with('error', 'Data Demografi gagal dihapus');
        }
    }
}
