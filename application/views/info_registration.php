<?php
$this->load->view('header');
?>

<h1 class="mt-4 mb-4">Informasi Pendaftaran Pernikahan</h1>

<div class="row">
    <div class="col-md-5">
        <div class="card mb-4">
            <div class="card-header">
                <b>Alur Pendaftaran Pernikahan</b>
            </div>
            <div class="card-body">
                <img class="img-fluid" src="<?= base_url('assets/alur-pendaftaran.jpeg') ?>" alt="alur-pendaftaran">
            </div>

        </div>
    </div>
    <div class="col-md-7">
        <div class="card mb-4">
            <div class="card-header">
                <b>Persyaratan Pernikahan</b>
            </div>
            <div class="card-body">
                <ol>
                    <li><b>Persyaratan Umum</b>
                        <ul>
                            <li>Mengisi dan menyerahkan formulir N1,N2, dan N4 (Formulir tersebut dapat diambil di KUA)</li>
                            <li>Surat keterangan belum pernah menikah dari kelurahan setempat</li>
                            <li>Fotocopy e-KTP dan KK calon pengantin (masing-masing 1 lembar)</li>
                            <li>Fotocopy KTP orangtua (masing-masing 1 lembar)</li>
                            <li>Fotocopy Ijazah dan Akta Kelahiran (masing-masing 1 lembar)</li>
                            <li>Fotocopy e-KTP wali dan 2 orang saksi (masing-masing 1 lembar)</li>
                            <li>Fotocopy kartu imunisasi bagi calon mempelai wanita (1 lembar)</li>
                            <li>Pasfoto warna latar biru ukuran 2x3 (masing-masing 6 lembar) & 4x6 (masing-masing 2 lembar)</li>
                            <li>Biaya Nikah :
                                <ul>
                                    <li>
                                        Pernikahan di dalam balai nikah dan di jam kantor tidak dikenakan biaya.
                                    </li>
                                    <li>Pernikahan diluar balai nikah dan diluar jam kantor dikenalan biaya Rp.600.000 dan disetor kke bank dengan membawa jode billing MPN G2 (Modul Penerimaan Negara Generasi ke-2 dari KUA)</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <b>Persyaratan Khusus</b>
                        <ul>
                            <li>Bagi calon mempelai yang belum mencapai 21 Tahun maka harus mengisi dan menyerahkan model N5</li>
                            <li>Menyerahkan surat dispensasi dari pengadilan agama bagi calon suami yang belum mencapai usia 19 Tahun dan calon istri yang belum mencapai usia 16 Tahun</li>
                            <li>Menyerahkan surat ijin nikah atau surat ijin kawin (SN/SIK) dari pejabat menurut aturan yang berlaku bagi calon suami/istri atau keduanya adalah anggota POLRI/TNI</li>
                            <li>Mengisi dan menyerahkan model N6 nagi janda/duda yang ditinggal mati oleh suami/istri
                            </li>
                            <li>Akta cerai atau surat talak bagi janda/duda yang cerai hidup</li>
                            <li>Rekomendasi nikah dari KUA tempat domisili bagi calon pengantin pria/wanita yang pindah wilayah nikah</li>
                            <li>semua persyaratan dimasukkan ke dalam map snelhekter plastik warna merah serta map batik masing-masing 1 buah oleh kedua calon mempelai dan diserahkan ke KUA selambat-lambatnya 10 hari sebelum pernikahan dan apabila kurang dari 10 hari maka harus menyerahkan surat dispensasi dari camat setempat.</li>
                        </ul>
                    </li>

                </ol>

            </div>

        </div>
    </div>
</div>
<?php
$this->load->view('footer')
?>