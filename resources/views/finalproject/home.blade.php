@extends('finalproject.main')

@section('isi')
<style>
    .warnawarni{
        font-family: cursive;
        font-style: italic;
        background-image: linear-gradient(90deg, #fc0000, #00ccff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
    {{-- Carousel  Awal --}}

    <div class="container-fluid pt-5">
        <div class="container ">
                <div id="carouselExampleCaptions" class="carousel slide col-lg-10 col-sm-10  offset-1">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="dist/img/8a45246df2a2b267b83725aeca5369702.png" class="d-block w-100" >
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="dist/img/ppdb_logo-1.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-dark">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="dist/img/post_ppdb.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-black" aria-hidden="true"></span>
                    <span class="visually-hidden ">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-black" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Carousel Akhir --}}

    {{-- VISI DAN MISI --}}
    <br><br><br><br>
    <div class="text-center fs-1 text-dark mt-5" data-aos="fade-up"><h1>VISI DAN MISI</h1></div>
    <div class="container">
        <h3 class="offset-1" data-aos="fade-right" data-aos-duration="700">VISI</h3>
        <p class="offset-1 col-10 fs-5" data-aos="zoom-in-right" data-aos-duration="1000">
                  Terwujudnya SMK Negeri 2 Pekanbaru sebagai pusat pendidikan dan pelatihan teknologi bermutu internasional, berwawasan lingkungan dan menghasilkan lulusan yang berkarakter baik dan mampu bersaing di pasar global.
        </p>
    </div>
    <div class="container">
        <h3 class="offset-1" data-aos="fade-right" data-aos-duration="700">MISI</h3>
            <ul class="offset-1 col-10 fs-5" data-aos="zoom-in-right" data-aos-duration="1000">
                <li>
                    SMK Negri 2 Pekanbaru dapat mengembangkan pendidikan karakter sehingga menghasilkan lulusan yang berakhlak mulia, menguasai teknologi, terserap dalam dunia usaha / dunia industri , mandiri dan mampu bersaing untuk melanjutkan pendidikan ke jenjang yang lebih tinggi.
                </li>
                <li>
                    SMK Negri 2 Pekanbaru meningkatkan kemitraan dengan dunia usaha / dunia industri atau lembaga pendidikan dalam dan luar negeri.
                </li>
                <li>
                    SMK Negri 2 Pekanbaru mampu mengembangkan kurikulum sesuai dengan standar nasional dan perkembangan teknologi.
                </li>
                <li>
                    SMK Negri 2 Pekanbaru mampu menumbuhkan pendidikan dengan berwawasan kewirausahaan / kewirausahaan.
                </li>
                <li>
                    SMK Negri 2 Pekanbaru mampu menerapkan pendidikan lingkungan.
                </li>
                <li>
                    SMK Negri 2 Pekanbaru mampu meningkatkan profesionalisme tenaga edukatif dan non edukatif.
                </li>
                <li>
                    SMK Negri 2 Pekanbaru mampu peningkatan berkelanjutan dari semua sumber daya melalui sistem Manajemen Mutu.
                </li>
                <li>
                    SMK Negri 2 Pekanbaru mampu menerapkan konsep pendidikan untuk pembangunan berkelanjutan.
                </li>
            </ul>
    </div>

    {{-- Accordion Awal --}}
    <br>
    <div class=" fs-1 text-center mt-5" data-aos="fade-up"><h1>JURUSAN</h1></div>
    <div class="container">
        <div class="accordion col-lg-10 col-sm-10  offset-1 my-5" id="accordionExample" data-aos="fade-down" data-aos-duration="1000">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#jurusansatu" aria-expanded="false" aria-controls="jurusansatu">
                        Rekayasa Perangkat Lunak
                    </button>
                    </h2>
                    <div id="jurusansatu" class="accordion-collapse collapse show " data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Rekayasa Perangkat Lunak atau biasa disingkat dengan RPL adalah salah satu bidang profesi dan juga mata pelajaran yang mempelajari tentang pengembangan perangkat-perangkat lunak termasuk dalam hal pembuatannya, pemeliharaan hingga manajemen organisasi dan manajemen kualitasnya. Bisa dikatakan RPL ini merupakan sebuah perubahan yang terjadi pada perangkat lunak guna melakukan pengembangan, pemeliharaan, dan pembangunan kembali dengan menerapkan prinsip rekayasa sehingga memperoleh perangkat lunak yang bisa bekerja secara lebih efisien dan efektif pada user nantinya.   
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jurusandua" aria-expanded="false" aria-controls="jurusandua">
                        Teknik Komputer dan Jaringan
                    </button>
                </h2>
                <div id="jurusandua" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        TKJ Adalah singkatan dari Teknik Komputer Jaringan. TKJ merupakan sebuah kejuruan yang mempelajari tentang cara merakit komputer, mengenal dan mempelajari komponen hardware apa saja yang ada di dalam komputer, merakit komputer serta fokus mempelajari jaringan dasar. Tidak hanya itu selama tiga tahun belajar di TKJ anda akan belajar sistem kerja jaringan dan pemograman web serta meng-administrasi komputer jaringan. 
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jurusantiga" aria-expanded="false" aria-controls="jurusantiga">
                        Teknik Jaringan Tenaga Listrik
                    </button>
                </h2>
                <div id="jurusantiga" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Jaringan Transmisi Tenaga Listrik jurusan yang mempelajari Sistem Penyaluran Tenaga Listrik, Saluran Udara Tegangan Tinggi, dan Sistem Pembumian. Lulusan jurusan ini belajar untuk mengidentifikasi proses perencanaan sistem transmisi tenaga listrik dan melakukan perhitungan besaran transmisi listrik.
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jurusanempat" aria-expanded="false" aria-controls="jurusanempat">
                        Teknik Instalasi Tenaga Listrik
                    </button>
                </h2>
                <div id="jurusanempat" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Jurusan Teknik Instalasi Tenaga Listrik mendidik peserta didik dengan keahlian dan ketrampilan dalam Perencanaan dan Pemasangan Instalasi Penerangan dan Tenaga; Pemasangan dan pengoperasian motor listrik dengan kendali Elektromekanik, Elektronik dan PLC (Programable Logic Controller).
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jurusanlima" aria-expanded="false" aria-controls="jurusanlima">
                        Teknik Elektronika Industri
                    </button>
                </h2>
                <div id="jurusanlima" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Jurusan Elektronika Industri adalah bidang teknik yang mempelajari tentang komponen listrik dan juga berbagai macam semikonduktor. Teknik elektronika masuk ke dalam golongan teknik listrik atau elektro yang menggunakan arus kecil. Jurusan ini mendidik para siswanya supaya memiliki kemampuan atau keterampilan kepada anak didik dalam bidang system control dan juga maintenance peralatan industri yang berbasis “electrical control” dan “microprocessor”.
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jurusanenam" aria-expanded="false" aria-controls="jurusanenam">
                        Teknik Audio Video
                    </button>
                </h2>
                <div id="jurusanenam" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Teknik Audio Video merupakan konsentrasi keahlian (atau umum disebut jurusan) yang akan membekali peserta didik dengan pengetahuan, sikap dan keterampilan di bidang elektronika, khususnya dalam pembuatan, perawatan, perbaikan, instalasi dan pengolahan sistem audio dan video.
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jurusantujuh" aria-expanded="false" aria-controls="jurusantujuh">
                        Teknik Permesinan
                    </button>
                </h2>
                <div id="jurusantujuh" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Teknik Pemesinan adalah jurusan yang mempelajari tentang energi dan sumber energinya. Hal-hal yang dipelajari dalam teknik mesin banyak berurusan dengan penggerak-penggerak awal seperti turbin uap, motor bakar, mesin-mesin perkakas, pompa dan kompresor, pendingin dan pemanas dan alat-alat kimia tertentu
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jurusandelapan" aria-expanded="false" aria-controls="jurusandelapan">
                        Teknik Kendaraan Ringan
                    </button>
                </h2>
                <div id="jurusandelapan" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Teknik Kendaraan Ringan merupakan kompetensi keahlian dibidang Teknik Otomotif yang menekankan keahlian pada bidang penguasaan jasa perbaikan kendaraan ringan. Kompetensi keahlian teknik kendaraan ringan menyiapkan peserta didik untuk bekerja pada pekerjaan jasa perawatan dan perbaikan didunia usaha / industri.
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jurusansembilan" aria-expanded="false" aria-controls="jurusansembilan">
                        Teknik Geomatika
                    </button>
                </h2>
                <div id="jurusansembilan" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Teknik Geomatika adalah bidang ilmu modern yang mengintegrasikan pengumpulan, pemodelan, analisis dan manajemen data spasial (berbasis lokasi). Data spatial didapat melalui pengukuran terestris, laut, wahana angkasa dan sensor-sensor satelit dengan beracuan pada kerangka dasar Geodesi. Termasuk juga proses transformasi data spasial dari berbagai sumber pengukuran ke dalam suatu sistem informasi dengan karakteristik ketelitian yang terdefinisi dengan baik.
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jurusansepuluh" aria-expanded="false" aria-controls="jurusansepuluh">
                        Teknik Kimia Industri
                    </button>
                </h2>
                <div id="jurusansepuluh" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Teknik Kimia Industri adalah Program keahlian yang mempelajari pemprosesan bahan mentah menjadi berupa barang setengah jadi ataupun barang jadi (produk) seperti : minyak bumi dan gas bumi, gas bio, detergen, cairan anti kuman, plastik, kertas, kecantikan, obat-obatan, makanan instan, dll. Lulusan Teknik Kimia Industri berpeluang kerja antara lain : Di Industri Kimia (Sebagai Analisis Laboratorium dan Operator Peralatan Industri Kimia); Industri Pangan (Indofood, Unilever, Makanan Instan dll); Industri Kesehatan dan Kecantikan : (Industri Obat-obatan, detergen, sabun, pasta gigi, dll); Pertambangan : Pertamina, Pabrik Pengolahan Oli, dan Gas; Industri Selter Industri Pupuk dan Peptisida, Dll.
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jurusansebelas" aria-expanded="false" aria-controls="jurusansebelas">
                        Teknik Analisis Pengujian Laboratorium
                    </button>
                </h2>
                <div id="jurusansebelas" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Analisis Pengujian Laboratorium (APL) merupakan salah satu kompetensi keahlian yang termasuk dalam Program Keahlian Teknik Kimia yang ditempuh selama 3 tahun masa belajar. Sebagai rumpun Bidang Keahlian Teknologi dan Rekayasa, kompetensi keahlian ini diharapkan dapat mencetak lulusan yang terampil dalam bekerja, utamanya berkaitan dengan hal-hal yang bernuansa kimia.Oleh karena itulah, peserta didik pada kompetensi keahlian ini dibekali kompetensi Analisis Kuantitatif Konvensional, Mikrobiologi, Kimia Instrumen, Proksimat, Kimia Terapan, dan didukung kemampuan melahirkan produk kreatif dan kewirausahaan.
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jurusanduabelas" aria-expanded="false" aria-controls="jurusanduabelas">
                        Teknik Perbaikan Bodi Otomotif
                    </button>
                </h2>
                <div id="jurusanduabelas" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Peserta didik dilatih untuk menjadi seorang teknisi dalam hal perbaikan bodi otomotif atau menjadi spesialis dalam hal bagian keindahan mobil tersebut yang dapat terdiri dari interior maupun exterior. Selain dapat mengerti tentang bodi mobil, siswa juga diajarkan tentang sisi lain kendaraan yang berkaitan seperti sistem kelistrikan mobil dan juga mesinnya walaupun tidak secara mendalam, ini bertujuan agar ketika dilakukan perbaikan bodi tidak membuat kerusakan pada bagian ini dan ketika bagian ini rusak juga dapat diperbaiki dengan kemampuan yang telah diajarkan. tidak hanya itu siswa Teknik Perbaikan Bodi Otomotif (TPBO) juga diajarkan untuk melakukan pengelasan listrik maupun oksi yang bertujuan untuk membentuk dan memperbaiki permukaan panel atau komponen lainnya dari kendaraan dengan cara pengelasan.
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jurusantigabelas" aria-expanded="false" aria-controls="jurusantigabelas">
                        Teknik Bisnis dan Sepeda Motor
                    </button>
                </h2>
                <div id="jurusantigabelas" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Teknik dan Bisnis Sepeda Motor adalah kompetensi keahlian pada Bidang Studi Keahlian Teknologi dan Rekayasa Program Studi Keahlian Teknik Otomotif yang menekankan pada keterampilan pelayanan jasa mekanik kendaraan sepeda motor roda satu.
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jurusanempatbelas" aria-expanded="false" aria-controls="jurusanempatbelas">
                        Teknik Pendingin dan Tata Udara
                    </button>
                </h2>
                <div id="jurusanempatbelas" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Teknik Pendingin dan Tata Udara (Refrigeration) merupakan teknologi pengaturan temperatur udara sesuai dengan kebutuhan yang dikehandaki mencakup kebutuhan ruangan maupun lainnya guna keperluan prosesing pengawetan bahan pangan, meliputi pelayanan/produksi, pemeliharaan dan perawatan (maintenance) dan pengendalian mutu alat-alat pendingin.
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jurusanlimabelas" aria-expanded="false" aria-controls="jurusanlimabelas">
                        Teknik Desain Pemodelan dan Informasi Bangunan
                    </button>
                </h2>
                <div id="jurusanlimabelas" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Desain Pemodelan dan Informasi Bangunan adalah jurusan yang mempelajari tentang perencanaan bangunan, pelaksanaan pembuatan gedung dan perbaikan gedung. Kegiatannya adalah belajar menggambar rumah, gedung dan apartemen, menghitung biaya bangunan, melaksankan pembangunan dan memelihara kontruksi bangunan.
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jurusanenambelas" aria-expanded="false" aria-controls="jurusanenambelas">
                        Teknik Bisnis dan Konstruksi Bangunan
                    </button>
                </h2>
                <div id="jurusanenambelas" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Secara umum program keahlian Bisnis Konstruksi dan Properti mempelajari ilmu tentang konstruksi bangunan dan furniture perkayuan, pengukuran tanah, rancangan anggaran biaya (RAB) konstruksi bangunan, laporan pelaksaan konstruksi bangunan, perencanaan bisnis konstruksi dan properti, pelaksanaan dan pengawasan konstruksi, dan lainnya.
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jurusantujuhbelas" aria-expanded="false" aria-controls="jurusantujuhbelas">
                        Teknik Pengelasan
                    </button>
                </h2>
                <div id="jurusantujuhbelas" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Pengelasan (welding) adalah salah satu teknik penyambungan logam dengan cara mencairkan sebagian logam induk dan logam pengisi dengan atau tanpa tekanan dan dengan atau tanpa logam penambah dan menghasilkan sambungan yang kontinu. Lingkup teknik pengelasan dalam kontruksi sangat luas, meliputi perkapalan, jembatan, rangka baja, bejana tekan, pipa pesat, pipa saluran dan sebagainya. Disamping proses las dapat juga untuk reparasi misalnya mengisi lubang-lubang pada coran, membuat lapisan las pada perkakas, mempertebal bagian yang sudah aus, dan lainnya.
                    </div>
                </div>
            </div>
        </div>
    </div></div>
    {{-- Accordion Akhir --}}

    {{-- Start Footer --}}
    {{-- <div class="bg-black text-white  text-center fs-2 ">
        <div class=" mt-4 mb-3">Ikuti Sosial Media Sekolah</div>
        <a class="bi bi-instagram link-light hapusgaris" href="https://www.instagram.com/smkn2pekanbaru/"> FOLLOW  </a>
        <a class="bi bi-youtube link-light hapusgaris" href="https://www.youtube.com/@officialsmkn2pekanbaru981"> SUBSCRIBE  </a>
        <a class="bi bi-globe link-light hapusgaris" href="https://www.kemdikbud.go.id/main/"> MENDIKBUD</a>
    </div> --}}
    <!-- Remove the container if you want to extend the Footer to full width. -->


<footer class="bg-dark  text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4 text-center">
        <!-- Facebook -->
        <a class="btn btn-outline-primary btn-floating m-1" href="https://www.facebook.com/" role="button"><i class="bi bi-facebook"></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-info btn-floating m-1" href="https://twitter.com/?lang=en" role="button"><i class="bi bi-twitter"></i></a>
        
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com/?hl=ID" role="button"><i class="bi bi-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-warning btn-floating m-1" href="https://www.instagram.com/" role="button"><i class="bi bi-instagram"></i></a>

        <!-- Youtube -->
        <a class="btn btn-outline-danger btn-floating m-1" href="https://www.youtube.com/" role="button"><i class="bi bi-youtube"></i></a>

    </section>
    <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class=" p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <a>Website Pendaftaran Peserta Didik Baru</a>
        <div class="text-end">Created by :
            <a class=" warnawarni hapusgaris text-start">HABIEB ANUGRAH</a>
        </div>
    </div>
    
</footer>

</div>
<!-- End of .container -->

    {{-- End Footer --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if ($message = Session::get('sukses'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil Login!',
                text: '{{ $message  }}',
                
    })
        </script>
    @endif
@endsection