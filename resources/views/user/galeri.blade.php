@extends('layouts.base')

@section('container')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Gallery</h2>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="/home">Home</a></li>
          <li>Gallery</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <!-- <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> -->

        <div class="row portfolio-container" data-aos="fade-up">
         @foreach ($data as $datas)
          <div class="col-lg-4 col-md-6 portfolio-item ">
            <div class="portfolio-wrap">
              <img src="{{ url('/uploads/'.$datas->foto) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $datas->nama_foto}}</h4>
                <!-- <p>App</p> -->
                <div class="portfolio-links">
                  <a href="{{ url('/uploads/'.$datas->foto) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-show-alt"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-4 col-md-6 portfolio-item ">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-show-alt"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item ">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-show-alt"></i></a>
                </div>
              </div>
            </div>
          </div> -->
          @endforeach
        </div>
      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->