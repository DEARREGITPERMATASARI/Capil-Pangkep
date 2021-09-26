@extends('layouts.main')

@section('container')
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 col-lg-6 grid-margin stretch-card">
              <div class="row">
                <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                  <div class="card bg-gradient-primary text-white text-center card-shadow-primary">
                    <div class="card-body">
                      <h6 class="font-weight-normal">Data Siswa</h6>
                      <h2 class="mb-0">1450</h2>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                  <div class="card bg-gradient-warning text-white text-center card-shadow-warning">
                    <div class="card-body">
                      <h6 class="font-weight-normal">Data Petugas</h6>
                      <h2 class="mb-0">8</h2>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                  <div class="card bg-gradient-danger text-white text-center card-shadow-danger">
                    <div class="card-body">
                      <h6 class="font-weight-normal">Data Pelanggaran</h6>
                      <h2 class="mb-0">120</h2>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                  <div class="card bg-gradient-success text-white text-center card-shadow-success">
                    <div class="card-body">
                      <h6 class="font-weight-normal">Siswa Melanggar Hari Ini</h6>
                      <h2 class="mb-0">12</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 grid-margin stretch-card">
              <div class="card" style="padding: 30px">
                <div class="card-bodyd-flex justify-content-between">
                  <div class="form-horizontal">
                    <h5 class="card-title"> PERKEMBANGAN JUMLAH PENDUDUK</h5>
                  </div>
                  <div>
                    <!-- <h3>Default settings</h3> -->
                    <div id="chart1"></div>
                  </div>                 
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      @endsection