
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<br>

<div class="col-lg-12">
    <div class="row">
    <?php
        echo $sidebar;
    ?> 
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Pembelian</h4>
                </div>
                <div class="card-body">
                        <table class="table-bordered" style="background: rgba(184, 184, 184, 0.03);">
                            <tbody>
                                <tr>
                                    <td class="col-md-2">
                                        <small>TOKO</small><br>
                                        <h5>Nama Toko</h5>
                                    </td>
                                    <td class="col-md-3">
                                        <button type="button" class="btn waves-effect waves-light btn-info"><span class="btn-label"><i class="mdi mdi-message"></i></span> Chat </button>
                                    </td>
                                    <td class="col-md-3">
                                        <button type="button" class="btn waves-effect waves-light btn-outline-info"> Kunjungi Toko </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="col-md-3">
                                        <small>CATATAN UNTUK PENJUAL</small><br>
                                        <h5>----------</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="col-md-3">
                                        <img style="width: 15%; padding: 10px;" src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 100%">
                                        <span style="display: inline-block;">
                                            Nama Produk<br>
                                            <small>Jumlah : 1</small>
                                        </span>
                                        <span style="float: right;padding: 2%;">
                                            Rp10.000
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="col-md-3">
                                        <small>STATUS PESANAN</small><br>
                                        <div class="process" style="margin-bottom: 1%;margin-top: 1%;">
                                            <div class="process-row">
                                                <div class="process-step">
                                                    <button type="button" class="btn btn-info btn-bulat" ><i class="fa fa-file-text-o fa-3x"></i></button><br>
                                                    <span><h5>Pesanan Dibuat</h5></span>
                                                </div>
                                                <div class="process-step">
                                                    <button type="button" class="btn btn-info btn-bulat" ><i class="fa fa-money fa-3x"></i></button><br>
                                                    <span><h5>Belum Bayar</h5></span>
                                                </div>
                                                <div class="process-step">
                                                    <button type="button" class="btn btn-info btn-bulat"  ><i class="fa fa-truck fa-3x"></i></button><br>
                                                    <span><h5>Belum Dikirimkan</h5></span>
                                                </div>
                                                <div class="process-step">
                                                    <button type="button" class="btn btn-info btn-bulat" ><i class="fa fa-download fa-3x"></i></button><br>
                                                    <span><h5>Belum Diterima</h5></span>
                                                </div>
                                                <div class="process-step">
                                                    <button type="button" class="btn btn-default btn-bulat" style="background-color: #96989a;"  ><i class="fa fa-star-o fa-3x"></i></button><br>
                                                    <span><h5>Belum Dinilai</h5></span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-2">
                                        <small>JASA PENGIRIMAN</small><br>
                                        <h5>JNE</h5>
                                    </td>
                                    <td colspan="2" class="col-md-6">
                                        <small>NO. RESI</small><br>
                                        <h5>123456789</h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
            <!-- <div class="table-responsive">
                <form action=" " method="post">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-center"><h5>Nama Toko</h5></td>
                                <td class="text-left">
                                    <button type="button" class="btn waves-effect waves-light btn-info"><span class="btn-label"><i class="mdi mdi-message"></i></span> Chat </button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-info"> Kunjungi Toko </button>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="width: 12%"> <img src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 100%"/></td>
                                <td style="width: 70%">
                                    <span>Nama Produk</span>
                                    <br>
                                    <span>Jumlah Produk</span> </td>
                                <td class="text-right">Rp 10.000 </td>
                            </tr>
                            <tr>
                                <td><h5>Keterangan</h5></td>
                                <td>Isi Keterangan</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><h5>Pengiriman</h5></td>
                                <td>JNE &emsp;|&emsp; <span style="font-size: 14px;font-weight: 500;">Resi&emsp;</span>123456789</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-right">Total Pesanan</td>
                                <td class="text-right"><h4>Rp 10.000<h4></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-right">Kode Unik</td>
                                <td class="text-right">- Rp 1.000</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-right">Jumlah Harus Dibayar</td>
                                <td class="text-right"><h4>Rp 9.000<h4></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-right">Metode Pembayaran</td>
                                <td class="text-right">Bank BNI (dicek manual)</td>
                            </tr>
                        </tbody>
                    </table>
                </form><br><br>
            </div> -->
            <!-- ============================================================== -->
            <!-- BAGIAN ATAS -->
            <!-- ============================================================== -->
            <!-- <div class="card"><br>  
                <div class="container">
                    <div class="row">
                        <div class="process">
                            <div class="process-row nav nav-tabs">
                                <div class="process-step">
                                    <button type="button" class="btn btn-info btn-bulat" ><i class="fa fa-file-text-o fa-3x"></i></button><br>
                                    <span>Pesanan Dibuat</span>
                                </div>
                                <div class="process-step">
                                    <button type="button" class="btn btn-info btn-bulat" ><i class="fa fa-money fa-3x"></i></button><br>
                                    <span>Belum Bayar</span>
                                </div>
                                <div class="process-step">
                                    <button type="button" class="btn btn-info btn-bulat"  ><i class="fa fa-truck fa-3x"></i></button><br>
                                    <span>Belum Dikirimkan</span>
                                </div>
                                <div class="process-step">
                                    <button type="button" class="btn btn-info btn-bulat" ><i class="fa fa-download fa-3x"></i></button><br>
                                    <span>Belum Diterima</span>
                                </div>
                                <div class="process-step">
                                    <button type="button" class="btn btn-default btn-bulat" style="background-color: #96989a;"  ><i class="fa fa-star-o fa-3x"></i></button><br>
                                    <span>Belum Dinilai</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><hr>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-9">
                            <p style="margin-left: 20px;">Mohon melakukan pembayaran sebelum 10-01-2019 melalui Bank BNI<br>
                            (Dicek Manual) Bila tidak, pesanan ini akan dibatalkan secara otomatis.</span>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn waves-effect waves-light btn-info" style="width: 100%;"> Pesan Diterima </button><br>
                            <button type="button" class="btn waves-effect waves-light btn-outline-info" style="margin-top: 10px; width: 100%;"> Perpanjang Masa Garansi Toko </button><br>
                            <button type="button" class="btn waves-effect waves-light btn-outline-info" style="margin-top: 10px; margin-bottom: 10px; width: 100%;"> Ajukan Pengembalian </button><br>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- ============================================================== -->
            <!-- BAGIAN ATAS -->
            <!-- ============================================================== -->


            <!-- ============================================================== -->
            <!-- BAGIAN TENGAH -->
            <!-- ============================================================== -->
            <!-- <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="timeline timeline-left">
                                <li class="timeline-inverted timeline-item">
                                    <div class="timeline-badge secondary"></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span>09-01-2019 &nbsp; 14:04 &nbsp; Pesanan Dibuat</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted timeline-item">
                                    <div class="timeline-badge secondary"> </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span>09-01-2019 &nbsp; 14:58 &nbsp; Penjual telah menirima rincian pesanan anda</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted timeline-item">
                                    <div class="timeline-badge secondary"> </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span>09-01-2019 &nbsp; 23:36 &nbsp; [Bandung] shipment received by JNE Counter officer at [Garut, Kab Garut]</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted timeline-item">
                                    <div class="timeline-badge secondary"> </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span>10-01-2019 &nbsp; 00:36 &nbsp; Outbound - Manifested (Bandung)</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted timeline-item">
                                    <div class="timeline-badge info"> </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span>10-01-2019 &nbsp; 00:36 &nbsp; [Bandung] Processed at sorting center [Garut, Kab Garut]</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- ============================================================== -->
            <!-- BAGIAN TENGAH -->
            <!-- ============================================================== -->



            <!-- ============================================================== -->
            <!-- BAGIAN BAWAH -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- BAGIAN BAWAH -->
            <!-- ============================================================== -->

        </div>
        <!-- ============================================================== -->
        <!-- BAGIAN KANAN -->
        <!-- ============================================================== -->
        <div class="col-lg-2 col-md-2">
            <div class="card">
                <div class="card-body">
                    <div class="myadmin-dd dd">
                        <small>
                            <span>NO. TAGIHAN</span>
                        </small><br>
                        <h5>AN109545798736262</h5>
                        <hr>
                        <small>
                            <span>STATUS TAGIHAN</span>
                        </small><br>
                        <h5>Belum dibayar</h5>
                        <hr>
                        <small>
                            <span>METODE PEMBAYARAN</span>
                        </small><br>
                        <h5>Transfer</h5>
                        <hr>
                        <small>
                            <span>TOTAL PEMBAYARAN</span>
                        </small><br>
                        <h5>Rp999.999</h5>
                        <hr>
                        <small>
                            <span>ALAMAT PENGIRIMAN</span>
                        </small><br>
                        <span>
                            <h5>Jonathan</h5>
                            alamat lengkap<br>
                            kabupaten<br>
                            provinsi, kodepos<br>
                            telepon
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

