<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pembayaran SPP
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">

        <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Bulan Bayar</label>
                    <select class="form-control" name="blnLahir">
                      <option disabled selected>Bulan</option>
                      <?php
                        $bln = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                        foreach($bln as $bulan){
                          echo '<option value="'.$bulan.'">'.$bulan.'</option>';
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label style="visibility:hidden">.</label>
                    <input type="button" class="btn bg-olive btn-flat col-md-12" value="Tambah Bulan">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>

        <div class="col-md-4">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <h1 class="text-right">Rp 150,000</h1>
              <h6 class="text-right">Total Biaya</h6>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Nama Siswa</b> <a class="pull-right"><?php echo $spp->namaSiswa ?></a>
                </li>
                <li class="list-group-item">
                  <b>ID Siswa</b> <a class="pull-right"><?php echo $spp->id_siswa ?></a>
                </li>
                <!-- <li class="list-group-item">
                  <b>Kelas Les</b> <a class="pull-right"><?php echo $spp->kelasLes ?></a>
                </li> -->
              </ul>
              <div class="row">
                <div class="col-md-12" style="margin-bottom:10px;">
                  <button type="button" class="btn bg-olive btn-flat col-md-12">Bayar</button>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>

        </div>

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
                    <input type="hidden" value="<?php echo $spp->id_siswa ?>" name="id_siswa">
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
