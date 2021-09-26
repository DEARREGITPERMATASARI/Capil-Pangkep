@extends('layouts.main')

@section('container')
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title float-left"><b>Produk Hukum</b></p>
                  <p class="card-description float-right">
                    <a href="#" class="btn btn-sm btn-success btn-icon-text" data-toggle="modal" data-target="#modalTambahProduk">
                      <i class="mdi mdi-plus btn-icon-prepend"></i>
                      Tambah
                    </a>
                  </p>
                  <div class="table-responsive">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama Produk</th>
                          <th>File</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $datas)
                        <tr>
                          <td>{{ $datas->id_produk }}</td>
                          <td>{{ $datas->nama_produk}}</td>
                          <td >
                            <a img class="mdi mdi-file-pdf" style="font-size: 30px; color:#94c045;" href="{{ url('/uploads/'.$datas->file_produk) }}"></a></td>
                          <td>
                            <a href="#" class="btn btn-sm btn-info btn-icon-text" data-toggle="modal" data-target="#modalUpdateProduk{{ $datas->id_produk }}">
                              <i class="mdi mdi-pencil btn-icon-prepend"></i>
                              Ubah
                            </a>
                            <form action="/delete-produk/{{ $datas->id_produk }}" method="post" enctype="multipart/form-data">
                              @csrf
                              @method('delete')
                              <button type="submit" class="btn btn-sm btn-danger btn-icon-text" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                <i class="mdi mdi-delete btn-icon-prepend"></i>
                                Hapus
                              </button>
                            </form>
                          </td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="modalTambahProduk" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Form Produk Hukum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="/insert-produk" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="nama_produk" class="col-form-label">Nama Produk Hukum</label>
                    <input type="text" name="nama_produk" class="form-control" id="nama_produk" placeholder="Nama Produk Hukum">
                  </div>
                  <div class="form-group">
                    <label for="file_produk" class="col-form-label">File</label>
                    <input type="file" name="file_produk" class="form-control" id="file_produk" placeholder="File">
                  </div>
                  <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-md btn-success">Simpan</button>
                    <button type="button" class="btn btn-md btn-light" data-dismiss="modal">Batal</button>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="modalUpdateProduk{{ $datas->id_produk }}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Form Produk Hukum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="/update-produk/{{ $datas->id_produk }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('put')
                  <div class="form-group">
                    <label for="nama_produk" class="col-form-label">Nama Produk Hukum</label>
                    <input type="text" name="nama_produk" class="form-control" id="nama_produk" value="{{ $datas->nama_produk }}" placeholder="Nama Produk Hukum">
                  </div>
                  <div class="form-group">
                    <label for="file_produk" class="col-form-label">File</label>
                    <input type="file" name="file_produk" class="form-control" id="file_produk" value="{{ $datas->file_produk }}" placeholder="File">
                  </div>
                  <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-md btn-success">Simpan</button>
                    <button type="button" class="btn btn-md btn-light" data-dismiss="modal">Batal</button>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- main-panel ends -->
    </div>
    @endsection