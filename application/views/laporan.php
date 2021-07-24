<style>
   body {
      font-size: 18px;
   }

   h1 {
      text-align: center;
      margin-bottom: 50px;
   }

   .grid-container {
      display: grid;
      grid-template-columns: 300px auto;
      margin-top: 10px;
   }

   .grid-container:last-child {
      border-bottom: 2px solid gray;
   }

   .grid-item {
      align-content: center;
   }

   table {
      text-align: left;
      border: 1px solid black;
   }

   .border-left {
      border-left: 3px solid gray;
   }

   img {
      width: 250px;
   }

   hr {
      margin-bottom: 50px;
   }

   .data {
      margin-bottom: 25px;
   }

   .sub-title {
      border-top: 2px solid gray;
      border-bottom: 2px solid gray;
   }

   .sub-title h3 {
      margin-bottom: 0px;
      margin-top: 0px;
   }
</style>

<body>
   <h1>Data Calon Mempelai</h1>

   <div class="sub-title">
      <h3>Suami</h3>
   </div>

   <div class="grid-item">
      <table style="width: 100%;">
         <tr>
            <th>NIK</th>
            <td>: <?= $pria->nik ?></td>
         </tr>
         <tr>
            <th>Kewarganegaraan</th>
            <td>: <?= $pria->kewarganegaraan ?></td>
         </tr>
         <tr>
            <th>Nama</th>
            <td>: <?= $pria->nama ?></td>
         </tr>
         <tr>
            <th>Tempat Lahir</th>
            <td>: <?= $pria->tempat_lahir ?></td>
         </tr>
         <tr>
            <th>Tanggal Lahir</th>
            <td>: <?= $pria->tanggal_lahir ?></td>
         </tr>
         <tr>
            <th>Umur</th>
            <td>: <?= $pria->umur ?></td>
         </tr>
         <tr>
            <th>JK</th>
            <td>: <?= $pria->jk ?></td>
         </tr>
         <tr>
            <th>Status</th>
            <td>: <?= $pria->status ?></td>
         </tr>
         <tr>
            <th>Agama</th>
            <td>: <?= $pria->agama ?></td>
         </tr>
         <tr>
            <th>Alamat</th>
            <td>: <?= $pria->alamat ?></td>
         </tr>
         <tr>
            <th>Pekerjaan</th>
            <td>: <?= $pria->pekerjaan ?></td>
         </tr>
         <tr>
            <th>Telepon</th>
            <td>: <?= $pria->no_tlp ?></td>
         </tr>

         <tr>
            <th>
            </th>
         </tr>
      </table>
   </div>


   <div class="sub-title">
      <h3>istri</h3>
   </div>

   <div class="grid-item">
      <table style="width: 100%;">
         <tr>
            <th>NIK</th>
            <td>: <?= $wanita->nik ?></td>
         </tr>
         <tr>
            <th>Kewarganegaraan</th>
            <td>: <?= $wanita->kewarganegaraan ?></td>
         </tr>
         <tr>
            <th>Nama</th>
            <td>: <?= $wanita->nama ?></td>
         </tr>
         <tr>
            <th>Tempat Lahir</th>
            <td>: <?= $wanita->tempat_lahir ?></td>
         </tr>
         <tr>
            <th>Tanggal Lahir</th>
            <td>: <?= $wanita->tanggal_lahir ?></td>
         </tr>
         <tr>
            <th>Umur</th>
            <td>: <?= $wanita->umur ?></td>
         </tr>
         <tr>
            <th>JK</th>
            <td>: <?= $wanita->jk ?></td>
         </tr>
         <tr>
            <th>Status</th>
            <td>: <?= $wanita->status ?></td>
         </tr>
         <tr>
            <th>Agama</th>
            <td>: <?= $wanita->agama ?></td>
         </tr>
         <tr>
            <th>Alamat</th>
            <td>: <?= $wanita->alamat ?></td>
         </tr>
         <tr>
            <th>Pekerjaan</th>
            <td>: <?= $wanita->pekerjaan ?></td>
         </tr>
         <tr>
            <th>Telepon</th>
            <td>: <?= $wanita->no_tlp ?></td>
         </tr>

         <tr>
            <th>
            </th>
         </tr>
      </table>
   </div>
   <p>Pendaftar dengan nomor daftar <?= $pria->no_daftar ?> sudah diapprove oleh admin. Silahkan mengikuti pertemuan yang sudah ditentukan yaitu <br> <?= date('d-m-Y', strtotime('-7 days', strtotime($pria->tanggal_nikah)));  ?>, diharapkan mengikuti sesuai jadwal yang diberikan</p>