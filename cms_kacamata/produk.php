<!DOCTYPE html>
<?php 
include 'controller/conn.php';
session_start();
if($_SESSION['status_ca'] !="login"){
    header("location:login.php");
}
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Truesight Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- icon -->
    <link rel="icon" href="dist/img/logogram.png">
    <style>
        .none {
            display: none;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="modal fade" id="modal-cancel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">PERHATIAN !!!</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin menghapus Konsumen ini ?<br>
                        Nama Perusahaan &nbsp; :<b id="namaPerusahaan"></b><br>
                        Alamat Perusahaan &nbsp; :<b id="alamatPerusahaan"></b></p>
                </div>
                <form action="controller/conn_delete_konsumen.php" method="post">
                <input class="codeC" type="hidden" name="codeC">
                <input class="nameC" type="hidden" name="nameC">
                <input class="idKon" type="hidden" name="idKon">
                <input class="typeC" type="hidden" name="typeC">
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <div class="modal fade" id="modal-notification">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">PERHATIAN !!!</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Pastikan <b>varian</b> produk sudah terhapus terlebih dahulu untuk melakukan penghapusan Produk</p>
                </div>
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <div class="modal fade" id="modal-edit-header">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Edit Konsumen</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="controller/conn_edit_konsumen.php" method="post">
                <div class="modal-body">
                        <div class="form-group row">
                            <label for="nik" class="col-sm-12 col-form-label">Id Konsumen</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="idKonE" name="idKonE"
                                    placeholder="Id Konsumen" value="" data-inputmask='"mask": "a{1,4}-9999"' data-mask>
                            </div>
                        </div>
                    <div class="form-group row">
                        <label for="namaPerusahaan" class="col-sm-12 col-form-label">Nama Perusahaan</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="namaPerusahaan1" name="namaPerusahaan1"
                                placeholder="Nama Perusahaan" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamatPerusahaan" class="col-sm-12 col-form-label">Alamat Perusahaan</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="alamatPerusahaan1" name="alamatPerusahaan1"
                                placeholder="Alamat Perusahaan" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="noTelp" class="col-sm-12 col-form-label">No Telphone Perusahaan</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="noTelp1" name="noTelp1" data-inputmask='"mask": "9999999999999"' data-mask
                                placeholder="No Telp Perusahaan" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="emailPerusahaan" class="col-sm-12 col-form-label">Email Perusahaan</label>
                        <div class="col-sm-12">
                            <input type="email" class="form-control" id="emailPerusahaan1" name="emailPerusahaan1"
                                placeholder="Email Perusahaan" value="">
                        </div>
                    </div>
                    <input class="idKon1" type="hidden" name="idKon1">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

      <div class="modal fade" id="modal-add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Add - New Customer</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="controller/conn_add_konsumen.php" method="post">
                    <div class="modal-body">

                    <div class="form-group row">
                            <label for="nik" class="col-sm-12 col-form-label">Id Konsumen</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="idKonE2" name="idKonE2"
                                    placeholder="Id Konsumen" value="" data-inputmask='"mask": "a{1,4}-9999"' data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namaPerusahaan" class="col-sm-12 col-form-label">Nama Perusahaan</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="namaPerusahaan" name="namaPerusahaan"
                                    placeholder="Nama Perusahaan" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamatPerusahaan" class="col-sm-12 col-form-label">Alamat Perusahaan</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="alamatPerusahaan" name="alamatPerusahaan"
                                    placeholder="Alamat Perusahaan" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="noTelp" class="col-sm-12 col-form-label">No Telphone Perusahaan</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="noTelp" name="noTelp" data-inputmask='"mask": "9999999999999"' data-mask
                                    placeholder="No Telp Perusahaan" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emailPerusahaan" class="col-sm-12 col-form-label">Email Perusahaan</label>
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="emailPerusahaan" name="emailPerusahaan"
                                    placeholder="Account Name" value="">
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="wrapper">
        <?php include "./view/common/navbar.php" ?>

        <?php include "./view/common/aside.php" ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Produk
                            </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div style="text-align: right;">
                                    <a href="../cms_kacamata/add_produk.php" class="btn btn-success float-sm-right" style="right: 0px; width: 150px; margin-top: 10px; margin-right: 20px;">
                                        Tambah Produk
                                    </a>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Kode Produk</th>
                                                <th>Nama</th>
                                                <th>Harga</th>
                                                <th>Discount</th>
                                                <th>Deskripsi</th>
                                                <th>Gambar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            $result_head = mysqli_query($db2,"select * from `produk`");
                                            while($d_head = mysqli_fetch_array($result_head)){
                                            ?>
                                            <tr>
                                                <td><?php echo $d_head['id_produk']; ?></td>
                                                <td><?php echo $d_head['nama']; ?></td>
                                                <td>Rp <?php echo $d_head['harga']; ?></td>
                                                <td><?php echo $d_head['discount']; ?> %</td>
                                                <td><?php echo $d_head['deskripsi']; ?></td>
                                                <td> <img class="shadow"
                                                    style="width: 200px; border: 1px solid black;"
                                                    src="../img/gambarUtama/<?php echo $d_head['gambar']; ?>" alt="your image" /> </td>
                                                <td>
                                                    <a class="btn btn-info" id="btnAddCol" href="edit_produk.php?id_produk=<?php echo $d_head['id_produk']; ?>"
                                                        style="width: 150px; margin-top: 10px; margin-right: 20px;">
                                                        <i class="fas fa-pencil-alt"></i> Edit
                                                    </a>
                                                    <a class="btn btn-secondary" id="btnAddCol" href="varian_produk.php?id_produk=<?php echo $d_head['id_produk']; ?>"
                                                        style="width: 150px; margin-top: 10px; margin-right: 20px;">
                                                        <i class="fas fa-layer-group"></i> Lihat Varian
                                                    </a>

                                                    <!-- Delete button -->
                                                    <?php 
                                                    $id_produk = $d_head['id_produk'];
                                                    $varian_x = "";
                                                    $varian = mysqli_query($db2, "select * from varian where id_produk = '$id_produk'");
                                                    
                                                    while($d_head = mysqli_fetch_array($varian)){
                                                        $varian_x = $d_head['id_varian'];
                                                    }
                                                    ?>
                                                        <a type="submit" class="btn btn-danger" href="controller/conn_delete_produk.php?id_produk=<?php echo $id_produk; ?>&id_varian=<?php echo $varian_x ?>"
                                                            style="width: 150px; margin-top: 10px; right: 0px;">
                                                            <i class="fas fa-times"></i> Delete
                                                        </a>
                                                </td>
                                            </tr>
                                            
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2021 <a href="#">Truesight</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> Beta
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- Select2 -->
    <script src="plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- InputMask -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- Page specific script -->
    <script>
            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()

            $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "paging": false,
                "sorting": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": false,
            });
        });
        
        $('#modal-cancel').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient_e = button.data('e'); // Extract info from data-* attributes
            var recipient_v = button.data('v');
            var recipient_c = button.data('c');
            var recipient_i = button.data('i');
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this);
            modal.find('.namaPerusahaan').val(recipient_e);
            modal.find('.alamatPerusahaan').val(recipient_v);
            modal.find('.idKon').val(recipient_c);
            modal.find('.emailPerusahaan').val(recipient_i);
            document.getElementById("namaPerusahaan").innerHTML = recipient_e;
            document.getElementById("alamatPerusahaan").innerHTML = recipient_i;
            document.getElementById("noTelp").innerHTML = recipient_c;
            document.getElementById("emailPerusahaan").innerHTML = recipient_v;
        })

        $('#modal-edit-header').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient_e = button.data('e'); // Extract info from data-* attributes
            var recipient_v = button.data('v');
            var recipient_c = button.data('c');
            var recipient_i = button.data('i');
            var recipient_a = button.data('a');
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this);
            modal.find('.idKon1').val(recipient_c);
            modal.find('.namaPerusahaan1').val(recipient_e);
            modal.find('.noTelp1').val(recipient_v);
            modal.find('.alamatPerusahaan1').val(recipient_i);
            modal.find('.emailPerusahaan1').val(recipient_a);

            document.getElementById("idKonE").value = recipient_c;
            document.getElementById("namaPerusahaan1").value = recipient_e;
            document.getElementById("noTelp1").value = recipient_v;
            document.getElementById("alamatPerusahaan1").value = recipient_i;
            document.getElementById("emailPerusahaan1").value = recipient_a;
            
        })


        $('#modal-add').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var modal = $(this)
        })

        $("#accountHead").removeClass("none");
        $("#selectid").on("change", function () {
            $("#accountHead").addClass("none");
            if (this.value == "0") {
                $("#accountHead").removeClass("none");
            }
        });

        <?php 
            if(isset($_SESSION['option']) && $_SESSION['option'] == "warning") {
        ?>
            $('#modal-notification').modal({
            show: true
            });
        <?php }
        $_SESSION['option']="";
        ?>
    </script>
</body>

</html>