<?php
namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Berita;

class BeritaController extends Controller
{
    public $response;
    public function __construct(){
        $this->response = new ResponseHelper();
    }
    
    public function getAll($limit = NULL, $offset = NULL)
    {
        $data["count"] = Berita::count();
        
        if($limit == NULL && $offset == NULL){
            $data["berita"] = Berita::get();
        } else {
            $data["berita"] = Berita::take($limit)->skip($offset)->get();
        }

        // return $this->response->successData($data);
        return view('berita',[
            'data' => $data["berita"],
            'count' => $data["count"]
        ]);
    }

    public function getById($id)
    {   
        $data["berita"] = Berita::where('berita', $id)->get();

        return $this->response->successData($data);
        // return view('user.index', ['data' => $data]);
    }

    public function insert(Request $request)
    {
        $validator = Validator::make($request->all(), [
			'judul' => 'required|string',
            'deskripsi' => 'required|string'
		]);

		if($validator->fails()){
            return $this->response->errorResponse($validator->errors());
		}

		$berita = new Berita();
		$berita->judul = $request->judul;
        $berita->deskripsi = $request->deskripsi;
		$berita->save();

        // $data = Berita::where('id_berita','=', $berita->id_berita)->first();
        // return $this->response->successResponseData('Berita berhasil ditambahkan', $data);
        return redirect('/berita');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
			'judul' => 'required|string',
            'deskripsi' => 'required|string'
		]);

		if($validator->fails()){
            return $this->response->errorResponse($validator->errors());
		}

		$user = Berita::where('id_berita', $id)->first();
		$user->judul = $request->judul;
        $user->deskripsi = $request->deskripsi;
		$user->save();

        // return $this->response->successResponse('Berita berhasil diubah');
        return redirect('/berita');

    }

    public function delete($id)
    {
        $delete = Berita::where('id_berita', $id)->delete();

        if($delete){
            // return $this->response->successResponse('Berita berhasil dihapus');
            return redirect('/berita')->with('success', 'Berita berhasil dihapus');
        } else {
            // return $this->response->errorResponse('Berita gagal dihapus');
            return redirect('/berita')->with('error', 'Berita gagal dihapus');
        }
    }
}
