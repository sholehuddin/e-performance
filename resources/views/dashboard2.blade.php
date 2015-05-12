@include('header')
@include('sidebar')


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <div class="col-lg-4">
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
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12 Unit Kerja</div>
                                    <div>Dalam Proses Kinerja</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13 Unit Kerja</div>
                                    <div>Belum Input Kinerja</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26 Unit Kerja</div>
                                    <div>Dalam Proses Anggaran</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13 Unit Kerja</div>
                                    <div>Belum Input Anggaran   </div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i><b>  Capaian Kinerja ....</b>
                        </div>
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-pie-chart"></div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-money fa-fw"></i></i><b>  Realisasi Anggaran</b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-bar-chart"></div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-money fa-fw"></i><b>  Pelaksanaan Anggaran</b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <a class="list-group-item">
                                    <strong> Keterangan : </strong><br>
                                    <label class='label label-success'>BAIK</label>
                                    <label class='label label-danger'>BURUK</label>
                                    <label class='label label-warning'>HATI-HATI</label>
                                    <label class='label label-info'>BELUM INPUT</label>
                            </a>
                            <!-- /.list-group -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Unit Kerja</th>
                                            <th>Target</th>
                                            <th>Target (%)</th>
                                            <th>Realisasi</th>
                                            <th>Realisasi (%)</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="danger">
                                            <td>Deputi Bidang Sumber Daya Manusia dan Kebudayaan</td>
                                            <td>28,519,715,000</td>
                                            <td>94.73%</td>
                                            <td>28,519,715,000</td>
                                            <td>94.73%</td>
                                            <td><button type="button" class="btn btn-default btn-circle"><i class="fa fa-search"></i></button></td>
                                        </tr>
                                        <tr class="warning">
                                            <td>Deputi Bidang Sumber Daya Manusia dan Kebudayaan</td>
                                            <td>28,519,715,000</td>
                                            <td>94.73%</td>
                                            <td>28,519,715,000</td>
                                            <td>94.73%</td>
                                            <td><button type="button" class="btn btn-default btn-circle"><i class="fa fa-search"></i></button></td>
                                        </tr>
                                        <tr class="info">
                                            <td>Deputi Bidang Sumber Daya Manusia dan Kebudayaan</td>
                                            <td>28,519,715,000</td>
                                            <td>94.73%</td>
                                            <td>28,519,715,000</td>
                                            <td>94.73%</td>
                                            <td><button type="button" class="btn btn-default btn-circle"><i class="fa fa-search"></i></button></td>
                                        </tr>
                                        <tr class="success">
                                            <td>Deputi Bidang Sumber Daya Manusia dan Kebudayaan</td>
                                            <td>28,519,715,000</td>
                                            <td>94.73%</td>
                                            <td>28,519,715,000</td>
                                            <td>94.73%</td>
                                            <td><button type="button" class="btn btn-default btn-circle"><i class="fa fa-search"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-tasks fa-fw"></i><b>  Detail Indikator</b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <p>
                                        <i class="fa fa-bolt fa-fw"></i><strong> Tidak Tercapai</strong>
                                        <span class="pull-right text-muted">5 Indikator</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item">
                                    <p>
                                        <i class="fa fa-warning fa-fw"></i><strong> Dalam Proses</strong>
                                        <span class="pull-right text-muted">5 Indikator</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                        </div>
                                    </div>
                                </a>


                                <a href="#" class="list-group-item">
                                    <p>
                                        <i class="fa fa-upload fa-fw"></i><strong> Belum Dimulai</strong>
                                        <span class="pull-right text-muted">5 Indikator</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item">
                                    <p>
                                        <i class="fa fa-money fa-fw"></i><strong> Tercapai</strong>
                                        <span class="pull-right text-muted">5 Indikator</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">Total Indikator : <b>20</b> Indikator</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-4 -->

                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-money fa-fw"></i><b>  Detail Anggaran</b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Triwulan</th>
                                            <th>Rencana</th>
                                            <th>Realisasi</th>
                                            <th>%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="danger">
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr class="warning">
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr class="info">
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr class="success">
                                            <td>4</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>Total</th>
                                            <th>0</th>
                                            <th>0</th>
                                            <th>80%</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                                <a href="#" class="list-group-item">
                                    <p>
                                        <i class="fa fa-tasks fa-fw"></i><strong> Presentasi Realisasi</strong>
                                        <span class="pull-right text-muted">80%</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        </div>
                                    </div>
                                </a>
                            <!-- /.list-group -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-4 -->

                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i><b>  Pelaksanaan Kinerja</b>
                        </div>
                        <div class="panel-body">
                            <a class="list-group-item">
                                    <strong> Keterangan : </strong><br>
                                    <label class='label label-success'>BAIK</label>
                                    <label class='label label-danger'>BURUK</label>
                                    <label class='label label-warning'>HATI-HATI</label>
                                    <label class='label label-info'>BELUM INPUT</label>
                            </a>
                                <!-- /.list-group -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>unit Kerja</th>
                                            <th>Target</th>
                                            <th>Realisasi</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="danger">
                                            <td>Deputi Bidang Sumber Daya Manusia dan Kebudayaan</td>
                                            <td>94.73%</td>
                                            <td>94.73%</td>
                                            <td><button type="button" class="btn btn-default btn-circle"><i class="fa fa-search"></i></button></td>
                                        </tr>
                                        <tr class="warning">
                                            <td>Deputi Bidang Sumber Daya Manusia dan Kebudayaan</td>
                                            <td>94.73%</td>
                                            <td>94.73%</td>
                                            <td><button type="button" class="btn btn-default btn-circle"><i class="fa fa-search"></i></button></td>
                                        </tr>
                                        <tr class="info">
                                            <td>Deputi Bidang Sumber Daya Manusia dan Kebudayaan</td>
                                            <td>94.73%</td>
                                            <td>94.73%</td>
                                            <td><button type="button" class="btn btn-default btn-circle"><i class="fa fa-search"></i></button></td>
                                        </tr>
                                        <tr class="success">
                                            <td>Deputi Bidang Sumber Daya Manusia dan Kebudayaan</td>
                                            <td>94.73%</td>
                                            <td>94.73%</td>
                                            <td><button type="button" class="btn btn-default btn-circle"><i class="fa fa-search"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-4 -->

                {{-- Tidak Penting --}}
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i><b>  P</b>
                        </div>
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-4 -->

                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i><b>  P</b>
                        </div>
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart-multi"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i><b>  P</b>
                        </div>
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart-moving"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-4 -->
            {{-- Tidak Penting --}}
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

    <!-- Flot Charts JavaScript -->
    <script src="../bower_components/flot/excanvas.min.js"></script>
    <script src="../bower_components/flot/jquery.flot.js"></script>
    <script src="../bower_components/flot/jquery.flot.pie.js"></script>
    <script src="../bower_components/flot/jquery.flot.resize.js"></script>
    <script src="../bower_components/flot/jquery.flot.time.js"></script>
    <script src="../bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../js/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
</html>