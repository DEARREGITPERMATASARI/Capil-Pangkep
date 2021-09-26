<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Perkembangan;

class PerkembanganController extends Controller
{
    public $response;
    public function __construct(){
        $this->response = new ResponseHelper();
    }
    
    public function getAll($limit = NULL, $offset = NULL)
    {
        $data["count"] = Perkembangan::count();
        
        if($limit == NULL && $offset == NULL){
            $data["perkembangan"] = Perkembangan::get();
        } else {
            $data["perkembangan"] = Perkembangan::take($limit)->skip($offset)->get();
        }

        // return $this->response->successData($data);
        return view('perkembangan_penduduk', [
            'data' => $data["perkembangan"],
            'count' => $data["count"]
        ]);
    }

    public function getById($id)
    {   
        $data["perkembangan"] = Perkembangan::where('perkembangan', $id)->get();

        return $this->response->successData($data);
    }

    public function insert(Request $request)
    {
        $validator = Validator::make($request->all(), [
			'nama_perkembangan' => 'required|string|max:255',
            'file_perkembangan' => 'required'
		]);

		if($validator->fails()){
            return $this->response->errorResponse($validator->errors());
		}

        $file_perkembangan = rand().$request->file('file_perkembangan')->getClientOriginalName();
        $request->file('file_perkembangan')->move(base_path("./public/uploads"), $file_perkembangan);

		$perkembangan = new Perkembangan();
		$perkembangan->nama_perkembangan = $request->nama_perkembangan;
        $perkembangan->file_perkembangan = $file_perkembangan;
		$perkembangan->save();

        return redirect('/perkembangan-penduduk');

        // $data = Perkembangan::where('id_perkembangan','=', $perkembangan->id_perkembangan)->first();
        // return $this->response->successResponseData('Perkembangan Penduduk berhasil ditambahkan', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
			'nama_perkembangan' => 'required|string',
            'file_perkembangan' => 'required'
		]);

		if($validator->fails()){
            return $this->response->errorResponse($validator->errors());
		}

        $file_perkembangan = rand().$request->file('file_perkembangan')->getClientOriginalName();
        $request->file('file_perkembangan')->move(base_path("./public/uploads"), $file_perkembangan);

		$user = Perkembangan::where('id_perkembangan', $id)->first();
		$user->nama_perkembangan = $request->nama_perkembangan;
        $user->file_perkembangan = $file_perkembangan;
		$user->save();

        // return $this->response->successResponse('Perkembangan Penduduk berhasil diubah');
        return redirect('/perkembangan-penduduk');
    }

    public function delete($id)
    {
        $delete = Perkembangan::where('id_perkembangan', $id)->delete();

        if($delete){
            // return $this->response->successResponse('Perkembangan Penduduk berhasil dihapus');
            return redirect('/perkembangan-penduduk')->with('success', 'Perkembangan Penduduk berhasil dihapus');
        } else {
            // return $this->response->successResponse('Perkembangan Penduduk gagal dihapus');
            return redirect('/perkembangan-penduduk')->with('error', 'Perkembangan Penduduk gagal');
        }
    }
}
