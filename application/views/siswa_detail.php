<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Siswa
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">

        <div class="col-md-4">
          <?php
            if (!empty($this->session->flashdata('sukses'))) {
          ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-check"></i> Sukses!</h4>
              Pembayaran SPP berhasil
            </div>
          <?php
            }else if(!empty($this->session->flashdata('gagal'))){
          ?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
              Pembayaran Gagal
            </div>
          <?php
            }
          ?>

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo site_url() ?>/assets/image/avatar2.png" alt="User profile picture">

              <h6 class="profile-username text-center"><?php echo $siswa->namaSiswa ?></h6>

              <ul class="list-group list-group-unbordered">
                <!-- <li class="list-group-item">
                  <b>Nama Siswa</b> <a class="pull-right"><?php echo $siswa->namaSiswa ?></a>
                </li> -->
                <li class="list-group-item">
                  <b>Kelas Les</b> <a class="pull-right"><?php echo $siswa->kelasLes ?></a>
                </li>
                <li class="list-group-item">
                  <b>Kelas Les</b> <a class="pull-right"><?php echo $siswa->id_siswa ?></a>
                </li>
                <li class="list-group-item">
                  <b>Waktu Les</b> <a class="pull-right"><?php echo $siswa->waktuLes ?></a>
                </li>
                <li class="list-group-item">
                  <b>Nama Wali</b> <a class="pull-right"><?php echo $siswa->namaWali ?></a>
                </li>
                <li class="list-group-item">
                  <b>No Telepon</b> <a class="pull-right"><?php echo $siswa->noTelp ?></a>
                </li>
                <li class="list-group-item">
                  <b>Alamat</b> <a class="pull-right"><?php echo $siswa->alamat.', '.$siswa->kabupaten.' '.$siswa->provinsi ?></a>
                </li>
                <li class="list-group-item">
                  <b>Tanggal Lahir</b> <a class="pull-right"><?php echo $siswa->tglLahir.' '.$siswa->blnLahir.' '.$siswa->thnLahir ?></a>
                </li>
              </ul>
              <div class="row">
                <div class="col-md-12" style="margin-bottom:10px;">
                  <button type="button" class="btn bg-olive btn-flat col-md-12">Edit Siswa</button>
                </div>
                <div class="col-md-6">
                  <?php
                    echo anchor('spp/siswa/'.$siswa->id_siswa,'<button type="button" class="btn bg-maroon btn-flat col-md-12">Bayar SPP</button>');
                  ?>
                </div>
                <div class="col-md-6">
                  <button type="button" class="btn bg-navy btn-flat col-md-12">Kelola Tabungan</button>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>

        </div>
        <!-- /.col -->
        <div class="col-md-8">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">SPP</a></li>
              <li><a href="#tabungan" data-toggle="tab">Tabungan</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                  <div class="post">
                    <table class="table table-condensed">
                      <tr>
                        <th style="width: 70px">#</th>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Status</th>
                        <!-- <th>Opsi</th> -->
                      </tr>
                      <?php
                        $i = 1;
                        foreach ($spp as $espp) {
                          echo '<tr>';
                            echo '<td>'.$i.'</td>';
                            echo '<td>'.$espp->bulanPembayaran.'</td>';
                            echo '<td>'.$espp->tahunPembayaran.'</td>';
                            echo '<td>'.$espp->tglPembayaran.'</td>';
                            if ($espp->ket == '') {
                              echo '<td><span class="label label-danger">Belum Bayar</span></td>';
                              // echo '<td><a href="#"><span data-toggle="modal" data-target="#myModal" class="label label-success">Bayar SPP</span></a></td>';
                            }else if($espp->ket == 'Lunas'){
                              echo '<td><span class="label label-success">Lunas</span></td>';
                              // echo '<td>-</td>';
                            }

                          echo '</tr>';
                          $i++;
                        }

                      ?>
                    </table>
                  <!-- /.post -->
                </div>

              </div>
          <!-- /.nav-tabs-custom -->
              <div class="tab-pane" id="tabungan">
                <?php
                  if (empty($tabungan)) {
                    echo '<h3 style="text-align:center">Siswa belum memiliki tabungan</h3>';
                  }
                ?>
              </div>
            </div>
        <!-- /.col -->
        </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Bayar SPP</h4>
        </div>
        <div class="modal-body">
          <!-- <p>Tarif SPP : Rp 70.000</p> -->
          <center>
            <form action="<?php echo site_url('siswa/bayar_spp') ?>" method="post">
              <table>
                <tr>
                  <td>Tarif SPP</td>
                  <td><b style="font-size: 32px;font-weight: 500;margin-left: 50px">Rp 70.000</b></td>
                </tr>
                <tr>
                  <td>Pilih Bulan</td>
                  <td width="200">
                    <input type="hidden" value="<?php echo $siswa->id_siswa ?>" name="id_siswa">
                    <select class="form-control" style="margin-left: 50px" name="bulan">
                      <?php
                        foreach ($bulan as $bln) {
                          echo '<option value="'.$bln->bulanPembayaran.'">'.$bln->bulanPembayaran.'</option>';
                        }
                      ?>
                    </select>
                  </td>
                  <!-- <td><img src="<?php echo site_url() ?>/assets/image/plust.png" style="margin-left: 60px"></td> -->
                </tr>
                <tr>
                  <td height="50">
                    Password Admin
                  </td>
                  <td>
                    <input type="password" style="margin-left: 50px" class="form-control" name="password">
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <!-- <button class="btn btn-primary">Bayar</button> -->
                    <input type="submit" class="btn btn-primary" style="width: 119%; margin-top: 30px;" name="" value="Bayar">
                  </td>
                </tr>
              </table>
            </form>
          </center>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        </div>
      </div>
    </div>
  </div>
  </div>

</div>
