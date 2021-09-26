<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Penghargaan;

class PenghargaanController extends Controller
{
    public $response;
    public function __construct(){
        $this->response = new ResponseHelper();
    }
    
    public function getAll($limit = NULL, $offset = NULL)
    {
        $data["count"] = Penghargaan::count();
        
        if($limit == NULL && $offset == NULL){
            $data["penghargaan"] = Penghargaan::get();
        } else {
            $data["penghargaan"] = Penghargaan::take($limit)->skip($offset)->get();
        }

        return $this->response->successData($data);
    }

    public function getById($id)
    {   
        $data["penghargaan"] = Penghargaan::where('penghargaan', $id)->get();

        return $this->response->successData($data);
    }

    public function insert(Request $request)
    {
        $validator = Validator::make($request->all(), [
			'nama_penghargaan' => 'required|string',
            'deskripsi_penghargaan' => 'required|string',
            'tahun'=> 'required|int'
		]);

		if($validator->fails()){
            return $this->response->errorResponse($validator->errors());
		}

		$penghargaan = new Penghargaan();
		$penghargaan->nama_penghargaan = $request->nama_penghargaan;
        $penghargaan->deskripsi_penghargaan = $request->deskripsi_penghargaan;
        $penghargaan->tahun = $request->tahun;
		$penghargaan->save();

        $data = Penghargaan::where('id_penghargaan','=', $penghargaan->id_penghargaan)->first();
        return $this->response->successResponseData('Penghargaan berhasil ditambahkan', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
			'nama_penghargaan' => 'required|string',
            'deskripsi_penghargaan' => 'required|string',
            'tahun'=> 'required|int'
		]);

		if($validator->fails()){
            return $this->response->errorResponse($validator->errors());
		}

		$user = Penghargaan::where('id_penghargaan', $id)->first();
		$user->nama_penghargaan = $request->nama_penghargaan;
        $user->deskripsi_penghargaan = $request->deskripsi_penghargaan;
        $user->tahun = $request->tahun;
		$user->save();

        return $this->response->successResponse('Penghargaan berhasil diubah');
    }

    public function delete($id)
    {
        $delete = Penghargaan::where('id_penghargaan', $id)->delete();

        if($delete){
            return $this->response->successResponse('Penghargaan berhasil dihapus');
        } else {
            return $this->response->errorResponse('Penghargaan gagal dihapus');
        }
    }
}
