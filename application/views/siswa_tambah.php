  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Siswa</a></li>
        <li class="active">Tambah Siswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <form action="<?php echo site_url('siswa/proses_tambah') ?>" method="POST">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Biodata Siswa</h3>
            </div>
            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Siswa</label>
                  <input type="text" class="form-control" name="namaSiswa" placeholder="Nama Siswa">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Asal</label>
                  <input type="text" class="form-control" name="asalSiswa" placeholder="Asal Siswa">
                </div>
                <label for="exampleInputPassword1">Tanggal Lahir</label>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      <select class="form-control" name="tglLahir">
                        <option disabled selected>Tanggal</option>
                        <?php
                          for ($i=1; $i < 32; $i++) {
                            echo '<option value="'.$i.'">'.$i.'</option>';
                          }
                        ?>
                      </select>
                    </div>
                    <div class="col-md-4">
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
                    <div class="col-md-4">
                      <select class="form-control" name="thnLahir">
                        <option disabled selected>Tahun</option>
                        <?php
                          $thn = date('Y');
                          for ($i=1999; $i <= $thn; $i++) {
                            echo '<option value="'.$i.'">'.$i.'</option>';
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" class="form-control" name="alamatSiswa" placeholder="Alamat Tinggal">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Provinsi</label>
                  <select class="form-control" disabled name="provinsi">
                    <option value="Bali">Bali</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kabupaten / Kota</label>
                  <select class="form-control" disabled name="kabkot">
                    <option value="Denpasar">Denpasar</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-5">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Wali Siswa </h3>
            </div>
            <div class="box-body">
              <!-- Color Picker -->
              <div class="form-group">
                <label>Nama Wali</label>
                <input type="text" class="form-control" name="namaWali" placeholder="Nama Wali">
              </div>
              <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" class="form-control" name="noTelp" placeholder="Nomor Telepon">
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Les Siswa </h3>
            </div>
            <div class="box-body">
              <!-- Color Picker -->
              <div class="form-group">
                <label>Kelas Les</label>
                <select class="form-control" name="kelasLes">
                  <option disabled selected>Kelas Les</option>
                  <option value="PRA TK">PRA TK</option>
                  <option value="TK">TK</option>
                  <option value="Kelas 1">Kelas 1</option>
                  <option value="Kelas 2">Kelas 2</option>
                  <option value="Kelas 3">Kelas 3</option>
                  <option value="Kelas 4">Kelas 4</option>
                  <option value="Kelas 5">Kelas 5</option>
                </select>
              </div>
              <div class="form-group">
                <label>Waktu Les</label>
                <select class="form-control" name="waktuLes">
                  <option disabled selected>Waktu Les</option>
                  <option value="Jam 8">Jam 8</option>
                  <option value="Jam 9">Jam 9</option>
                  <option value="Jam 10">Jam 10</option>
                  <option value="Jam 2">Jam 2</option>
                  <option value="Jam 3">Jam 3</option>
                </select>
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-3">
          <input type="submit" class="btn btn-primary form-control" style="height:40px" value="Tambah Siswa" name="" value="">
          <div style="margin-top:30px;" class="text-red">
            <?php echo validation_errors(); ?>
            <?php echo form_open('siswa/proses_tambah') ?>
          </div>
          <div class="form-group" style="visibility:hidden">
            <label for="exampleInputEmail1">ID Siswa</label>
            <input type="text" name="id_siswa" class="form-control" value="<?php echo "RB-".random_string('numeric', 8); ?>">
          </div>
        </div>
        <!--/.col (right) -->
      </form>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2017 <a href="http://almsaeedstudio.com">Laksmaputra</a>.</strong> All rights
    reserved.
  </footer>
