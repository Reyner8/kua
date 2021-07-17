<?php
$this->load->view('header');
?>



<div class="row mb-5">
  <div class="col-md-12 mt-4 d-flex justify-content-center">
    <h2>PENDAFTARAN</h2>
  </div>
  <div class="col-md-12">
    <?= $this->session->flashdata('err') ?>
  </div>
  <div class="col-md-12">
    <form action="<?= base_url('insert/insert_registration') ?>" method="POST" enctype="multipart/form-data">
      <div class="row d-flex justify-content-center">
        <!-- form lokasi -->
        <div class="col-md-12" id="tab-1">
          <div class="card mt-2">
            <div class="card-header">
              Pilih Tempat Dan Jadwal Nikah
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="no_daftar" type="text" placeholder="No Daftar" name="no_daftar" value="<?= $no_daftar ?>" readonly>
                    <label for="no_daftar">No Daftar</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <select name="kode_kua" class="form-control">
                      <?php foreach ($kode_kua as $kua) : ?>
                        <option value="<?= $kua->id ?>"><?= $kua->kode_kua ?></option>
                      <?php endforeach; ?>
                    </select>
                    <label for="no_daftar">Kode KUA</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="tempat_nikah" type="text" placeholder="Tempat Nikah" name="tempat_nikah" required />
                    <label for="tempat_nikah">Tempat Nikah</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="tanggal_nikah" type="date" placeholder="Tanggal Nikah" name="tanggal_nikah" required />
                    <label for="tanggal_nikah">Tanggal Nikah</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="alamat_nikah" type="text" placeholder="Alamat" name="alamat_nikah" required />
                    <label for="alamat">Alamat</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- form suami -->
        <div class="col-md-12" id="tab-2">
          <div class="card mt-2">
            <div class="card-header">
              Form Data Suami
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="nik_suami" type="text" placeholder="NIK Suami" name="nik_suami" required />
                    <label for="nik_suami">NIK Suami</label>
                  </div>

                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="nama_suami" type="text" placeholder="Nama Suami" name="nama_suami" required />
                    <label for="nama_suami">Nama Suami</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <select name="kewarganegaraan_suami" class="form-control">
                      <option value="WNI">WNI</option>
                      <option value="WNA">WNA</option>
                    </select>
                    <label for="no_daftar">Kewarganegaraan</label>
                  </div>

                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="tempat_lahir" type="text" placeholder="Tempat Lahir" name="tempat_lahir_suami" required />
                    <label for="tempat_lahir">Tempat Lahir</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="tanggal_lahir" type="date" placeholder="Tanggal Lahir" name="tanggal_lahir_suami" required />
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="umur" type="text" placeholder="Umur" name="umur_suami" required />
                    <label for="umur">Umur</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating mb-3">
                    <select name="status_suami" class="form-control">
                      <option value="lajang">Lajang</option>
                      <option value="duda">Duda</option>
                      <option value="janda">Janda</option>
                    </select>
                    <label for="status">status</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating mb-3">
                    <select name="agama_suami" class="form-control">
                      <option value="katolik">katolik</option>
                      <option value="kristen">kristen</option>
                      <option value="islam">islam</option>
                      <option value="budha">budha</option>
                      <option value="konghucu">konghucu</option>
                    </select>
                    <label for="agama">Agama</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating mb-3">
                    <select name="jk_suami" class="form-control">
                      <option value="pria">Pria</option>
                    </select>
                    <label for="jk">Jenis Kelamin</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="alamat" type="text" placeholder="Alamat" name="alamat_suami" required />
                    <label for="alamat">Alamat</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="pekerjaan" type="text" placeholder="pekerjaan" name="pekerjaan_suami" required />
                    <label for="pekerjaan">pekerjaan</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="telepon" type="text" placeholder="telepon" name="telepon_suami" required />
                    <label for="telepon">telepon</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="email" type="email" placeholder="email" name="email_suami" required />
                    <label for="email">email</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="">Foto</label>
                  <div class="form-floating mb-3 mt-2">
                    <input type="file" name="foto_suami" required />
                  </div>
                </div>

              </div>



            </div>
          </div>
        </div>
        <!-- form istri -->
        <div class="col-md-12" id="tab-3">
          <div class="card mt-2">
            <div class="card-header">
              Form Data Istri
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="nik_istri" type="text" placeholder="NIK Istri" name="nik_istri" required />
                    <label for="nik_istri">NIK Istri</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="nama_istri" type="text" placeholder="Nama Suami" name="nama_istri" required />
                    <label for="nama_istri">Nama Istri</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <select name="kewarganegaraan_istri" class="form-control">
                      <option value="WNI">WNI</option>
                      <option value="WNA">WNA</option>
                    </select>
                    <label for="kewarganegaraan">Kewarganegaraan</label>
                  </div>

                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="tempat_lahir" type="text" placeholder="Tempat Lahir" name="tempat_lahir_istri" required />
                    <label for="tempat_lahir">Tempat Lahir</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="tanggal_lahir" type="date" placeholder="Tanggal Lahir" name="tanggal_lahir_istri" required />
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="umur" type="text" placeholder="Umur" name="umur_istri" required />
                    <label for="umur">Umur</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating mb-3">
                    <select name="status_istri" class="form-control">
                      <option value="lajang">Lajang</option>
                      <option value="duda">Duda</option>
                      <option value="janda">Janda</option>
                    </select>
                    <label for="status">status</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating mb-3">
                    <select name="agama_istri" class="form-control">
                      <option value="katolik">katolik</option>
                      <option value="kristen">kristen</option>
                      <option value="islam">islam</option>
                      <option value="budha">budha</option>
                      <option value="konghucu">konghucu</option>
                    </select>
                    <label for="agama">Agama</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating mb-3">
                    <select name="jk_istri" class="form-control">
                      <option value="pria">Pria</option>
                    </select>
                    <label for="jk">Jenis Kelamin</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="alamat" type="text" placeholder="Alamat" name="alamat_istri" required />
                    <label for="alamat">Alamat</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="pekerjaan" type="text" placeholder="pekerjaan" name="pekerjaan_istri" required />
                    <label for="pekerjaan">pekerjaan</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="telepon" type="text" placeholder="telepon" name="telepon_istri" required />
                    <label for="telepon">telepon</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="email" type="email" placeholder="email" name="email_istri" required />
                    <label for="email">email</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="">Foto</label>
                  <div class="form-floating mb-3 mt-2">
                    <input type="file" name="foto_istri" required />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- form saksi -->
        <div class="col-md-12" id="tab-4">
          <div class="card mt-2">
            <div class="card-header">
              Data Saksi
            </div>
            <div class="card-body">
              <div class="form-floating mb-3">
                <input class="form-control" id="nik_saksi" type="text" placeholder="Nik Saksi" name="nik_saksi">
                <label for="nik_saksi">Nik Saksi</label>
              </div>
              <div class="form-floating mb-3">
                <input class="form-control" id="nama" type="text" placeholder="Nama" name="nama_saksi">
                <label for="nama">Nama</label>
              </div>
              <div class="form-floating mb-3">
                <input class="form-control" id="umur" type="text" placeholder="umur" name="umur_saksi">
                <label for="umur">Umur</label>
              </div>
              <div class="form-floating mb-3">
                <input class="form-control" id="alamat" type="text" placeholder="alamat" name="alamat_saksi">
                <label for="alamat">Alamat</label>
              </div>
            </div>
          </div>
        </div>
        <!-- form berkas -->
        <div class="col-md-12" id="tab-5">
          <div class="card mt-4">
            <div class="card-header">
              Data Kelengkapan Berkas
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <label for="">N1: Surat Pengantar Nikah</label>
                  <div class="form-floating mb-3 mt-2">
                    <input type="file" name="n1" required />
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="">N1: Surat Persetujuan Mempelai</label>
                  <div class="form-floating mb-3 mt-2">
                    <input type="file" name="n3" required />
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="">N5: Surat Izin Orangtua</label>
                  <div class="form-floating mb-3 mt-2">
                    <input type="file" name="n5" required />
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="">Surat akta cerai</label>
                  <div class="form-floating mb-3 mt-2">
                    <input type="file" name="akta_cerai" required />
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="">Surat izin komandan</label>
                  <div class="form-floating mb-3 mt-2">
                    <input type="file" name="izin_komandan" required />
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="">Surat izin kedutaan</label>
                  <div class="form-floating mb-3 mt-2">
                    <input type="file" name="izin_kedutaan" required />
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="">Fotocopy KTP</label>
                  <div class="form-floating mb-3 mt-2">
                    <input type="file" name="ktp" required />
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="">Fotocopy KK</label>
                  <div class="form-floating mb-3 mt-2">
                    <input type="file" name="kk" required />
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="">Fotocopy akta lahir</label>
                  <div class="form-floating mb-3 mt-2">
                    <input type="file" name="akta_lahir" required />
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="">Pas foto (2x3)</label>
                  <div class="form-floating mb-3 mt-2">
                    <input type="file" name="foto1" required />
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="">Pas foto (4x6)</label>
                  <div class="form-floating mb-3 mt-2">
                    <input type="file" name="foto2" required />
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12 mt-2" id="buttons">
          <div class="card">
            <div class="card-body">
              <button type="button" id="prev" class="btn btn-outline-secondary">Previous</button>
              <button type="button" id="next" class="btn btn-primary">Next</button>
              <button type="submit" id="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
    </form>
  </div>

</div>

</div>

<?php
$this->load->view('footer');
?>