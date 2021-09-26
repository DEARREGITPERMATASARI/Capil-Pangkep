@extends('layouts.base')

@section('container')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>PRODUK LAYANAN </br>
              DISDUKCAPIL KABUPATEN PANGKEP</h2>
            <!-- <p>Layanan Disdukcapil Kota Bandung terdiri atas Layanan Pencatatan Sipil (Capil) dan Layanan Pendaftaran Penduduk (Dafduk).</p> -->
          </div>
        </div>
      </div>
      
      <div class="container">
        <ol>
          <li><a href="/home">Home</a></li>
          <li>Produk Ducapil</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

<!-- ======= Pendaftaran Penduduk Section ======= -->
<section id="faq" class="faq">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Pendaftaran Penduduk</h2>
            <p>Pendaftaran Penduduk adalah pencatatan biodata penduduk, pencatatan atas pelaporan peristiwa kependudukan 
              dan pendataan penduduk rentan adminitrasi kependudukan serta penerbitan dokumen penduduk berupa kartu identitas 
              atau surat keterangan kependudukan.</p>
          </div>

      <div class="faq-list">
        <ul>   
            <li data-aos="fade-up">
                <i class="bx bx-news icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-1" class="collapsed">
                 Kartu Keluarga<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                  </br><Center><b>KARTU KELUARGA</b></Center>
                    </br>

                        Kartu Keluarga yang selanjutnya disingkat KK, adalah kartu identitas keluarga yang memuat tentang nama, susunan dan hubungan dalam </br>keluarga, serta identitas anggota keluarga.
                    </br>
                    <!-- 1 -->
                    <ul style="list-style-type: decimal;">
                      <li>PERSYARATAN BUAT KK BARU (PISAH KK DARI YANG SEBELUMNYA)</li>
                      <ul style="list-style: inside;">
                          <li style: "padding: 0px">
                              Surat Pengantar dari RT/RW dan Kelurahan
                          </li>
                          <li style: "padding: 0px">
                              Mengisi formulir F1.01 dari kecamatan
                          </li>
                          <li>
                              Kartu Keluarga awal (untuk nanti pisah KK)
                          </li>
                          <li style: "padding: 0px">
                              Fotokopi Buku Nikah/Akta Perkawinan
                          </li>
                          <li style: "padding: 0px">
                              Memperlihatkan dokumen pendukung seperti Ijazah, Rapor, Akta Kelahiran, SK Pengangkatan PNS/BUMN/BUMD/Swasta, dan Paspor                        
                          </li>
                          <li style: "padding: 0px">
                              Untuk WNA lengkapi dengan: fotokopi Paspor, fotokopi KITAS/KITAP Surat Keterangan penjamin/sponsor, fotokopi KTP-el penjamin/sponsor
                          </li>
                      </ul>
                    <!-- 2 -->
                      <li>PERSYARATAN PENAMBAHAN ANGGOTA KELUARGA KE DALAM KK</li>
                      <ul style="list-style: inside;">
                          <li style: "padding: 0px">
                              KK asli
                          </li>
                          <li style: "padding: 0px">
                              Surat Pengantar dari RT/RW dan Kelurahan
                         </li>
                          <li style: "padding: 0px">
                              Mengisi formulir F1.01 dari kecamatan
                          </li>
                          <li style: "padding: 0px">
                              Fotokopi Buku Nikah/Akta Perkawinan
                          </li>
                          <li style: "padding: 0px">
                              Sebab kelahiran: Surat Keterangan Kelahiran dari bidan/rumah sakit/Puskesmas
                          </li>
                          <li style: "padding: 0px">
                              Sebab perpindahan: Surat Keterangan Pindah Datang dalam wilayah NKRI(SKDWNI) atau Surat Keterangan Pindah - Datang Luar Negeri
                          </li>
                      </ul>
                    <!-- 3 -->
                    <li>PERSYARATAN PENGURANGAN ANGGOTA KELUARGA DI DALAM KK</li>
                    <ul style="list-style: inside;">
                        <li style: "padding: 0px">
                            KK asli
                        </li>
                        <li style: "padding: 0px">
                            Surat Pengantar dari RT/RW dan Kelurahan
                       </li>
                        <li style: "padding: 0px">
                            Mengisi formulir F1.01 dari kecamatan
                        </li>
                        <li style: "padding: 0px">
                            Sebab Meninggal: akta kematian
                        </li>
                        <li style: "padding: 0px">
                            Sebab perceraian: fotokopi Surat Perceraian dari Pengadilan Agama/Akta Perceraian
                        </li>
                        <li style: "padding: 0px">
                            Sebab perpindahan: Surat Keterangan Pindah Keluar (SKDWNI)                                                
                        </li>
                    </ul>
                    <!-- 4 -->
                    <li>PERSYARATAN KK YANG HILANG</li>
                    <ul style="list-style: inside;">
                        <li style: "padding: 0px">
                            Surat Pengantar dari RT/RW dan Kelurahan
                        </li>
                        <li style: "padding: 0px">
                            Surat Keterangan Kehilangan dari Kepolisian
                        </li>
                        <li style: "padding: 0px">
                            Mengisi formulir F1.01 dari kecamatan
                        </li>                                
                    </ul>
                   <!-- 5 -->
                   <li>PERSYARATAN PERBARUI KK KARENA KK RUSAK, PERUBAHAN ELEMEN DATA</li>
                   <ul style="list-style: inside;">
                      <li style: "padding: 0px">
                          KK asli
                      </li>
                      <li style: "padding: 0px">
                          Surat Pengantar dari RT/RW dan Kelurahan
                     </li>
                      <li style: "padding: 0px">
                          Mengisi formulir F1.01 dari kecamatan
                      </li>
                      <li style: "padding: 0px">
                          Memperlihatkan dokumen pendukung untuk perubahan elemen data
                      </li>                           
                   </ul>

                   <p>TATA CARA</p>
                   1. Offline (melalui Kecamatan)</br>
                  2. Online (melalui aplikasi PEMUDA Khusus untuk update elemen data & penambahan anggota keluarga baru) </br>
        </ul>
                </div>
            </li> 
            <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-id-card icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">
                  Kartu Tanda Penduduk Elektronik<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                  </br><Center><b>KARTU TANDA PENDUDUK ELEKTRONIK</b></Center>
                    </br>
                    Kartu Tanda Penduduk elektronik, yang selanjutnya disingkat KTP-el adalah identitas resmi penduduk sebagai bukti diri 
                    yang berlaku di seluruh wilayah Negara Kesatuan Republik Indonesia (NKRI). KTP-el diawali dengan proses perekaman KTP-el 
                    (rekam sidik jari, rekam iris mata, rekam tanda tangan digital, rekam pas foto, dan rekam biodata diri), lalu data biomterik yang telah direkam 
                    dilakukan penunggalan data oleh pusat sehingga statusnya Print Ready Record (siap cetak).
                    </br> </br>
                    <strong>Perekaman KTP-el</strong>
                  </br>                       
                  <ul style="list-style-type:inside;">
                      <li style: "padding: 0px">
                        Fotokopi KK
                      </li>
                      <li style: "padding: 0px">
                          Berusia 17 tahun/sudah menikah
                      </li>
                      <li style: "padding: 0px">
                          Belum pernah rekam KTP-el sebelumnya
                      </li>
                  </ul>
                  
                  <strong>Pengajuan Cetak KTP-el</strong>

                    <!-- 1 -->
                    <ul style="list-style-type: decimal;">
                      <li>Karena KTP-el Rusak</li>
                      <ul style="list-style: inside;">
                          <li style: "padding: 0px">
                              KTP-el lama
                          </li>
                          <li style: "padding: 0px">
                              Fotokopi KK
                          </li>                         
                      </ul>
                    <!-- 2 -->
                      <li>Karena KTP-el Hilang
                      </li>
                      <ul style="list-style: inside;">
                          <li style: "padding: 0px">
                              Fotokopi KK
                          </li>
                          <li style: "padding: 0px">
                              Surat Keterangan Kehilangan dari kepolisan
                         </li>
                      </ul>
                    <!-- 3 -->
                    <li>Karena Perbarui Elemen Data Pemilik KTP-el (Perbarui Status Perkawinan, Status Pendidikan, Alamat)</li>
                    <ul style="list-style: inside;">
                        <li style: "padding: 0px">
                            Fotokopi KK
                        </li>
                        <li style: "padding: 0px">
                            Memperlihatkan dokumen pendukung seperti Buku Nikah/Akta Perkawinan, Surat Perceraian dari Pengadilan Agama/Akta Perceraian, Ijazah, Rapor, Akta Kelahiran, SK Pengangkatan PNS/BUMN/BUMD/Swasta, Paspor, dan Surat Keterangan Pindah Datang (SKDWNI)
                       </li>                       
                    </ul>
                    <!-- 4 -->
                    <li>Mengganti Dari Surat Keterangan Pengganti KTP-el (Suket) Ke KTP-el</li>
                    <ul style="list-style: inside;">
                        <li style: "padding: 0px">
                            Fotokopi KK
                        </li>
                        <li style: "padding: 0px">
                            Fotokopi Suket
                        </li>                            
                    </ul>
                
                    <i>*Jika perekaman di kecamatan maka pelayanan cetak KTP-el di kecamatan, jika perekaman di gerai Citylink maka pelayanan cetak KTP-el di gerai Citylink.</i>                 
        </ul>
                </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-cube icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">
                  Kartu Identitas Anak<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                  </br><Center><b>KARTU IDENTITAS ANAK</b></Center>
                    </br>
                    Kartu Identitas Anak yang selanjutnya disingkat menjadi KIA adalah identitas resmi anak sebagai bukti diri anak yang berusia kurang dari 17 tahun dan belum menikah.
                  </br>                  </br>

                    Bagi pemegang KIA Kota Bandung bisa mendapatkan promo menarik dengan sponsorship yang sudah bekerjasama dengan Disdukcapil Kota Bandung. Berikut ini adalah daftarnya:
                    </br> </br>

                    <!-- 1 -->
                    <ul style="list-style-type: decimal;">
                      <li>Persyaratan Buat Baru KIA
                      </li>
                      <ul style="list-style: inside;">
                          <li style: "padding: 0px">
                            Prioritas usia anak 0-17 tahun kurang sehari
                          </li>
                          <li style: "padding: 0px">
                            Fotokopi Akta Kelahiran
                          </li>
                          <li style: "padding: 0px">
                              Fotokopi KK orangtua/wali
                          </li>
                          <li style: "padding: 0px">
                            Fotokopi KTP-el kedua orangtua
                          </li>    
                          <li style: "padding: 0px">
                            Pasfoto 2×3 (2 lembar)
                          </li>
                          <li style: "padding: 0px">
                            Fotokopi Paspor dan KITAP (Untuk WNA)
                          </li>                        
                      </ul>

                    <!-- 2 -->
                      <li>Persyaratan KIA Yang Hilang
                      </li>
                      <ul style="list-style: inside;">
                          <li style: "padding: 0px">
                            Surat Keterangan Kehilangan dari kepolisian
                          </li>
                          <li style: "padding: 0px">
                            Fotokopi KK orangtua/wali
                         </li>
                      </ul>                   
        </ul>
                </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-label icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">
                  Surat Keterangan Datang<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                  </br><Center><b>SURAT KETERANGAN DATANG</b></Center>
                  </br>
                    Surat Keterangan Pindah Datang digunakan sebagai dasar perubahan atau penerbitan KK dan KTP-el penduduk yang bersangkutan.
                    
                    <!-- 1 -->
                    <ul style="list-style-type: decimal;">
                      <li>Persyaratan Pindah Datang Antar Kelurahan
                      </li>
                      <ul style="list-style: inside;">
                          <li style: "padding: 0px">
                              Surat Keterangan Pindah Dari Kelurahan Asal
                          </li>
                          <li style: "padding: 0px">
                              KK dan KTP-el (asli dan fotokopi)
                          </li>                                              
                      </ul>

                    <!-- 2 -->
                      <li>Persyaratan Pindah Datang Antar Kecamatan
                      </li>
                      <ul style="list-style: inside;">
                          <li style: "padding: 0px">
                              Surat Keterangan Pindah dari Kelurahan Asal
                          </li>
                          <li style: "padding: 0px">
                              Surat Keterangan Pindah dari Kecamatan Asal
                         </li>
                         <li style: "padding: 0px">
                            KK dan KTP-el (asli dan fotokopi)
                       </li>
                      </ul>    
                      
                      <!-- 3 -->
                      <li>Persyaratan Pindah Datang Antar Kota/Provinsi
                      </li>
                        <ul style="list-style: inside;">
                            <li style: "padding: 0px">
                                Surat Keterangan Pindah dari daerah asal
                            </li>
                           <li style: "padding: 0px">
                              KTP-el (asli dan fotokopi)
                          </li>
                        </ul>    
        </ul>
                </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="500">
                <i class="bx bx-log-out icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">
                    Surat Pindah Keluar<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                  </br><Center><b>SURAT PINDAH KELUAR</b></Center>
                  </br>
                  Penduduk Warga Negara Indonesia yang pindah dalam wilayah Negara Kesatuan Republik Indonesia wajib melapor kepada Instansi Pelaksana di daerah asal untuk mendapatkan Surat Keterangan Pindah.                    
                    <!-- 1 -->
                    <ul style="list-style-type: decimal;">
                      <li>Persyaratan Pindah Datang Antar Kelurahan
                      </li>
                      <ul style="list-style: inside;">
                          <li style: "padding: 0px">
                              Surat Pengantar RT/RW
                          </li>
                          <li style: "padding: 0px">
                              Mengisi Formulir Pindah Keluar. 
                          </li>   
                          <li style: "padding: 0px">
                              KK dan KTP-el (fotokopi)
                          </li>                                            
                      </ul>

                    <!-- 2 -->
                      <li>Persyaratan Pindah Datang Antar Kecamatan
                      </li>
                      <ul style="list-style: inside;">
                          <li style: "padding: 0px">
                              Surat Pengantar RT/RW
                          </li>
                          <li style: "padding: 0px">
                              Mengisi Formulir Pindah Keluar. 
                          </li> 
                         <li style: "padding: 0px">
                            KK dan KTP-el (fotokopi)
                       </li>
                      </ul>    
                      
                      <!-- 3 -->
                      <li>Persyaratan Jika SKPWNI Expired/Batal Pindah</li>
                        <ul style="list-style: inside;">
                            <li style: "padding: 0px">
                                Surat SKPWNI yang dimiliki
                            </li>
                        </ul>   
                        
                        <!-- 4 -->
                      <li>Batal Pindah Keluar</li>
                          <ul style="list-style: inside;">
                              <li style: "padding: 0px">
                                  Surat pindah yang asli
                              </li>
                              <li style: "padding: 0px">
                                  Surat Pernyataan Batal Pindah
                              </li>
                              <li style: "padding: 0px">
                                  Langsung ke loket F tanpa SMS pukul 2 siang
                              </li>
                          </ul>
                          
                          <!-- 5 -->
                      <li>Perpanjangan Surat Pindah Keluar yang Expired</li>
                      <ul style="list-style: inside;">
                          <li style: "padding: 0px">
                              Surat pindah yang asli
                          </li>
                          <li style: "padding: 0px">
                              Formulir pindah keluar yang dicap dan tanda tangan kelurahan dan kecamatan
                          </li>
                          <li style: "padding: 0px">
                              Langsung ke loket F tanpa SMS pukul 2 siang
                          </li>
                      </ul> 
        </ul>
                </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="600">
                <i class="bx bx-cog icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">
                  Perbaikan Data<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                  </br><Center><b>PERBAIKAN DATA</b></Center>
                  </br></br>
                  <strong>Pelayanan masyarakat untuk kebutuhan:</strong>
                </br> 
                  <ul style="list-style-type: decimal;">
                      <li>Perbaikan Data:</li>
                      <ul style="list-style: inside;">
                          <li style: "padding: 0px">Memasukan anggota keluarga yang berusia di atas 5 tahun ke dalam Kartu Keluarga</li>
                          <li style: "padding: 0px">Memunculkan kembali data NIK anggota keluarga yang terhapus/tidak aktif</li>
                          <li style: "padding: 0px">Pengaktifan/aktivasi NIK</li>   
                      </ul>
                    <!-- 2 -->
                      <li>Pengecekan KTP-el:</li>
                      <ul style="list-style: inside;">
                          <li style: "padding: 0px">NIK ganda/memiliki NIK lebih dari satu</li>
                          <li style: "padding: 0px">Validasi NIK</li>
                          <li style: "padding: 0px">Cek iris mata dan finger print untuk mengecek NIK tunggal KTP-el</li>   
                      </ul> 

                     <!-- 3 -->
                     <li>Tidak punya data kependudukan / identitas dalam jangka waktu lama, tetapi dahulu pernah terdaftar sebagai warga Kota Bandung</li>
                    </br>
                    <!-- Syarat Perbaikan Data -->
                    <strong>Syarat Perbaikan Data</strong>
                    </br> 
                     <ul style="list-style: inside;">
                         <li style: "padding: 0px">Melampirkan pengantar pembuatan KTP elektronik dan Kartu Keluarga dari RT/RW, Kelurahan, dan Kecamatan</li>
                         <li style: "padding: 0px">KTP elektronik dan Kartu Keluarga</li>
                         <li style: "padding: 0px">Akta Kelahiran (bagi yang memiliki))</li> 
                         <li style: "padding: 0px">Ijazah terakhir</li>  
                         <li style: "padding: 0px">Buku Nikah (bagi yang menikah)</li>
                         <li style: "padding: 0px">Surat Cerai (jika bercerai)</li>  
                         <li style: "padding: 0px">Paspor (bagi yang memiliki paspor)</li>
                     </ul>
                     <!-- Syarat Pengecekan KTP-elektronik -->
                    </br>
                    <strong>Syarat Pengecekan KTP-elektronik</strong>
                    </br> 
                     <ul style="list-style: inside;">
                         <li style: "padding: 0px">KTP dan Kartu Keluarga</li>
                         <li style: "padding: 0px">Akta Kelahiran (bagi yang memiliki))</li> 
                         <li style: "padding: 0px">Ijazah terakhir</li>  
                         <li style: "padding: 0px">Buku Nikah (bagi yang menikah)</li>
                         <li style: "padding: 0px">Surat Cerai (jika bercerai)</li>  
                         <li style: "padding: 0px">Paspor (bagi yang memiliki paspor)</li></br><i>*catatan: yang bersangkutan wajib hadir</i>
                     </ul>    
                      <!-- Syarat Untuk Penduduk Tidak Punya Identitas -->
                    </br>
                    <strong>Syarat Untuk Penduduk Tidak Punya Identitas</strong>
                    </br> 
                     <ul style="list-style: inside;">
                         <li style: "padding: 0px">KTP dan Kartu Keluarga</li>
                         <li style: "padding: 0px">Akta Kelahiran (bagi yang memiliki))</li> 
                         <li style: "padding: 0px">Ijazah terakhir</li>  
                         <li style: "padding: 0px">Buku Nikah (bagi yang menikah)</li>
                         <li style: "padding: 0px">Surat Cerai (jika bercerai)</li>  
                         <li style: "padding: 0px">Paspor (bagi yang memiliki paspor)</li>
                         <li style: "padding: 0px">Bagi yang tidak terdaftar sebagai penduduk Kota Bandung, memiliki Kartu Keluarga lama, wajib mengisi Formulir Pernyataan Tidak Punya Identitas (dari Kantor DISDUKCAPIL/SKBT)
                          </li>
                     </ul>  
        </ul>
                </div>
            </li>
        </ul>
      </div>
    </div>
  </section>
<!-- End Pendaftaran Penduduk Section -->  

<!-- ======= Pencatatan Sipil Section ======= -->
<section id="faq" class="faq">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Pencatatan Sipil</h2>
            <p>Pencatatan Sipil adalah pencatatan peristiwa penting yang dialami oleh seseorang, dalam register 
              pencatatan sipil pada Instansi Pelaksana, dokumen yang dicatat meliputi akta-akta serta catatan pinggir.</p>
          </div>

      <div class="faq-list">
        <ul>   
            <li data-aos="fade-up" data-aos-delay="700">
                <i class="bx bx-id-card icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed">
                  Akta Kelahiran<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                  </br><Center><b>AKTA KELAHIRAN</b></Center>  </br>
                  <div class="photo-box align-self-baseline position-relative">
                    <a href="assets/img/Prodak Ducapil/icon Akta Kelahiran.png" class="glightbox play-btn mb-4"><center>
                      <img src="assets/img/Prodak Ducapil/icon Akta Kelahiran.png" alt="" class="img-w200"></center>
                    </a>                 
                  </br> 
                    Akta Kelahiran adalah pelayanan masyarakat untuk penerbitan Akta Kelahiran, mulai dari usia bayi 0 tahun sampai usia dewasa.
                  </br></br>  
                    <strong>PERSYARATAN AKTA KELAHIRAN</strong>
                </br> 
                  <ul style="list-style-type: decimal;">
                      <li>Mengisi formulir elektronik pada aplikasi SALAMAN.</li>
                      <li>Surat Keterangan Kelahiran dari dokter/bidan/rumah sakit/penolong kelahiran (asli).</li>
                      <li>Buku Nikah/Akta Perkawinan/Akta Perceraian/Akta Kelahiran Ibu (bagi yang tidak melaksanakan pencatatan perkawinan di KUA/Catatan Sipil).</li>
                      <li>Surat Pernyataan Tanggung Jawab Mutlak (SPTJM) kebenaran data kelahiran (bagi yang tidak ada surat keterangan kelahiran dari dokter/bidan/rumah sakit/penolong kelahiran).</li>
                      <li>KTP-el orangtua/pelapor dan 2 orang saksi</li>
                      <li>Kartu Keluarga</li>
                      <li>Melampirkan dokumen pendukung lainnya sesuai kebutuhan*
                        <ul style="list-style: inside">
                          <li>Akta Perceraian orangtua beserta salinan Putusan Pengadilan (jika orangtua bercerai)</li>
                          <li>Akta Kematian (jika orangtua sudah meninggal)</li>
                        </ul>
                      </li>
                    </br>
                    <strong>Yang bersangkutan berusia di atas 18 tahun:</strong>
                     <ul style="list-style: inside;">
                         <li style: "padding: 0px">KTP-el yang bersangkutan</li>
                         <li style: "padding: 0px">Melampirkan ijazah yang bersangkutan</li>
                         <li style: "padding: 0px">Melampirkan Surat Pernyataan Belum Pernah Bikin Akta Kelahiran dan Susunan Saundara Kandung</li> 
                         <li style: "padding: 0px">Melampirkan Akta Perkawinan/Buku Nikah yang bersangkutan (jika sudah menikah)</li>  
                         <li style: "padding: 0px">Surat Baptis (Khsus Non Muslim)</li>
                     </br>
                         <strong>Gunakan SPTJM atau SP-LK:</strong> 
                         <li style: "padding: 0px">SPTJM Kelahiran: jika tidak memiliki Surat Keterangan Kelahiran Medis.</li>  
                         <li style: "padding: 0px">SPTJM Perkawinan: jika tidak memiliki Buku Nikah/Akta Perkawinan/Akta Cerai orangtua.</li>
                         <li style: "padding: 0px">SP-LK Anak: jika tidak memiliki Buku Nikah/Akta Perkawinan orangtua (khusus pemohon 0-16 thn).</li> 
                     </br>
                         <strong>Untuk WNA lengkapi dengan:</strong>
                         <li style: "padding: 0px">Paspor orangtua</li>  
                         <li style: "padding: 0px">KTP-el orang asing bagi pemilik KITAP</li>
                         <li style: "padding: 0px">Surat Keterangan Tempat Tinggal (SKTT) orang asing bagi pemilik KITAS</li>  
                         <li style: "padding: 0px">KTP-el keluarga/sponsor/penjamin</li>
                         <li style: "padding: 0px">Paspor/KTP orang asing/KITAS 2 orang saksi</li>
                     </ul>
                    <!-- TATA CARA -->
                    </br></br> 
                    </br> <strong>TATA CARA</strong>
                    </br> <i>* Klik pada gambar untuk memperbesar tampilan gambar</i>
                    </br></br> 
                    <a href="assets/img/Prodak Ducapil/Akta-Kelahirann-Tata-Cara.png" class="glightbox play-btn mb-4"><img src="assets/img/Prodak Ducapil/Akta-Kelahirann-Tata-Cara.png" alt="" class="img-w25"></a>
                  
                    <!-- SMS -->
                    </br> <strong>TATA CARA SMS ANTRIAN</strong>
                    </br> <i>* Klik pada gambar untuk memperbesar tampilan gambar</i>
                    </br></br>
                    <a href="assets/img/Prodak Ducapil/Akta-Kelahiran-SMS.png" class="glightbox play-btn mb-4"><img src="assets/img/Prodak Ducapil/Akta-Kelahiran-SMS.png" alt="" class="img-w25"></a>
                  </br></br> 
                      </div>
            </li> 
            <li data-aos="fade-up" data-aos-delay="800">
                <i class="bx bx-pulse icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">
                    Akta Kematian<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                  </br><Center><b>AKTA KEMATIAN</b></Center>  </br>
                  <div class="photo-box align-self-baseline position-relative">
                    <a href="assets/img/Prodak Ducapil/icon Akta Kematian.png" class="glightbox play-btn mb-4"><center>
                      <img src="assets/img/Prodak Ducapil/icon Akta Kematian.png" alt="" class="img-w200"></center>
                    </a>                 
                  </br> 
                  Akta Kematian adalah pelayanan masyarakat untuk penerbitan Akta Kematian untuk warga yang telah meninggal dunia.
                </br></br>  
                  <strong>PERSYARATAN AKTA KEMATIAN</strong>
                </br> 
                  <ul style="list-style-type: decimal;">
                      <li>Mengisi formulir elektronik pada aplikasi SALAMAN.</li>
                      <li>Surat Keterangan Kematian dari rumah sakit / kelurahan / yang dipersamakan</li>
                      <li>Kartu Keluarga dan KTP-el yang meninggal dunia</li>
                      <li>Akta Kelahiran / Akta Nikah yang meninggal dunia</li>
                      <li>KTP-el 2 orang saksi dari pihak keluarga</li>
                      <li>KTP-el pelapor. Pihak pelapor adalah keluarga (ahli waris) atau ketua RT. Bagi pelapor ketua RT, lampirkan fotokopi SK sebagai bukti Ketua RT.</li>
                      <li>Untuk WNA lengkapi dengan:
                          <ul style="list-style: inside;">
                              <li style: "padding: 0px">Paspor yang meninggal dunia</li>
                              <li style: "padding: 0px">Visa yang meninggal dunia</li>
                              <li style: "padding: 0px">KITAS/KITAP</li> 
                              <li style: "padding: 0px">KTP-el yang meninggal dunia bagi pemilik KITAP</li>  
                              <li style: "padding: 0px">SKTT yang meninggal dunia bagi pemilik KITAS</li>
                          </ul>
                      </li>
                    </br>

                    <!-- TATA CARA -->
                    </br></br> 
                    </br> <strong>TATA CARA</strong>
                    </br> <i>* Klik pada gambar untuk memperbesar tampilan gambar</i>
                    </br></br> 
                    <a href="assets/img/Prodak Ducapil/Akta-Kematian-Tata-Cara.png" class="glightbox play-btn mb-4"><img src="assets/img/Prodak Ducapil/Akta-Kelahirann-Tata-Cara.png" alt="" class="img-w25"></a>
                  
                    <!-- SMS -->
                    </br> <strong>TATA CARA SMS ANTRIAN</strong>
                    </br> <i>* Klik pada gambar untuk memperbesar tampilan gambar</i>
                    </br></br>
                    <a href="assets/img/Prodak Ducapil/Akta-Kematian-SMS.png" class="glightbox play-btn mb-4"><img src="assets/img/Prodak Ducapil/Akta-Kelahiran-SMS.png" alt="" class="img-w25"></a>
                  </br></br> 
                      </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="900">
                <i class="bx bx-happy icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-9" class="collapsed">
                   Akta Perkawinan<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
                  </br><Center><b>AKTA PERKAWINAN</b></Center>  </br>
                  <div class="photo-box align-self-baseline position-relative">
                    <a href="assets/img/Prodak Ducapil/icon Akta Perkawinan.png" class="glightbox play-btn mb-4"><center>
                      <img src="assets/img/Prodak Ducapil/icon Akta Perkawinan.png" alt="" class="img-w200"></center>
                    </a>                 
                  </br> 
                  Akta Perkawinan adalah pelayanan masyarakat untuk penerbitan Akta Perkawinan, khusus untuk non muslim.
                </br></br>  
                  <strong>PERSYARATAN AKTA PERKAWINAN</strong>
                </br> 
                  <ul style="list-style-type: decimal;">
                      <li>Mengisi formulir Akta Perkawinan dari Disdukcapil Kota Bandung</li>
                      <li>Surat Keterangan Perkawinan/Pemberkatan dari Pemuka Agama dan Pemuka Penghayat Kepercayaan yang dilegalisir (asli & fotokopi)</li>
                      <li>KTP dan KK calon mempelai (asli dan fotokopi)</li>
                      <li>KTP dan KK orangtua (asli & fotokopi)</li>
                      <li>Akta Kelahiran calon mempelai (asli & fotokopi)</li>
                      <li>Surat Pernyataan Belum Pernah Kawin bermaterai cukup dari yang bersangkutan dan diketahui oleh:
                          <ul style="list-style: inside;">
                              <li style: "padding: 0px">KELURAHAN, bagi yang berdomisili di Kabupaten Pangkep (asli)
                                </li>
                              <li style: "padding: 0px">DISDUKCAPIL, bagi yang berdomisili di luar Kabupaten Pangkep (asli)
                                </li>
                          </ul>  
                      </li>
                      <li>Surat Baptis/ Permandian/ Sidi/ Surat keterangan anggota agama</li>
                      <li>Pas foto berdampingan berlatar merah/biru</li>
                      <li>Akta perkawinan orang tua bagi anak suami isteri/ akta kelahiran ibu bagi anak seorang ibu</li>
                      <li>KTP-el dua orang saksi dan hadir pada waktu pencatatan</li>
                      <li>Akta perceraian asli bagi yang telah bercerai</li>
                      <li>Akta Kematian suami/istri terdahulu, bila telah meninggal dunia (asli & fotokopi)</li>
                      <li>Surat izin komandan asli bagi TNI/POLRI dan fotocopy KTA</li>
                      <li>Surat ganti nama</li>
                      <li>Surat keterangan kewarganegaraan</li>
                      <li>Izin perkawinan dari Pengadilan Negeri dan/atau dari Instansi Pelaksana</li>
                      <li>Akta Notaris jika ada perjanjian perkawinan</li>
                      <li>Kutipan akta kelahiran anak bagi yang sudah mempunyai anak</li>
                      <li>Melampirkan Dokumen lain yang dibutuhkan</li>

                    </br>
                  </br>  
                  <strong>PERSYARATAN PELAPORAN PERKAWINAN SALAH SATU MENINGGAL</strong>
                 </br> 
                  <ul style="list-style-type: decimal;">
                    <li>Mengisi Formulir Pelaporan Perkawinan dari Disdukcapil Kabupaten Pangkep</li>
                    <li>Akta Kematian</li>
                    <li>Salinan Putusan Pengadilan Perkawinan Salah Satu Meninggal </li>
                    <li>Surat Keterangan Perkawinan/Pemberkatan dari Pemuka Agama dan Pemuka Penghayat Kepercayaan</li>
                    <li>Akta Lahir</li>
                    <li>Kartu Tanda Penduduk (KTP) dan Kartu Keluarga (KK).</li>
                  </ul>
                    <!-- TATA CARA -->
                    </br></br> 
                    </br> <strong>TATA CARA</strong>
                    </br> <i>* Klik pada gambar untuk memperbesar tampilan gambar</i>
                    </br></br> 
                    <a href="assets/img/Prodak Ducapil/Akta-Perkawinan-tatacara.png" class="glightbox play-btn mb-4"><img src="assets/img/Prodak Ducapil/Akta-Kelahirann-Tata-Cara.png" alt="" class="img-w25"></a>
                  </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="1000">
                <i class="bx bx-sad icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-10" class="collapsed">
                   Akta Perceraian<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-10" class="collapse" data-bs-parent=".faq-list">
                  </br><Center><b>AKTA PERCERAIAN
                    </b></Center>  </br>
                  <div class="photo-box align-self-baseline position-relative">
                    <a href="assets/img/Prodak Ducapil/Akta-Perceraian.png" class="glightbox play-btn mb-4"><center>
                      <img src="assets/img/Prodak Ducapil/Akta-Perceraian.png" alt="" class="img-w200"></center>
                    </a>                 
                  </br> 
                  Akta Perceraian adalah pelayanan masyarakat untuk penerbitan Akta Perceraian, khusus untuk non muslim
                </br></br>  
                  <strong>PERSYARATAN AKTA PERCERAIAN</strong>
                </br> 
                  <ul style="list-style-type: decimal;">
                      <li>Formulir Akta Perceraian</li>
                      <li>Kartu Tanda Penduduk (KTP) dan Kartu Keluarga (KK)</li>
                      <li>Kutipan Akta Perkawinan</li>
                      <li>Surat Pengantar dari Panitera Pengadilan Negeri</li>
                      <li>Salinan Putusan Perceraian dari Pengadilan Negeri/Tinggi atau Mahkamah Agung</li>
                      <li>Surat Keabsahan Akta Perkawinan (Jika Akta Perkawinan dikeluarkan oleh Dinas Luar Kabupaten Pangkep </li>
                  </ul>
                    </br>
                    </br>  
                  
                    <!-- TATA CARA -->
                    </br></br> 
                    </br> <strong>TATA CARA</strong>
                    </br> <i>* Klik pada gambar untuk memperbesar tampilan gambar</i>
                    </br></br> 
                    <a href="assets/img/Prodak Ducapil/Akta Perceraian.png" alt="" class="img-w25"></a>
                  </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="1100">
                <i class="bx bx-chart icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-11" class="collapsed">
                   Pelaporan Pencatatan Sipil Luar Negeri<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-11" class="collapse" data-bs-parent=".faq-list">
                  </br><Center><b>PELAPORAN PENCATATAN SIPIL LUAR NEGERI</b></Center>  </br>
                  <div class="photo-box align-self-baseline position-relative">
                    <a href="assets/img/Prodak Ducapil/pelaporan-capil-wna.png" class="glightbox play-btn mb-4"><center>
                      <img src="assets/img/Prodak Ducapil/pelaporan-capil-wna.png" alt="" class="img-w200"></center>
                    </a>                 
                  </br> 
                  Pelayanan masyarakat untuk melaporkan peristiwan penting WNI berupa kelahiran, kematian, perkawinan, dan perceraian yang terjadi di luar negeri.                </br></br>  
                  <strong>PERSYARATAN PELAPORAN KELAHIRAN LUAR NEGERI</strong>
                </br> 
                  <ul style="list-style-type: decimal;">
                      <li>Mengisi formulir Pelaporan Kelahiran Luar Negeri dari Disdukcapil Kota Bandung</li>
                      <li>Akta Kelahiran dari Kantor Catatan Sipil/Departemen/Rumah Sakit terkait yang menerbitkan (asli dan fotokopi)</li>
                      <li>Surat Keterangan Kelahiran dari Kedutaan Indonesia di negara tempat tinggal yang bersangkutan lahir (asli dan fotokopi)</li>
                      <li>Kartu Keluarga orangtua</li>
                      <li>KTP-el orangtua</li>
                      <li>Akta Perkawinan/Surat Nikah dan Akta Perceraian orangtua (asli dan fotokopi)</li>
                      <li>Paspor anak, ibu, dan bapak (asli dan fotokopi)</li>
                      <li>Untuk WNA lengkapi dengan:
                          <ul style="list-style: inside;">
                            <li>Fotokopi Paspor</li>
                            <li>Fotokopi KTP-el orang asing bagi pemilik KITAP</li>
                            <li>Fotokopi SKTT orang asing bagi pemilik KITAS</li>
                            <li>Surat Keterangan Lapor Diri (SKLD) dan atau Surat Tanda Melapor Diri (STMD)</li>
                          </ul>  
                    </ul>

                    <strong>PERSYARATAN PELAPORAN KEMATIAN LUAR NEGERI</strong>
                </br> 
                  <ul style="list-style-type: decimal;">
                      <li>Mengisi formulir Pelaporan Kematian Luar Negeri dari Disdukcapil Kabupaten Pangkep</li>
                      <li>Akta Kematian dari negara dimana yang bersangkutan meninggal</li>
                      <li>Surat Keterangan Kematian dari Kedutaan negara setempat</li>
                      <li>Kartu Keluarga dan KTP-el yang meninggal dunia</li>
                      <li>Akta Kelahiran yang meninggal dunia</li>
                      <li>Akta Perkawinan/Surat Nikah yang meninggal dunia</li>
                      <li>Paspor yang meninggal dunia</li>
                      <li>KTP-el 2 orang saksi kerabat terdekat</li>
                      <li>KTP-el pelapor</li>
                  </ul>

                  <strong>PERSYARATAN PELAPORAN PERKAWINAN LUAR NEGERI</strong>
                </br> 
                  <ul style="list-style-type: decimal;">
                      <li>Mengisi formulir Pelaporan Perkawinan Luar Negeri dari Disdukcapil Kabupaten Pangkep</li>
                      <li>KTP-el (asli dan fotokopi legalisir)</li>
                      <li>Kartu Keluarga (asli dan fotokopi legalisir)</li>
                      <li>Akta Kelahiran (asli dan fotokopi)</li>
                      <li>Paspor suami dan istri (asli dan fotokopi)</li>
                      <li>Surat Keterangan dari KBRI (asli dan fotokopi)</li>
                      <li>Sertifikat Married (asli dan fotokopi)</li>
                      <li>Pasfoto berwarna berdampingan sebanyak 3 lembar</li>
                  </ul>

                  <strong>PERSYARATAN PELAPORAN PERCERAIAN LUAR NEGERI</strong>
                </br> 
                  <ul style="list-style-type: decimal;">
                      <li>Mengisi formulir Pelaporan Perceraian Luar Negeri dari Disdukcapil Kabupaten Pangkep</li>
                      <li>KTP-el (asli dan fotokopi)</li>
                      <li>Kartu Keluarga (asli dan fotokopi)</li>
                      <li>Akta Kelahiran (asli dan fotokopi)</li>
                      <li>Paspor suami dan istri (asli dan fotokopi)</li>
                      <li>Surat Keterangan dari KBRI (asli dan fotokopi)</li>
                      <li>Sertifikat Perceraian (asli dan fotokopi)</li>
                  </ul>
                    </br>
                    </br>  
                  
                    <!-- TATA CARA -->
                    </br></br> 
                    </br> <strong>TATA CARA</strong>
                    </br> <i>* Klik pada gambar untuk memperbesar tampilan gambar</i>
                    </br></br> 
                    <a href="assets/img/Prodak Ducapil/Pelaporan-LN-Tata-Cara.png" alt="" class="img-w25"></a>
                  </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="1200">
                <i class="bx bxs-quote-alt-right icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-12" class="collapsed">
                   Kutipan kedua<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-12" class="collapse" data-bs-parent=".faq-list">
                  </br><Center><b>KUTIPAN KEDUA</b></Center>  </br>
                  <div class="photo-box align-self-baseline position-relative">
                    <a href="assets/img/Prodak Ducapil/icon perbaikan akta.png" class="glightbox play-btn mb-4"><center>
                      <img src="assets/img/Prodak Ducapil/icon perbaikan akta.png" alt="" class="img-w200"></center>
                    </a>                 
                  </br>  </br>
                  Pelayanan masyarakat untuk kebutuhan mencetak ulang dokumen akta pencatatan sipil (Akta Kelahiran, Akta Kematian, Akta Pengakuan Anak, Akta Perkawinan, Akta Perceraian) yang hilang atau rusak; mencetak ulang akta pencatatan sipil terbitan luar Kota Bandung berdasarkan Surat Rekomendasi; dan membuat Surat Rekomendasi
                </br>
                  <strong>KUTIPAN AKTA KEDUA KARENA RUSAK</strong>
                </br> 
                  <ul style="list-style-type: decimal;">
                    <li>Kutipan Akta asli, untuk ditarik kembali dan difotokopi 1 lembar</li>
                    <li>Fotokopi Paspor (wajib dilampirkan bagi pemegang paspor)</li>
                    <li>Fotokopi Kartu Keluarga pemohon dan fotokopi KTP-el pemohon</li>
                    <li>Fotokopi Buku Nikah/Akta Perkawinan/Akta Perceraian orangtua</li>
                    <li>Untuk warga keturunan lengkapi dengan:
                      <ul style="list-style: inside;">
                        <li>Fotokopi Surat Keterangan Ganti Nama</li>
                        <li>Fotokopi Surat Kewarganegaraan</li>
                      </ul>  
                    </li>
                   </ul>

                    <strong>KUTIPAN AKTA KEDUA KARENA HILANG</strong>
                </br> 
                  <ul style="list-style-type: decimal;">
                    <li>Fotokopi Kutipan Akta yang hilang sebanyak 2 lembar/ Nomor Register Akta</li>
                    <li>Fotokopi Kartu Keluarga pemohon dan fotokopi KTP-el pemohon</li>
                    <li>Fotokopi Buku Nikah/Akta Perkawinan/Akta Perceraian orangtua</li>
                    <li>Fotokopi Paspor (wajib dilampirkan bagi pemegang paspor)</li>
                    <li>Surat Keterangan Pelaporan Kehilangan dari Kepolisian</li>
                    <li>Untuk warga keturunan lengkapi dengan:
                      <ul style="list-style: inside;">
                        <li>Fotokopi Surat Kewarganegaraan</li>
                        <li>Fotokopi Perubahan Nama</li>
                      </ul>
                    </li>
                  </ul>

                  <strong>KUTIPAN KEDUA TERBITAN LUAR KOTA BANDUNG BERDASARKAN SURAT REKOMENDASI</strong>
                </br> 
                  <ul style="list-style-type: decimal;">
                    <li>Surat Rekomendasi dari Disdukcapil yang menerbitkan dokumen</li>
                    <li>Fotokopi KTP-el pemohon</li>
                    <li>Fotokopi Kartu Keluarga</li>
                    <li>Fotokopi dokumen Akta</li>
                    <li>Surat Keterangan Kehilangan dari Kepolisian (jika hilang)</li>
                  </ul>

                  <strong>MEMBUAT SURAT REKOMENDASI</strong>
                </br> 
                  <ul style="list-style-type: decimal;">
                    <li>Fotokopi KTP-el pemohon</li>
                    <li>Fotokopi Kartu Keluarga</li>
                    <li>Fotokopi dokumen Akta</li>
                    <li>Surat Keterangan Kehilangan dari Kepolisian (jika hilang)</li>
                  </ul>
                    </br>
                    </br>  
                  
                    <!-- TATA CARA -->
                    </br></br> 
                    </br> <strong>TATA CARA</strong>
                    </br> <i>* Klik pada gambar untuk memperbesar tampilan gambar</i>
                    </br></br> 
                    <a href="assets/img/Prodak Ducapil/Kutipan-Kedua-Tata-Cara.png" alt="" class="img-w25"></a>
                  </div>
            </li>   
            <li data-aos="fade-up" data-aos-delay="1300">
                <i class="bx bx-flag icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-13" class="collapsed">
                    Pengakuan Anak<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-13" class="collapse" data-bs-parent=".faq-list">
                  </br><Center><b>PENGAKUAN ANAK
                    </b></Center>  </br>
                  <div class="photo-box align-self-baseline position-relative">
                    <a href="assets/img/Prodak Ducapil/Akta Pengakuan Anak.png" class="glightbox play-btn mb-4"><center>
                      <img src="assets/img/Prodak Ducapil/Akta Pengakuan Anak.png" alt="" class="img-w200"></center>
                    </a>                 
                  </br> 
                  Pelayanan masyarakat untuk penerbitan Akta Pengakuan Anak. Pengesahan Anak Pengesahan anak hanya berlaku bagi anak yang orangtuanya telah melaksanakan perkawinan sah menurut hukum agama, tetapi belum sah menurut hukum negara.
                </br></br>  
                  <strong>Persyaratan Pencatatan Pengakuan Anak</strong>
                </br> 
                  <ul style="list-style-type: decimal;">
                    <li>Mengisi formulir Pengakuan Anak dari Disdukcapil Kabupaten Pangkep</li>
                    <li>Surat Pernyataan Pengakuan Anak dari ayah biologis yang disetujui oleh ibu kandung. Contoh Surat Pernyataan bisa dilihat disini.</li>
                    <li>Surat Pengantar dari RT/RW yang diketahui Lurah</li>
                    <li>Fotokopi Akta Kelahiran</li>
                    <li>Fotokopi Akta Kelahiran ayah biologis dan ibu kandung</li>
                    <li>Surat Keterangan Perkawinan Secara Agama</li>
                    <li>Fotokopi Kartu Keluarga/KTP-el ayah biologis dari ibu kandung</li>
                    <li>Untuk WNA lengkapi dengan:
                      <ul style="list-style-type: decimal">
                        <li>Fotokopi Paspor</li>
                        <li>Fotokopi KTP-el orang asing bagi pemilik KITAP</li>
                        <li>Fotokopi SKTT orang asing bagi pemilik KITAS</li>
                        <li>Surat Keterangan Lapor Diri (SKLD) dan atau Surat Tanda Melapor Diri (STMD)</li>
                      </ul>
                    </li>
                  </ul>
                    </br>
                    </br>  
                  
                    <!-- TATA CARA -->
                    </br></br> 
                    </br> <strong>TATA CARA</strong>
                    </br> <i>* Klik pada gambar untuk memperbesar tampilan gambar</i>
                    </br></br> 
                    <a href="assets/img/Prodak Ducapil/Pengakuan-Anak-Tata-Cara.png" alt="" class="img-w25"></a>
                  </div>
            </li> 
            <li data-aos="fade-up" data-aos-delay="1400">
                <i class="bx bx-check-double icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-14" class="collapsed">
                    Pengesahan Anak<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-14" class="collapse" data-bs-parent=".faq-list">
                  </br><Center><b>PENGESAHAN ANAK</b></Center>  </br>
                  <div class="photo-box align-self-baseline position-relative">
                    <a href="assets/img/Prodak Ducapil/Akta Pengesahan Anak.png" class="glightbox play-btn mb-4"><center>
                      <img src="assets/img/Prodak Ducapil/Akta Pengesahan Anak.png" alt="" class="img-w200"></center>
                    </a>                 
                  </br> 
                  Pelayanan masyarakat untuk penerbitan Akta Pengesahan Anak. Pengesahan Anak Pengesahan anak hanya berlaku bagi anak yang orangtuanya telah melaksanakan perkawinan sah menurut hukum agama dan hukum negara.
                </br></br>  
                  <strong>PERSYARATAN PENGESAHAN ANAK</strong>
                </br> 
                  <ul style="list-style-type: decimal;">
                      <li>Mengisi formulir yang disiapkan Disdukcapil Kota Bandung. Formulir bisa download disini.</li>
                      <li>Surat Pengantar dari RT/RW yang diketahui Lurah</li>
                      <li>Akta Perkawinan orangtua</li>
                      <li>Surat Pernyataan Pengakuan Anak dari ayah biologis yang disetujui oleh ibu kandung</li>
                      <li>Akta Kelahiran anak</li>
                      <li>Akta Kelahiran ayah biologis dan ibu kandung</li>
                      <li>Kartu Keluarga dan KTP-el ayah biologis dan ibu kandung</li>
                      <li>KTP-el pelapor</li>
                      <li>Untuk WNA lengkapi dengan:
                        <ul style="list-style: inside">
                          <li>Paspor</li>
                          <li>KITAS/KITAP</li>
                          <li>Surat Keterangan Lapor Diri (SKLD) dan atau Surat Tanda Melapor Diri (STMD)</li>
                        </ul>
                      </li>
                  </ul>
                    </br>
                    </br>  
                  
                    <!-- TATA CARA -->
                    </br></br> 
                    </br> <strong>TATA CARA</strong>
                    </br> <i>* Klik pada gambar untuk memperbesar tampilan gambar</i>
                    </br></br> 
                    <a href="assets/img/Prodak Ducapil/Pengesahan-Anak-Tata-Cara.png" alt="" class="img-w25"></a>
                  </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="1500">
                <i class="bx bx-note icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-15" class="collapsed">
                    Catatan Pinggir<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-15" class="collapse" data-bs-parent=".faq-list">
                  </br><Center><b>CATATAN PINGGIR</b></Center>  </br>
                  <div class="photo-box align-self-baseline position-relative">
                    <a href="assets/img/Prodak Ducapil/Icon-Catatan-Pinggir.png" class="glightbox play-btn mb-4"><center>
                      <img src="assets/img/Prodak Ducapil/Icon-Catatan-Pinggir.png" alt="" class="img-w200"></center>
                    </a>                 
                  </br> 
                  <strong>Pelayanan masyarakat untuk kebutuhan:</strong>
                    <ul style="list-style: inside">
                        <li>Pengangkatan Anak: Catatan Pengangkatan Anak, yaitu untuk kebutuhan mengalihkan hak anak dari lingkungan kekuasaan keluarga orangtua/wali yang sah yang bertanggung jawab atas perawatan, pendidikan, dan membesarkan anak tersebut ke dalam lingkungan keluarga orangtua angkatnya berdasarkan putusan atau pentapan pengadilan yang berkekuatan hukum tetap.</li>
                        <li>Perubahan Nama: Catatan Perubahan Nama, yaitu penggantian nama sendiri (mengurangi/menambah) atau nama orangtua setelah ada penetapan pengadilan yang berkekuatan hukum tetap.</li>
                        <li>Kewarganegaraan: Catatan Kewarganegaraan, yaitu perubahan atas status kewarganegaraan dari Warga Negara Asing (WNA) menjadi Warga Negara Indonesia (WNI).</li>
                        <li>Perbaikan Akta: Perbaikan dokumen Akta Pencatatan sipil karena terdapat kesalahan penulisan dalam dokumen akta.</li>
                    </ul>                
              </br></br>  
                  <strong>PERSYARATAN CATATAN PINGGIR PENGANGKATAN ANAK</strong>
                </br> 
                  <ul style="list-style-type: decimal;">
                    <li>Mengisi formulir yang disiapkan Disdukcapil Kabupaten Pangkep.</li>
                    <li>Penetapan Pengadilan Negeri dan Penetapan Pengadilan Agama</li>
                    <li>Akta Kelahiran anak</li>
                    <li>Fotokopi Akta Kelahiran anak</li>
                    <li>Akta Kelahiran orangtua yang mengangkat</li>
                    <li>Akta Perkawinan/Surat Nikah orangtua yang mengangkat</li>
                    <li>Kartu Keluarga dan KTP-el orangtua angkat</li>
                    <li>Ganti Nama (jika ada)</li>
                    <li>KTP-el Pelapor</li>
                    <li>Untuk WNA lengkapi dengan:
                      <ul style="list-style: inside">
                        <li>Paspor orang tua angkat</li>
                        <li>KITAS/KITAP</li>
                      </ul>
                    </li>
                  </ul>
                    </br>
                    </br>  
                    <strong>PERSYARATAN CATATAN PINGGIR KEWARGANEGARAAN</strong>
                  </br> 
                    <ul style="list-style-type: decimal;">
                      <li>Mengisi formulir yang disiapkan Disdukcapil Kabupaten Pangkep.</li>
                      <li>Keputusan Presiden mengenai perubahan status menjadi WNI</li>
                      <li>Keputusan Menteri yang bidang tugasnya meliputi urusan kewarganegaraan</li>
                      <li>Akta Kelahiran dan Akta Perkawinan</li>
                      <li>Kartu Keluarga dan KTP-el</li>
                      <li>KTP-el Pelapor</li>
                      <li>Untuk WNA lengkapi dengan:
                        <ul style="list-style: inside">
                          <li>Paspor</li>
                          <li>KITAS/KITAP</li>
                        </ul>
                      </li>
                    </ul>
                  </br>
                    <strong>PERSYARATAN CATATAN PINGGIR PERUBAHAN NAMA</strong>
                  </br> 
                    <ul style="list-style-type: decimal;">
                      <li>Mengisi formulir yang disiapkan Disdukcapil Kabupaten Pangkep.</li>
                      <li>Penetapan/Putusan Pengadilan Negeri</li>
                      <li>Kartu Keluarga dan KTP-el pemohon</li>
                      <li>Akta Kelahiran (fotokopi dan asli)</li>
                      <li>Akta Perkawinan/Buku Nikah (asli dan fotokopi)</li>
                      <li>Akta Perceraian (fotokopi dan asli)</li>
                      <li>KTP-el Pelapor</li>
                      </ul>
                    </br>
                    <strong>PERSYARATAN CATATAN PINGGIR PERUBAHAN NAMA</strong>
                  </br> 
                    <ul style="list-style-type: decimal;">
                      <li>Mengisi formulir yang disiapkan Disdukcapil Kabupaten Pangkep.</li>
                      <li>Dokumen Akta</li>
                      <li>Dokumen pendukung perbaikan Akta</li>
                    </ul>

                    <!-- TATA CARA -->
                    </br></br> 
                    </br> <strong>TATA CARA</strong>
                    </br> <i>* Klik pada gambar untuk memperbesar tampilan gambar</i>
                    </br></br> 
                    <a href="assets/img/Prodak Ducapil/Catatan-Pinggir-Tata-Cara.png" alt="" class="img-w25"></a>
                  </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="1600">
                <i class="bx bx-list-check icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-16" class="collapsed">
                    Legalisasi Dokumen<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-16" class="collapse" data-bs-parent=".faq-list">
                  </br><Center><b>LEGALISASI DOKUMEN</b></Center>  </br>
                  <div class="photo-box align-self-baseline position-relative">
                    <a href="assets/img/Prodak Ducapil/icon legalisir.png" class="glightbox play-btn mb-4"><center>
                      <img src="assets/img/Prodak Ducapil/icon legalisir.png" alt="" class="img-w200"></center>
                    </a>                 
                  </br> 
                  Pelayanan masyarakat untuk melakukan pengesahan/legalisasi berbagai dokumen akta pencatatan sipil yang masih menggunakan cap dan tanda tangan basah. Dokumen akta pencatatan sipil yang sudah betanda tangan elektronik berupa QR Code serta Kartu Tanda Penduduk elektronik (KTP-el) tidak perlu dilegalisir.

                </br></br>  
                  <strong>PERSYARATAN</strong>
                </br> 
                      <ul style="list-style-type: decimal">
                        <li>* Melampirkan dokumen asli yang akan dilegalisir, maksimal 5 lembar *</li>
                      </ul>

                    </br>
                    </br>  
                  
                    <!-- TATA CARA -->
                    </br></br> 
                    </br> <strong>TATA CARA</strong>
                    </br> <i>* Klik pada gambar untuk memperbesar tampilan gambar</i>
                    </br></br> 
                    <a href="assets/img/Prodak Ducapil/Legalisir-Capil-Tata-Cara.png" alt="" class="img-w25"></a>
                  
                  <!-- SMS -->
                    </br> <strong>TATA CARA SMS ANTRIAN</strong>
                    </br> <i>* Klik pada gambar untuk memperbesar tampilan gambar</i>
                    </br></br>
                      <a href="assets/img/Prodak Ducapil/Legalisir-Capil-Cara-SMS.png" class="glightbox play-btn mb-4"><img src="assets/img/Prodak Ducapil/Akta-Kelahiran-SMS.png" alt="" class="img-w25"></a>
                    </br></br> 
                  </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="1700">
                <i class="bx bx-note icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-17" class="collapsed">
                    Surat Keterangan<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-17" class="collapse" data-bs-parent=".faq-list">
                  </br><Center><b>SURAT KETERANGAN</b></Center>  </br>
                  <div class="photo-box align-self-baseline position-relative">
                    <a href="assets/img/Prodak Ducapil/Surat Keterangan.png" class="glightbox play-btn mb-4"><center>
                      <img src="assets/img/Prodak Ducapil/Surat Keterangan.png" alt="" class="img-w200"></center>
                    </a>                 
                  </br> 
                  Pelayanan masyarakat membuat Surat Keterangan untuk kebutuhan berikut: Surat Keterangan Belum Menikah/Lagi (Khusus Non Muslim); Surat Keterangan Kesetaraan Kua (Muslim Dan Salah Satu Pasangannya WNA); Surat Keterangan Masih Terikat Kawin (Khusus Non Muslim); dan Perjanjian Perkawinan.

                </br></br>  
                  <strong>SURAT KETERANGAN BELUM MENIKAH/LAGI (KHUSUS NON MUSLIM)</strong>
                </br> 
                  <ul style="list-style-type: decimal;">
                    <li>SURAT PERNYATAAN</li>
                    <li>Fotokopi KTP-el kedua mempelai</li>
                    <li>Fotocopy KARTU TANDA PENDUDUK ybs dan calon suami/istri</li>
                    <li>Fotocopy KARTU KELUARGA ybs</li>
                    <li>Fotocopy AKTA KELAHIRAN ybs</li>
                    <li>Surat Keterangan Belum Pernah Menikah/Lagi dari Kelurahan domisili ybs</li>
                    <li>Akta Perceraian/ Akta Kematian (jika sudah bercerai)</li>
                  </ul>
                </br>  
                <strong>SURAT KETERANGAN KESETARAAN KUA (MUSLIM DAN SALAH SATU PASANGANNYA WNA)</strong>
              </br> 
                <ul style="list-style-type: decimal;">
                  <li>SURAT KETERANGAN DARI KUA kepada DISDUKCAPIL KOTA BANDUNG yang menerangkan bahwa ybs masih terikat perkawinan dalam Agama Muslim</li>
                  <li>Kartu Tanda Penduduk WNI</li>
                  <li>Kartu Keluarga WNI</li>
                  <li>Buku Nikah dari KUA (jika menikah di Luar Negeri sertakan Fotokopi)</li>
                  <li>Sertifikat Menikah dari Luar Negeri, Surat KBRI dan Pelaporan Pernikahan dari KUA)</li>
                  <li>KITAS/KITAP (WNA)</li>
                  <li>Passport Suami dan Istri lengkap</li>
                </ul>
              </br>  
              <strong>SURAT KETERANGAN MASIH TERIKAT KAWIN (KHUSUS NON MUSLIM)</strong>
            </br> 
              <ul style="list-style-type: decimal;">
                <li>Surat Pernyataan dari ybs (WNI) yang di tandatangani di atas materai 6000 dan diketahui oleh RT, RW, Kelurahan dan Kecamatan domisili ybs</li>
                <li>Kartu Tanda Penduduk WNI</li>
                <li>Kartu Keluarga WNI</li>
                <li>Akta Perkawinan (jika menikah di Luar Negeri sertakan fotokopi Sertifikat Menikah dari Luar Negeri, surat KBRI dan Pelaporan Perkawinan dari Disdukcapil)</li>
                <li>KITAS/KITAP (WNA)</li>
                <li>Fotocopy Passport Suami dan Istri lengkap</li>
              </ul>
            </br>  
            <strong>PERJANJIAN PERKAWINAN</strong>
          </br> 
            <ul style="list-style-type: decimal;">
              <li>Surat Permohonan</li>
              <li>Akta Notaris</li>
              <li>Kartu Tanda Penduduk (KTP) dan Kartu Keluarga (KK)</li>
              <li>Passport Suami/Istri bagi yang salah satunya WNA</li>
              <li>Akta Perkawinan/Pelaporan Perkawinan</li>
              <li>Surat Keabsahan Akta Perkawinan/Pelaporan Perkawinan (Jika Akta Perkawinan/Pelaporan Perkawinan dikeluarkan oleh Dinas Luar Kota Bandung)</li>
            </ul>

                    </br>
                    </br>  
                  
                    <!-- TATA CARA -->
                    </br></br> 
                    </br> <strong>TATA CARA</strong>
                    </br> <i>* Klik pada gambar untuk memperbesar tampilan gambar</i>
                    </br></br> 
                    <a href="assets/img/Prodak Ducapil/Surat-Keterangan-Tata-Cara.png" alt="" class="img-w25"></a>
                  </div>
            </li>
        </ul>
      </div>
    </div>
  </section>
<!-- End Pencatatan Sipil Section -->  

  </main><!-- End #main -->
  @endsection