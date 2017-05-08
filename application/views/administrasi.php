
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrasi
        <small>Halaman pengurusan administrasi siswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-calendar-check-o"></i> Administrasi</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Cari Siswa</h3>
        </div>
        <div class="box-body">
          <form class="" action="<?php echo site_url('administrasi/cari_siswa') ?>" method="get">
            <div class="input-group" style="width:500px;">
              <input type="text" class="form-control" name="cari" placeholder="Cari Nama / dengan ID" value="">
              <span class="input-group-btn">
                <input type="submit" value="Cari Siswa" class="btn btn-info btn-flat">
              </span>
            </div>
          </form>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

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
