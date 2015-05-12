@include('header')
@include('sidebar')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Input Data Rencana Penyerapan Anggaran ...</h1>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <select class="form-control">
                            <option>-Pilih Tahun-</option>
                            <option>2014</option>
                            <option>2015</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option>-Unit Kerja-</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-outline btn-primary">Tampilkan</button>
                        <button type="button" class="btn btn-outline btn-success">Tambahkan</button>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Perencanaan Anggaran Tahun ...
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <style type="text/css">
                                            #table th {text-align: center;}
                                            .tw {float: left;width: 50px;}
                                            .ket_tw {float: left;width: 150px;}
                                        </style>
                                        <tr id="table">
                                            <th>No.</th>
                                            <th>PAGU</th>
                                            <th>Bulan</th>
                                            <th>Rencana</th>
                                            <th>Realisasi</th>
                                            <th>Presentase</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $loopbln = array("Januari", "Februari","Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember", "Total");
                                            $i = 1;
                                            $pagu = 5000000000;
                                            $prs = "8056";
                                        ?>
                                        @foreach($loopbln as $bln)
                                            <tr>
                                                @if($i == 1)
                                                    <td><?=$i;?></td>
                                                @else
                                                    <td></td>
                                                @endif

                                                @if($i == 1)
                                                    <td><input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" value="<?=number_format($pagu);?>" disabled></td>
                                                @elseif($i == 2)
                                                    <td><button type="button" class="btn btn-info">Update</button></td>
                                                @else
                                                    <td></td>
                                                @endif

                                                <td><?=$bln;?></td>
                                                <td><input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" value="<?=number_format($pagu);?>" disabled></td>
                                                <td><input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" value="<?=number_format($pagu);?>" disabled></td>

                                                @if($i == 13)
                                                    <td><input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" value="<?=substr($prs,0,2);?>%" disabled></td>
                                                @else
                                                    <td></td>
                                                @endif
                                            </tr>
                                            <?php $i++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>