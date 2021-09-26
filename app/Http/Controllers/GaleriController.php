<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public $response;
    public function __construct(){
        $this->response = new ResponseHelper();
    }
    
    public function getAll($limit = NULL, $offset = NULL)
    {
        $data["count"] = Galeri::count();
        
        if($limit == NULL && $offset == NULL){
            $data["galeri"] = Galeri::get();
        } else {
            $data["galeri"] = Galeri::take($limit)->skip($offset)->get();
        }

        // return $this->response->successData($data);
        return view('galeri', [
            'data' => $data["galeri"],
            'count' => $data["count"] 
        ]);
    }

    public function getById($id)
    {   
        $data["galeri"] = Galeri::where('galeri', $id)->get();

        return $this->response->successData($data);
    }

    public function insert(Request $request)
    {
        $validator = Validator::make($request->all(), [
			'nama_foto' => 'required|string',
            'foto' => 'required'
		]);

		if($validator->fails()){
            return $this->response->errorResponse($validator->errors());
		}

        $foto = rand().$request->file('foto')->getClientOriginalName();
        $request->file('foto')->move(base_path("./public/uploads"), $foto);

		$galeri = new Galeri();
		$galeri->nama_foto = $request->nama_foto;
        $galeri->foto      = $foto;
		$galeri->save();

        return redirect('/galeri');

        // $data = Galeri::where('id_foto','=', $galeri->id_foto)->first();
        // return $this->response->successResponseData('Foto berhasil ditambahkan', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
			'nama_foto' => 'required|string',
            'foto' => 'required'
		]);

		if($validator->fails()){
            return $this->response->errorResponse($validator->errors());
		}

        $foto = rand().$request->file('foto')->getClientOriginalName();
        $request->file('foto')->move(base_path("./public/uploads"), $foto);

		$user = Galeri::where('id_foto', $id)->first();
		$user->nama_foto = $request->nama_foto;
        $user->foto      = $foto;
		$user->save();

        // return $this->response->successResponse('Foto berhasil diubah');
        return redirect('/galeri');
    }

    public function delete($id)
    {
        $delete = Galeri::where('id_foto', $id)->delete();

        if($delete){
            return $this->response->successResponse('Foto berhasil dihapus');
            // return redirect('/galeri')->with('success', 'Foto berhasil dihapus');
        } else {
            return $this->response->errorResponse('Foto gagal dihapus');
            // return redirect('/galeri')->with('error', 'Foto gagal dihapus');
        }
    }
}
