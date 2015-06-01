            <?php $user=Auth::User();
                $role=$user->role;
                $name=$user->nama;
                $kd_surat=$user->kode_surat;
                $grup=$user->id_group;
                $id_user=$user->id;
            ?>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <div style="width: 160px;">
                            <img src="http://musrenbangnas.bappenas.go.id/favicon.ico" alt=""/>
                        </div>
                        <li>
                            <a href="home"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Input Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Rencana <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        @if($role != '3')
                                            <li>
                                                <a href="inprenstra">Renstra</a>
                                            </li>
                                        @endif
                                        <li>
                                            <a href="inprakin">Rencana Kinerja</a>
                                        </li>
                                        @if($role != '2')
                                            <li>
                                                <a href="inprakeg">Rencana Kegiatan</a>
                                            </li>
                                        @endif
                                        <li>
                                            <a href="inprangga">Rencana Anggaran</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">Realisasi <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="inprelkin">Kinerja</a>
                                        </li>
                                        <li>
                                            <a href="inprelkeg">Kegiatan</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Preview Dokumen<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Perencanaan <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="prevrenstra">Renstra</a>
                                        </li>
                                        <li>
                                            <a href="prevpkin">Penetapan Kinerja</a>
                                        </li>
                                        <li>
                                            <a href="prevpkeg">Perencanaan Kegiatan</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">Realisasi <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="prevcakeg">Capaian Kegiatan</a>
                                        </li>
                                        <li>
                                            <a href="prevrelkang">Realisasi Anggaran</a>
                                        </li>
                                        <li>
                                            <a href="prevcpkin">Capaian Penetapan Kinerja</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>