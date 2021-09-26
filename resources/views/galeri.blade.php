@extends('layouts.main')

@section('container')
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title float-left"><b>Galeri</b></p>
                  <p class="card-description float-right">
                    <a href="#" class="btn btn-sm btn-success btn-icon-text" data-toggle="modal" data-target="#modalTambahFoto">
                      <i class="mdi mdi-plus btn-icon-prepend"></i>
                      Tambah
                    </a>
                  </p>
                  <div class="table-responsive">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Id Gambar</th>
                          <th>Nama Kegiatan</th>
                          <th>Gambar</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $datas)
                        <tr>
                          <td>{{ $datas->id_foto }}</td>
                          <td>{{ $datas->nama_foto }}</td>
                          <td><img width="200px" src="{{ url('/uploads/'.$datas->foto) }}"></td>
                          <td>
                            <a href="#" class="btn btn-sm btn-info btn-icon-text" data-toggle="modal" data-target="#modalUpdateFoto{{ $datas->id_foto }}">
                              <i class="mdi mdi-pencil btn-icon-prepend"></i>
                              Ubah
                            </a>
                            <form action="/delete-foto/{{ $datas->id_foto }}" method="post" enctype="multipart/form-data">
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

        <div class="modal fade" id="modalTambahFoto" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Form Galeri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="/insert-foto" method="post" enctype="multipart/form-data">
                 @csrf
                  <div class="form-group">
                    <label for="nama_foto" class="col-form-label">Nama Kegiatan</label>
                    <input type="text" name="nama_foto" class="form-control" id="nama_foto" placeholder="Nama Kegiatan">
                  </div>
                  <div class="form-group">
                    <label for="foto" class="col-form-label">Gambar</label>
                    <input type="file" name="foto" class="form-control" id="foto" placeholder="Gambar">
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

        <div class="modal fade" id="modalUpdateFoto{{ $datas->id_foto }}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Form Galeri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="/update-foto/{{ $datas->id_foto }}" method="post" enctype="multipart/form-data">
                 @csrf
                 @method('put')
                  <div class="form-group">
                    <label for="nama_foto" class="col-form-label">Nama Kegiatan</label>
                    <input type="text" name="nama_foto" class="form-control" id="nama_foto" value="{{ $datas->nama_foto}}" placeholder="Nama Kegiatan">
                  </div>
                  <div class="form-group">
                    <label for="foto" class="col-form-label">Gambar</label>
                    <input type="file" name="foto" class="form-control" id="foto" value="{{ $datas->foto }}" placeholder="Gambar">
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