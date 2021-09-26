<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Produk;

class ProdukController extends Controller
{
    public $response;
    public function __construct(){
        $this->response = new ResponseHelper();
    }
    
    public function getAll($limit = NULL, $offset = NULL)
    {
        $data["count"] = Produk::count();
        
        if($limit == NULL && $offset == NULL){
            $data["produk"] = Produk::get();
        } else {
            $data["produk"] = Produk::take($limit)->skip($offset)->get();
        }

        // return $this->response->successData($data);
        return view('produk_hukum', [
            'data' => $data["produk"],
            'count' => $data["count"]
        ]);
    }

    public function getById($id)
    {   
        $data["produk"] = Produk::where('produk', $id)->get();

        return $this->response->successData($data);
    }

    public function insert(Request $request)
    {
        $validator = Validator::make($request->all(), [
			'nama_produk' => 'required|string',
            'file_produk' => 'required'
		]);

		if($validator->fails()){
            return $this->response->errorResponse($validator->errors());
		}

        $file_produk = rand().$request->file('file_produk')->getClientOriginalName();
        $request->file('file_produk')->move(base_path("./public/uploads"), $file_produk);

		$produk = new Produk();
		$produk->nama_produk = $request->nama_produk;
        $produk->file_produk = $file_produk;
		$produk->save();

        return redirect('/produk-hukum');

        // $data = Produk::where('id_produk','=', $produk->id_produk)->first();
        // return $this->response->successResponseData('Produk Hukum berhasil ditambahkan', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
			'nama_produk' => 'required|string',
            'file_produk' => 'required'
		]);

		if($validator->fails()){
            return $this->response->errorResponse($validator->errors());
		}

        $file_produk = rand().$request->file('file_produk')->getClientOriginalName();
        $request->file('file_produk')->move(base_path("./public/uploads"), $file_produk);

		$user = Produk::where('id_produk', $id)->first();
		$user->nama_produk = $request->nama_produk;
        $user->file_produk      = $file_produk;
		$user->save();

        // return $this->response->successResponse('Produk Hukum berhasil diubah');
        return redirect('/produk-hukum');
    }

    public function delete($id)
    {
        $delete = Produk ::where('id_produk', $id)->delete();

        if($delete){
            return redirect('/produk-hukum')->with('success', 'Produk hukum berhasil dihapus');
            // return $this->response->successResponse('Produk Hukum berhasil dihapus');
        } else {
            return redirect('/produk-hukum')->with('error', 'Produk hukum gagal dihapus');
            // return $this->response->successResponse('Produk Hukum gagal dihapus');
        }
    }
}
