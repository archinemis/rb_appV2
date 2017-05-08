  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SPP
        <small>Pembayaran SPP</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hasil Pencarian Siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Nama Siswa</th>
                  <th>ID Siswa</th>
                  <th>Opsi I</th>
                  <th>Opsi II</th>
                </tr>
                <?php $no = 1; ?>
                <?php foreach ($hasil as $cari): ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $cari->namaSiswa; ?></td>
                    <td><?php echo $cari->id_siswa; ?></td>
                    <td><?php echo anchor('siswa/detail_siswa/'.$cari->id_siswa,'<span class="label label-warning">Kelola SPP</span>') ?></td>
                    <td><?php echo anchor('siswa/detail_siswa/'.$cari->id_siswa,'<span class="label label-warning">Kelola Tabungan</span>') ?></td>
                  </tr>
                <?php $no++; ?>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
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
