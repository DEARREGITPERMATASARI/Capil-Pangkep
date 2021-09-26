@extends('layouts.main')

@section('container')
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title float-left"><b>Data Demografi</b></p>
                  <p class="card-description float-right">
                    <a href="#" class="btn btn-sm btn-success btn-icon-text" data-toggle="modal" data-target="#modalTambahData">
                      <i class="mdi mdi-plus btn-icon-prepend"></i>
                      Tambah
                    </a>
                  </p>
                  <div class="table-responsive">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>NO</th>
                          <th>Tahun</th>
                          <th>Nama Kecamatan</th>
                          <th>Jumlah Penduduk</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                        $number = 1;
                        @endphp 
                        @foreach ($data as $datas)
                        <tr>
                          <td>{{ $number }}</td>
                          <td>{{ $datas->tahun }}</td>
                          <td>{{ $datas->nama_kecamatan }}</td>
                          <td>{{ $datas->jumlah_penduduk}}</td>
                          <td>
                            <a href="#" class="btn btn-sm btn-info btn-icon-text" data-toggle="modal" data-target="#modalUpdateData{{ $datas->id_demografi }}">
                              <i class="mdi mdi-pencil btn-icon-prepend"></i>
                              Ubah
                            </a>
                            <form action="/delete-demografi/{{ $datas->id_demografi }}" method="post" enctype="multipart/form-data">
                              @csrf
                              @method('delete')
                              <button type="submit" class="btn btn-sm btn-danger btn-icon-text" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                <i class="mdi mdi-delete btn-icon-prepend"></i>
                                Hapus
                              </button>
                            </form>
                          </td>
                        </tr>
                        @php
                        $number++;
                        @endphp
                       @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="modalTambahData" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Form Data Demografi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="/insert-demografi" method="post">
                 @csrf
                  <div class="form-group">
                    <label for="tahun" class="col-form-label">Tahun</label>
                    <input type="number" name="tahun" class="form-control" id="tahun" placeholder="Tahun">
                  </div>
                  <div class="form-group">
                    <label for="nama_kecamatan" class="col-form-label">Nama Kecamatan</label>
                    <input type="text" name="nama_kecamatan" class="form-control" id="nama_kecamatan" placeholder="Nama Kecamatan">
                  </div>
                  <div class="form-group">
                    <label for="jumlah_penduduk" class="col-form-label">Jumlah Penduduk</label>
                    <input type="text" name="jumlah_penduduk" class="form-control" id="jumlah_penduduk" placeholder="Jumlah Penduduk">
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

        <div class="modal fade" id="modalUpdateData{{ $datas->id_demografi }}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Form Data Demografi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="/update-demografi/{{ $datas->id_demografi }}" method="post">
                 @csrf
                 @method('put')
                  <div class="form-group">
                    <label for="tahun" class="col-form-label">Tahun</label>
                    <input type="number" name="tahun" class="form-control" id="tahun" value="{{ $datas->tahun}}" placeholder="Tahun">
                  </div>
                  <div class="form-group">
                    <label for="nama_kecamatan" class="col-form-label">Nama Kecamatan</label>
                    <input type="text" name="nama_kecamatan" class="form-control" id="nama_kecamatan" value="{{ $datas->nama_kecamatan}}" placeholder="Nama Kecamatan">
                  </div>
                  <div class="form-group">
                    <label for="jumlah_penduduk" class="col-form-label">Jumlah Penduduk</label>
                    <input type="text" name="jumlah_penduduk" class="form-control" id="jumlah_penduduk" value="{{ $datas->jumlah_penduduk }}" placeholder="Jumlah Penduduk">
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