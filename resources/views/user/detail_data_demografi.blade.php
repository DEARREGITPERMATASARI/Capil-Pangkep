@extends('layouts.base')

@section('container')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Data Demografi</h2>
            <!-- <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p> -->
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="/home">Home</a></li>
          <li>Data Demografi</li>
        </ol>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
            <div class="card">
                <div class="card-header">
                  <b>Data Demografi</b>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <div class="input-group">
                      <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                      <button type="button" class="btn btn-outline-primary">search</button>
                    </div>      
                    </br>
                    <!-- table -->
                    <div class="table-responsive">          
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Nama Kecamatan</th>
                                <th scope="col">Jumlah Penduduk</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                            $number = 1;
                            @endphp
                            @foreach ($data as $datas)
                                <tr>
                                <td scope="row">{{ $datas['id_demografi'] }}</td>
                                <td>{{ $datas['tahun'] }}</td>
                                <td>{{ $datas['nama_kecamatan'] }}</td>
                                <td>{{ $datas['jumlah_penduduk'] }}</td>
                                </tr>
                                @php
                                $number++;
                                @endphp
                            @endforeach 
                            </tbody>
                        </table>
                    </div>
                        <!-- pagition -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end" style="line-height: 22px; font-size: 14px;">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </blockquote>
                </div>
            </div>
        </div>
    
    </section>
    <!-- End Frequently Asked Questions Section -->

</main><!-- End #main -->

@endsection

