@extends('layouts.main')

@section('container')
<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title float-left"><b>Berita</b></p>
                  <p class="card-description float-right">
                    <a href="#" class="btn btn-sm btn-success btn-icon-text" data-toggle="modal" data-target="#modalTambahBerita">
                      <i class="mdi mdi-plus btn-icon-prepend"></i>
                      Tambah
                    </a>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Id Berita</th>
                          <th>Judul</th>
                          <th>Deskripsi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $datas)
                        <tr>
                          <td>{{ $datas->id_berita}}</td>
                          <td>{{ $datas->judul }}</td>
                          <td>{{ $datas->deskripsi }}</td>
                          <td>
                            <a href="#" class="btn btn-sm btn-info btn-icon-text" data-toggle="modal" data-target="#modalUpdateBerita{{ $datas->id_berita }}">
                              <i class="mdi mdi-pencil btn-icon-prepend"></i>
                              Ubah
                            </a>
                            <form action="/delete-berita/{{ $datas->id_berita }}" method="post" enctype="multipart/form-data">
                              @csrf
                              @method('delete')
                              <button type="submit" class="btn btn-sm btn-danger btn-icon-text" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                <i class="mdi mdi-delete btn-icon-prepend"></i>
                                Hapus
                              </button>
                            </form>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="modalTambahBerita" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Form Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="/insert-berita" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="judul" class="col-form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul Berita">
                  </div>
                  <div class="form-group">
                    <label for="deskripsi" class="col-form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Deskripsi">
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

        <div class="modal fade" id="modalUpdateBerita{{ $datas->id_berita }}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Form Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="/update-berita/{{ $datas->id_berita }}" method="post">
                  @csrf
                  @method('put')
                  <div class="form-group">
                    <label for="judul" class="col-form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" id="judul" value="{{ $datas->judul }}" placeholder="Judul Berita">
                  </div>
                  <div class="form-group">
                    <label for="deskripsi" class="col-form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{ $datas->deskripsi }}" placeholder="Deskripsi">
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
    <!-- page-body-wrapper ends -->
  </div>
  @endsection