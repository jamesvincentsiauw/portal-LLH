@extends('layout.admin_layout')

@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Statistik Bulanan</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <div class="chart-note">
                                                    <span class="dot dot--blue"></span>
                                                    <span>Pengajuan</span>
                                                </div>
                                                <div class="chart-note mr-0">
                                                    <span class="dot dot--green"></span>
                                                    <span>SK Terbit</span>
                                                </div>
                                            </div>
                                            <div class="chart-info__right">
                                                <div class="chart-statis">
                                                    <span class="index decre">
                                                        <i class="zmdi zmdi-long-arrow-up"></i>15%</span>
                                                    <span class="label">products</span>
                                                </div>
                                                <div class="chart-statis mr-0">
                                                    <span class="index incre">
                                                        <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                                    <span class="label">services</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recent-report__chart">
                                            <canvas id="recent-rep-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">Statistik Pengajuan</h3>

                                        <div class="col-xl-12">
                                            <div class="percent-chart">
                                                <canvas id="doughutChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Pengajuan Permohonan Terbaru</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Tanggal</th>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Jabatan</th>
                                                <th class="text-center">Judul SK</th>
                                                <th class="text-center">Status Sekarang</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100398</td>
                                                <td>Andi Budiman</td>
                                                <td>Kepala Unit Olahraga</td>
                                                <td>ABCD</td>
                                                <td>Menunggu Persetujuan Admin</td>
                                                <td>
                                                    <div class="row" style="width:350px">
                                                        <div class="col">
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm">View</button>
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm">Download</button>
                                                        </div>
                                                        <div class="col">
                                                            <button type="button"
                                                                class="btn btn-success btn-sm">Accept</button>
                                                            <button type="button"
                                                                class="btn btn-danger btn-sm">Decline</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-28 01:22</td>
                                                <td>100397</td>
                                                <td>Arief Namanya agak panjang</td>
                                                <td>Kepala Unit Fakultas</td>
                                                <td>ABCD</td>
                                                <td>Menunggu Persetujuan Admin</td>
                                                <td>
                                                    <div class="row" style="width:350px">
                                                        <div class="col">
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm">View</button>
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm">Download</button>
                                                        </div>
                                                        <div class="col">
                                                            <button type="button"
                                                                class="btn btn-success btn-sm">Accept</button>
                                                            <button type="button"
                                                                class="btn btn-danger btn-sm">Decline</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-27 02:12</td>
                                                <td>100396</td>
                                                <td>Joko</td>
                                                <td>Staff Unit Lingkungan</td>
                                                <td>ABCD</td>
                                                <td>Menunggu Persetujuan Admin</td>
                                                <td>
                                                    <div class="row" style="width:350px">
                                                        <div class="col">
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm">View</button>
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm">Download</button>
                                                        </div>
                                                        <div class="col">
                                                            <button type="button"
                                                                class="btn btn-success btn-sm">Accept</button>
                                                            <button type="button"
                                                                class="btn btn-danger btn-sm">Decline</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>100395</td>
                                                <td>Agus</td>
                                                <td>Staff Unit Kesehatan</td>
                                                <td>ABCD</td>
                                                <td>Menunggu Persetujuan Admin</td>
                                                <td>
                                                    <div class="row" style="width:350px">
                                                        <div class="col">
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm">View</button>
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm">Download</button>
                                                        </div>
                                                        <div class="col">
                                                            <button type="button"
                                                                class="btn btn-success btn-sm">Accept</button>
                                                            <button type="button"
                                                                class="btn btn-danger btn-sm">Decline</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-25 19:03</td>
                                                <td>100393</td>
                                                <td>Bambang</td>
                                                <td>Staff Unit Keuangan</td>
                                                <td>ABCD</td>
                                                <td>Menunggu Persetujuan Admin</td>
                                                <td>
                                                    <div class="row" style="width:350px">
                                                        <div class="col">
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm">View</button>
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm">Download</button>
                                                        </div>
                                                        <div class="col">
                                                            <button type="button"
                                                                class="btn btn-success btn-sm">Accept</button>
                                                            <button type="button"
                                                                class="btn btn-danger btn-sm">Decline</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100392</td>
                                                <td>Meti</td>
                                                <td>Kepala Unit Sarana Prasarana</td>
                                                <td>ABCD</td>
                                                <td>Menunggu Persetujuan Admin</td>
                                                <td>
                                                    <div class="row" style="width:350px">
                                                        <div class="col">
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm">View</button>
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm">Download</button>
                                                        </div>
                                                        <div class="col">
                                                            <button type="button"
                                                                class="btn btn-success btn-sm">Accept</button>
                                                            <button type="button"
                                                                class="btn btn-danger btn-sm">Decline</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-24 19:10</td>
                                                <td>100391</td>
                                                <td>Budi</td>
                                                <td>Warga ITB</td>
                                                <td>ABCD</td>
                                                <td>Menunggu Persetujuan Admin</td>
                                                <td>
                                                    <div class="row" style="width:350px">
                                                        <div class="col">
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm">View</button>
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm">Download</button>
                                                        </div>
                                                        <div class="col">
                                                            <button type="button"
                                                                class="btn btn-success btn-sm">Accept</button>
                                                            <button type="button"
                                                                class="btn btn-danger btn-sm">Decline</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-22 00:43</td>
                                                <td>100393</td>
                                                <td>Susanto</td>
                                                <td>Staff Unit Konsumsi</td>
                                                <td>ABCD</td>
                                                <td>Menunggu Persetujuan Admin</td>
                                                <td>
                                                    <div class="row" style="width:350px">
                                                        <div class="col">
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm">View</button>
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm">Download</button>
                                                        </div>
                                                        <div class="col">
                                                            <button type="button"
                                                                class="btn btn-success btn-sm">Accept</button>
                                                            <button type="button"
                                                                class="btn btn-danger btn-sm">Decline</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
  @endsection