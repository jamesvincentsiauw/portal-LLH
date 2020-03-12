@extends('layout.home_layout')

@section('content')
  
<div class="blue-bg text-center">
        <div class="container ">
            <h1 class="text-center gold-text"><strong>Lembaga Layanan Hukum
                    Institut Teknologi Bandung
                </strong></h1>
            <h2 class="gold-text">
                <strong>Visi</strong>
            </h2>
            <p>
                "Menjadi Lembaga Layanan Hukum profesional yang berperan nyata dalam setiap peristiwa hukum di
                lingkungan ITB"
            </p>
            <h2 class="gold-text">
                <strong>Misi</strong>
            </h2>
            <p>1. Mewujudkan layanan konsultasi, pendampingan dan publikasi hukum yang terbaik dan berkelanjutan.

                2. Mewujudkan proses penerbitan peraturan, surat keputusan dan review kontrak yang sesuai dengan
                peraturan perundang-undangan.</p>

        </div>
    </div>

    <div class="white-bg">
        <div class="container ">
            <div class="row">
                <h3>
                    Struktur Organisasi
                </h3>
                <img src="{{asset('img/image.jpg')}}" style="width:100%">
            </div>
        </div>
    </div>

    <div class="blue-bg">
        <div class="container ">
            <div class="row">
                <div class="col text-center">
                    <h1 id="statistic-1" class="gold-text">{{$sk}}</h1>
                    <h4>Pengajuan SK</h4>
                </div>
                <div class="col text-center">
                    <h1 id="statistic-2" class="gold-text">{{$skpub}}</h1>
                    <h4>SK Terbit</h4>
                </div>
                <div class="col text-center">
                    <h1 id="statistic-3" class="gold-text">{{$peraturan}}</h1>
                    <h4>Pengajuan Peraturan</h4>
                </div>
                <div class="col text-center">
                    <h1 id="statistic-4" class="gold-text">{{$kerjasama}}</h1>
                    <h4>Pengajuan Kerjasama</h4>
                </div>
            </div>
        </div>
    </div>

    <section id="tabs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 ">
                    <nav>
                        <div class="nav nav-tabs nav-fill text-center align-items-center" id="nav-tab" role="tablist"
                            style="justify-content:center;">
                            <a class="aaa nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">Tugas Organisasi</a>
                            <a class="aaa nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false">Tugas Ketua Lembaga Layanan
                                Hukum</a>
                            <a class="aaa nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                role="tab" aria-controls="nav-contact" aria-selected="false">Tugas Sekretaris Bidang
                                Perancangan Peraturan, Keputusan dan Kontrak</a>
                            <a class="aaa nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about"
                                role="tab" aria-controls="nav-about" aria-selected="false">Tugas Sekretaris Bidang
                                Konsultasi, Pendampingan dan Publikasi</a>
                            <a class="aaa nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about2"
                                role="tab" aria-controls="nav-about" aria-selected="false">Tugas Sekretaris Bidang
                                Konsultasi, Pendampingan dan Publikasi</a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <ul class="number">
                                <li>
                                    <p>Menyusun program kerja di bidang tatakelola administrasi hukum dan tatakelola layanan hukum di ITB.</p>
                                </li>
                                <li>
                                    <p>Mengembangkan sistem tatakelola administrasi hukum dan tatakelola layanan hukum yang efektif dan efisien.</p>
                                </li>
                                <li>
                                    <p>Mengkoordinasikan dan mengembangkan sistem informasi tatakelola pembuatan ketentuan/aturan baik dalam bentuk peraturan dan/atau keputusan juga tatakelola layanan hukum di ITB.</p>
                                </li>
                                <li>
                                    <p>Melaksanakan kebijakan ITB berkaitan dengan tatakelola pembuatan ketentuan/aturan dan tatakelola layanan hukum di ITB.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <ul class="number">
                                <li>
                                    <p>Menelaah rancangan dan penyusunan draft/konsep Surat Keputusan Rektor/Wakil Rektor berdasarkan ketentuan peraturan peraturan dan petunjuk teknis.</p>
                                </li>
                                <li>
                                    <p>Menelaah perancangan dan penyusunan Peraturan Rektor ITB.</p>
                                </li>
                                <li>
                                    <p>Menelaah perancangan dan penyusunan Kerjasama Kemitraan, Nota Kesepahaman/Kesepakatan dan Perjanjian Kerjasama di lingkungan ITB.</p>
                                </li>
                                <li>
                                    <p>Menghimpun dan mengkaji peraturan perundang-undangan khususnya di bidang pendidikan tinggi yang telah diterbitkan.</p>
                                </li>
                                <li>
                                    <p>Melaksanakan kebijakan ITB berkaitan dengan tatakelola pembuatan ketentuan/aturan dan tatakelola layanan hukum di ITB.</p>
                                </li>
                                <li>
                                    <p>Melakukan identifikasi masalah hukum dilingkungan ITB sebagai bahan pertimbangan hukum untuk pimpinan.</p>
                                </li>
                                <li>
                                    <p>Mengevaluasi proses pembuatan Peraturan dan/atau Surat Keputusan (SK) Sekretaris Bidang Perancangan Peraturan, Keputusan dan Kontrak.</p>
                                </li>
                                <li>
                                    <p>Mengevaluasi proses pelaksanaan konsultasi, pendampingan dan publikasi hukum Sekretaris Bidang Konsultasi, Pendampingan dan Publikasi.</p>
                                </li>
                                <li>
                                    <p>Membuat Laporan Kinerja Lembaga Layanan Hukum.</p>
                                </li>
                                <li>
                                    <p>Mengkaji dan mengalisa peraturan yang ada di lingkungan ITB.</p>
                                </li>
                                <li>
                                    <p>Memberikan arahan/konsultasi bagi Unit Kerja dalam pembuatan Kontrak Kerjasama. </p>
                                </li>
                                <li>
                                    <p>Menelaah kontrak kontrak kerjasama yang ada di lingkungan ITB.</p>
                                </li>
                                <li>
                                    <p>Menangani pengelolaan HAKI (kerjasama dengan LPIK).</p>
                                </li>
                                <li>
                                    <p>Sebagai konsultan hukum dalam persidangan Komisi Penegakan Norma Akademik dan Kemahasiswaan (PNAK).</p>
                                </li>
                                <li>
                                    <p>Membagi tugas, memberi arahan dan mengkoordinir pelaksanaan tugas ke Sekretaris Bidang Perundang-undangan dan Sekretaris Bidang Konsultasi, Pendampingan dan Publikasi.
                                    </p>
                                </li>
                                <li>
                                    <p>Melaksanakan tugas-tugas kedinasan lainnya yang diperintahkan oleh Rektor dan/atau Wakil Rektor terkait.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <ul class="number">
                                <li>
                                    <p>Menganalisis dan menyusun konstruksi hukum ITB sebagai PTN berbadan hukum menurut peraturan perundang-undangan.</p>
                                </li>
                                <li>
                                    <p>Mempersiapkan, membuat dan menyusun konsep/draft Surat Keputusan (SK) Rektor/Wakil Rektor berdasarkan petunjuk teknis.</p>
                                </li>
                                <li>
                                    <p>Menelaah draft Kontrak Kerjasama/Kesepakatandan Perjanjian Kerjasama (PKS) di dalam lingkungan ITB dengan pihak luar.</p>
                                </li>
                                <li>
                                    <p>Mempersiapkan, membuat dan menyusun draft Kontrak Kerjasama/Kesepakatan dan Perjanjian Kerjasama (PKS)Pimpinan ITB dengan pihak luar.</p>
                                </li>
                                <li>
                                    <p>Mempersiapkan, membuat dan menyusun konsep/draft Peraturan Rektor ITB.</p>
                                </li>
                                <li>
                                    <p>Menyusun draft kebijakan pimpinan ITB dibidang produk hukum dan peraturan peraturan di lingkungan ITB.</p>
                                </li>
                                <li>
                                    <p>Penyusunan dan pengarsipan tata administrasi hukum, perundang undangan dan tata naskah keputusan perjanjian/kontrak-kontrak kerjasama, di lingkungan ITB.</p>
                                </li>
                                <li>
                                    <p>Menyimpan dokumen dan surat di bidang hukum termasuk Pembuatan dan Maintenance Database produk hukum ITB.</p>
                                </li>
                                <li>
                                    <p>Membuat Laporan Kinerja kepada Kepala Lembaga Layanan Hukum.</p>
                                </li>
                                <li>
                                    <p>Melaksanakan tugas kedinasan lainnya yang diperintahkan oleh Kepala Lembaga/Pimpinan.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                            <ul class="number">
                                <li>
                                    <p>Pengurusan status hukum tanah dan bangunan ITB mencakup akta, sertifikat dan IMB.</p>
                                </li>
                                <li>
                                    <p>Pelayanan konsultasi hukum terhadap unit kerja dan usaha di bawah ITB.</p>
                                </li>
                                <li>
                                    <p>Pelayanan pendampingan advokasi, mediasi dan negosiasi.</p>
                                </li>
                                <li>
                                    <p>Pendampingan untuk penyelesaian sengketa berkaitan dengan gugatan dan kontrak.</p>
                                </li>
                                <li>
                                    <p>Pendampingan dan penanganan masalah/perkara hukum baik di pengadilan maupun di luar pengadilan.</p>
                                </li>
                                <li>
                                    <p>Memonitor atas kelancaran dan kebenaran proses administrasi layanan bantuan hukum di lingkungan ITB.</p>
                                </li>
                                <li>
                                    <p>Korespondensi dan publikasi produk hukum, buku panduan hukum, report buku-buku hukum, peraturan-peraturan, majalah layanan hukum, hasil putusan PN, PT, MA dan MK.</p>
                                </li>
                                <li>
                                    <p>Mempersiapkan bahan dan data data dalam proses pendampingan penanganan masalah/perkara berkaitan dengan ITB secara kelembagaan baik di pengadilan maupun di luar pengadilan.</p>
                                </li>
                                <li>
                                    <p>Membuat Laporan Kinerja kepada Kepala Lembaga Layanan Hukum.</p>
                                </li>
                                <li>
                                    <p>Melaksanakan tugas kedinasan lainnya yang diperintahkan oleh Kepala Lembaga/Pimpinan.</p>
                                </li>
                                <li>
                                    <p>Layanan konsultasi hukum kepada pegawai ITB yang mempunyai masalah hukum yang bersifat kedinasan.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-about2" role="tabpanel" aria-labelledby="nav-about-tab">
                            <ul class="number">
                                <li>
                                    <p>Melaksanakan tugas operasional kerumahtanggaan Kantor Lembaga Layanan Hukum.</p>
                                </li>
                                <li>
                                    <p>Melaksanakan tugas ketatausahaan kantor Lembaga Layanan Hukum.</p>
                                </li>
                                <li>
                                    <p>Penjadwalan acara/kegiatan Ketua Lembaga Layanan Hukum.</p>
                                </li>
                                <li>
                                    <p>Melaksanakan administrasi perjalanan dinas Kantor Lembaga Layanan Hukum.</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @endsection