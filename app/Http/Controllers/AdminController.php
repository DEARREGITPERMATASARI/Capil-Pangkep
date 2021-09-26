<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AdminController extends Controller
{
    public $response;
    public function __construct(){
        $this->response = new ResponseHelper();
    }
    
    public function getAll($limit = NULL, $offset = NULL)
    {
        $data["count"] = User::count();
        
        if($limit == NULL && $offset == NULL){
            $data["users"] = User::get();
        } else {
            $data["users"] = User::take($limit)->skip($offset)->get();
        }

        return $this->response->successData($data);
    }

    public function getById($id)
    {   
        $data["users"] = User::where('users', $id)->get();

        return $this->response->successData($data);
    }

    // public function insert(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
	// 		'Judul' => 'required|string',
    //         'deskripsi' => 'required|string'
	// 	]);

	// 	if($validator->fails()){
    //         return $this->response->errorResponse($validator->errors());
	// 	}

	// 	$berita = new Berita();
	// 	$berita->judul = $request->judul;
    //     $berita->deskripsi = $request->deskripsi;
	// 	$berita->save();

    //     $data = Berita::where('id_berita','=', $berita->id_berita)->first();
    //     return $this->response->successResponseData('Berita berhasil ditambahkan', $data);
    // }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
			'nama' => 'required|string',
            'username' => 'required|string'
		]);

		if($validator->fails()){
            return $this->response->errorResponse($validator->errors());
		}

		$user = User::where('id', $id)->first();
		$user->nama = $request-> nama;
        $user->username = $request-> username;
		$user->save();

        return $this->response->successResponse('Data Admin berhasil diubah');
    }

    public function delete($id)
    {
        $delete = User::where('id', $id)->delete();

        if($delete){
            return $this->response->successResponse('Data Admin berhasil dihapus');
        } else {
            return $this->response->errorResponse('Data Admin gagal dihapus');
        }
    }
}
