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
                    <p>Apakah anda yakin menghapus link ini ?<br>
                        Nama link : <b id="namalink"></b><br>
                </div>
                <form action="controller/conn_delete_link.php" method="post">
                <input class="id_link" type="hidden" name="id_link">
                
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

    <div class="modal fade" id="modal-edit-header">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Edit - Links</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="controller/conn_edit_link.php" method="post"  enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="urutan1" class="col-sm-12 col-form-label">Urutan</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" id="urutan1" name="urutan1"
                                    placeholder="Masukan Link" value="" >
                                </div>
                        </div>                             
                        <div class="form-group row">
                            <label for="inputJudul1" class="col-sm-12 col-form-label">Judul Link</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputJudul1" name="inputJudul1"
                                    placeholder="place some text here" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="textLink1" class="col-sm-12 col-form-label">Link</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="textLink1" name="textLink1"
                                    placeholder="Discount" value="" >
                                </div>
                        </div>


                    </div>

                    <input type="hidden" class="form-group" id="id_link1" name="id_link1">

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

    <div class="modal fade" id="modal-add-header">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Add - Links</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="controller/conn_add_link.php" method="post"  enctype="multipart/form-data">
                    <?php 
                        $result_head = mysqli_query($db2,"select * from `links` order by urutan desc limit 1");
                        while($d_head = mysqli_fetch_array($result_head)){
                        $last_urutan = $d_head['urutan']+1;
                        }
                    ?>
                    <div class="modal-body">         
                        <div class="form-group row">
                            <label for="urutan2" class="col-sm-12 col-form-label">Urutan</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" id="urutan2" name="urutan2"
                                    placeholder="Masukan Link" value="<?php echo $last_urutan; ?>" >
                                </div>
                        </div>               
                        <div class="form-group row">
                            <label for="inputJudul2" class="col-sm-12 col-form-label">Judul Link</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputJudul2" name="inputJudul2"
                                    placeholder="Masukan Judul Link" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="textLink2" class="col-sm-12 col-form-label">Link</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="textLink2" name="textLink2"
                                    placeholder="Masukan Link" value="" >
                                </div>
                        </div>


                    </div>

                    <input type="hidden" class="form-group" id="id_link2" name="id_link2">

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
                            <h1 class="m-0">Links
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
                                <button  class="btn btn-success float-sm-right" data-toggle="modal"
                                        data-target="#modal-add-header" style="right: 0px; width: 200px; margin-top: 10px; margin-right: 20px;">
                                        Tambah Link
                                    </button>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Urutan</th>
                                                <th>Judul Link</th>
                                                <th>Alamat Linkst</th>
                                                <th>Jumlah Klik</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            $result_head = mysqli_query($db2,"select * from `links` order by urutan");
                                            while($d_head = mysqli_fetch_array($result_head)){
                                            ?>
                                            <tr>
                                                <td><?php echo $d_head['urutan']; ?></td>
                                                <td><?php echo $d_head['judul']; ?></td>
                                                <td><?php echo $d_head['link']; ?></td>
                                                <td><?php echo $d_head['click']; ?></td>
                                                
                                                <td>
                                                    <button class="btn btn-info" name="id_ev"
                                                            data-c="<?php echo $d_head['id_links']; ?>"
                                                            data-e="<?php echo $d_head['judul']; ?>"
                                                            data-v="<?php echo $d_head['link']; ?>"
                                                            data-z="<?php echo $d_head['urutan']; ?>"
                                                            data-toggle="modal" data-target="#modal-edit-header"
                                                        style="width: 100px; margin-top: 10px; margin-right: 20px;">
                                                        <i class="fas fa-pencil-alt"></i> Edit
                                                    </button>
                                                    <button class="btn btn-danger" name="id_ev"
                                                            data-e="<?php echo $d_head['id_links'] ?>"
                                                            data-v="<?php echo $d_head['judul'] ?>"
                                                            data-toggle="modal" data-target="#modal-cancel"
                                                        style="width: 100px; margin-top: 10px; right: 0px;">
                                                        <i class="fas fa-times"></i> Delete
                                                    </button>
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
        
        $('#modal-edit-header').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient_e = button.data('e'); // Extract info from data-* attributes
            var recipient_v = button.data('v');
            var recipient_c = button.data('c');
            var recipient_z = button.data('z');

            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this);
            modal.find('.id_link1').val(recipient_c);
            modal.find('.inputJudul1').val(recipient_e);
            modal.find('.textLink1').val(recipient_v);
            modal.find('.urutan').val(recipient_z);


            
            document.getElementById("id_link1").value = recipient_c;
            document.getElementById("inputJudul1").value = recipient_e;
            document.getElementById("textLink1").value = recipient_v;
            document.getElementById("urutan1").value = recipient_z;

            
        })

        $('#modal-cancel').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient_e = button.data('e'); // Extract info from data-* attributes
            var recipient_v = button.data('v'); // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this);
            modal.find('.id_link').val(recipient_e);
            document.getElementById("namalink").innerHTML = recipient_v;
            // document.getElementById("id_varian").innerHTML = recipient_v;
        })

        $('#modal-add-header').on('show.bs.modal', function (event) {
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
    </script>
</body>

</html>