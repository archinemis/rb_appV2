  <!-- Content Wrapper. Contains page content -->
  <?php
    if (!empty($this->session->flashdata('sukses'))) {
  ?>
    <script type="text/javascript">
      swal("Sukses", "Siswa berhasil di daftar", "success");
    </script>
  <?php
    }
  ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Siswa
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Daftar Siswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data siswa RB Laksmaputra</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Siswa</th>
                  <th>ID Siswa</th>
                  <th>Kelas Les</th>
                  <th>Waktu Les</th>
                  <th>Nama Wali</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $no = 1;
                  foreach ($daftar_siswa as $siswa)
                  {
                    echo '<tr>';
                      echo '<td>'.$no.'</td>';
                      echo '<td>'.$siswa->namaSiswa.'</td>';
                      echo '<td>'.$siswa->id_siswa.'</td>';
                      echo '<td>'.$siswa->kelasLes.'</td>';
                      echo '<td>'.$siswa->waktuLes.'</td>';
                      echo '<td>'.$siswa->namaWali.'</td>';
                      echo '<td>'.anchor('siswa/detail_siswa/'.$siswa->id_siswa,'<span class="label label-success">Detail Siswa</span>').'</td>';
                    echo '</tr>';
                    $no++;
                  }
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Siswa</th>
                  <th>ID Siswa</th>
                  <th>Kelas Les</th>
                  <th>Waktu Les</th>
                  <th>Nama Wali</th>
                  <th>Opsi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
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
</div>
