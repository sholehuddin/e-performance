@include('header')
@include('sidebar')

        <?php $user=Auth::User();
            $role=$user->role;
            $name=$user->nama;
            $kd_surat=$user->kode_surat;
            $grup=$user->id_group;
            $id_user=$user->id;
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard {!! $name !!} </h1>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <select class="form-control">
                            <option>-Unit Kerja-</option>
                            @foreach($uk as $unit_kerja)
                                <option value="{!! $unit_kerja->id !!}">{!! $unit_kerja->nama !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-outline btn-primary">Tampilkan</button>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            @if($role != '2' || $role != '3' )
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">61 Unit Kerja</div>
                                    <div>Dalam Proses Kinerja</div>
                                </div>
                            </div>
                        </div>
                        <a href="#" data-toggle="modal" data-target="#dpk">
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
                                    <div class="huge">0 Unit Kerja</div>
                                    <div>Belum Input Kinerja</div>
                                </div>
                            </div>
                        </div>
                        <a href="#" data-toggle="modal" data-target="#bik">
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
                                    <div class="huge">40 Unit Kerja</div>
                                    <div>Dalam Proses Anggaran</div>
                                </div>
                            </div>
                        </div>
                        <a href="#" data-toggle="modal" data-target="#dpa">
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
                                    <div class="huge">19 Unit Kerja</div>
                                    <div>Belum Input Anggaran   </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" data-toggle="modal" data-target="#bia">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endif
            <!-- end -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i><b>  Capaian Kinerja {!! $name !!}</b>
                        </div>
                        <div class="panel-body">
                            <div id="chartContainer">FusionCharts XT will load here!</div>
                                <script type="text/javascript"><!--         
                                /*Biru : #0075c2
                                Hijau : #1aaf5d
                                Kuning : #f2c500
                                Orange : f45b00
                                Maroon : #8e0000*/
                                  var myChart = new FusionCharts({
                                    /*"type": "doughnut3d",*/
                                    "type": "pie3d",
                                    "width": "700",
                                    "height": "350"
                                    
                                    });
                                  myChart.setXMLData("<chart caption='Indikator' subcaption='{!! $name !!}' xAxisName='Week' " +
                                    "yAxisName='Sales' theme='fint' numberPrefix='' palettecolors='#32cd32,#ffa500,#40e0d0,#dc143c' bgcolor='#ffffff' showborder='0' use3dlighting='0' showshadow='0' enablesmartlabels='0' startingangle='0' showpercentvalues='1' showpercentintooltip='0' decimals='1' captionfontsize='14' subcaptionfontsize='14' subcaptionfontbold='0' tooltipcolor='#ffffff' tooltipborderthickness='0' tooltipbgcolor='#000000' tooltipbgalpha='80' tooltipborderradius='2' tooltippadding='5' showhovereffect='1' showlegend='1' legendbgcolor='#ffffff' legendborderalpha='0' legendshadow='0' legenditemfontsize='10' legenditemfontcolor='#666666' usedataplotcolorforlabels='1'>" +
                                      
                                      "<set label='Tercapai' value='10' />" +
                                      "<set label='Dalam Proses' value='5' />" +
                                      "<set label='Belum Dimulai' value='1' />" +
                                      "<set label='Tidak Tercapai' value='0' />" +
                                     
                                    "</chart>");

                                  myChart.render("chartContainer");
                                  
                                // -->     
                                </script>
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
                            <div id="chartContainer3">FusionCharts XT will load here!</div>          
                            <script type="text/javascript"><!--         

                              var myChart = new FusionCharts({
                                "type": "mscolumn3d",
                                "width": "700",
                                "height": "500"
                                
                              });
                              myChart.setXMLData("<chart caption='Realisasi Anggaran' subcaption='{!! $name !!}' xAxisName='Triwulan' " +
                                "yAxisName='Nominal Anggaran' theme='fint' numberPrefix='Rp. ' numberSuffix=' M' palettecolors='#0075c2,#1aaf5d,#f2c500' bgcolor='#ffffff' showborder='0' showcanvasborder='0' useplotgradientcolor='0' plotborderalpha='10' legendborderalpha='0' legendbgalpha='0' legendshadow='0' showhovereffect='1' valuefontcolor='#ffffff' rotatevalues='1' placevaluesinside='1' divlinecolor='#999999' divlinedashed='1' divlinedashlen='1' divlinegaplen='1' canvasbgcolor='#ffffff' captionfontsize='14' subcaptionfontsize='14' subcaptionfontbold='0'>" +

                                "<categories>" +   
                                "<category label='Triwulan I' />" +
                                "<category label='Triwulan II' />" +
                                "<category label='Triwulan III' />" +
                                "<category label='Triwulan IV' />" +
                                "</categories>" +

                                "<dataset seriesname='Rencana' showvalues='1'>" +
                                "<set value='50' />" +
                                "<set value='60' />" +
                                "<set value='40' />" +
                                "<set value='30' />" +
                                "</dataset>" +

                                "<dataset seriesname='Realisasi' showvalues='1'>" +
                                "<set value='90' />" +
                                "<set value='100' />" +
                                "<set value='75' />" +
                                "<set value='65' />" +
                                "</dataset>" +
                                  
                                "</chart>");

                              myChart.render("chartContainer3");
                              
                            // -->     
                            </script>     
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
                                        <i class="fa fa-check-circle fa-fw"></i><strong> Tercapai</strong>
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
                                            <th><font color="Blue">0</font></th>
                                            <th><font color="Green">0</font></th>
                                            <th><font color="Green">80%</font></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <a class="list-group-item">
                                <p>
                                    <i class="fa fa-money fa-fw"></i><strong><i> Pagu : </i></strong>
                                    <span class="pull-right text-muted"><i><b><font color="Blue">Rp. 2,978,767,534</font></b></i></span>
                                </p>
                            </a>
                            <a class="list-group-item">
                                <p>
                                    <i class="fa fa-tasks fa-fw"></i><strong> Presentasi Realisasi</strong>
                                    <span class="pull-right text-muted"><b><font color="Green">80%</font></b></span>
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
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Modal Dalam Proses Kinerja -->
    <div class="modal fade" id="dpk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-tasks"></i> Unit Kerja Dalam Proses Kinerja</h4>
                    <a href="test" class="btn btn-outline btn-success"><i class="fa fa-download"></i> Excel</a>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Unit Kerja</th>
                                    <th>Kinerja</th>
                                    <th>Kegiatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label class='label label-success'><i class="fa fa-thumbs-up"></i> Pusdatin</label></td>
                                    <td>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan I</label>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan II</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan III</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan IV</label>
                                    </td>
                                    <td>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan I</label>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan II</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan III</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan IV</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label class='label label-success'><i class="fa fa-thumbs-up"></i> Pusdatin</label></td>
                                    <td>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan I</label>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan II</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan III</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan IV</label>
                                    </td>
                                    <td>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan I</label>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan II</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan III</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan IV</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Modal Belum Input Kinerja -->
    <div class="modal fade" id="bik" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-support"></i> Unit Kerja Belum Input Kinerja</h4>
                    <a href="test" class="btn btn-outline btn-success"><i class="fa fa-download"></i> Excel</a>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <label class='label label-danger'><i class="fa fa-exclamation-circle"></i> Pusdatin</label>
                    </div>
                    <!-- /.table-responsive -->
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Modal Dalam Proses Anggaran -->
    <div class="modal fade" id="dpa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-tasks"></i> Unit Kerja Dalam Proses Anggaran</h4>
                    <a href="test" class="btn btn-outline btn-success"><i class="fa fa-download"></i> Excel</a>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Unit Kerja</th>
                                    <th>Anggaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label class='label label-primary'><i class="fa fa-thumbs-up"></i> Pusdatin</label></td>
                                    <td>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan I</label>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan II</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan III</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan IV</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label class='label label-primary'><i class="fa fa-thumbs-up"></i> Pusdatin</label></td>
                                    <td>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan I</label>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan II</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan III</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan IV</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Modal Belum Input Anggaran -->
    <div class="modal fade" id="bia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-support"></i> Unit Kerja Belum Input Anggaran</h4>
                    <a href="test" class="btn btn-outline btn-success"><i class="fa fa-download"></i> Excel</a>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <label class='label label-danger'><i class="fa fa-exclamation-circle"></i> Pusdatin</label>
                    </div>
                    <!-- /.table-responsive -->
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

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