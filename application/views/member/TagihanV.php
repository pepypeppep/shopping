<?php
$sub_total = 0;
$total_diskon = 0;
foreach ($keranjang as $ker) {
    if($ker->discount != 0){
        $diskon_harga = ($ker->discount/100*$ker->salePrice)*$ker->quantity;
        $harga = $ker->price;
    }else{
        $harga = $ker->price;
        $diskon_harga = 0;
    }
    $total = $ker->quantity*$ker->salePrice;
    $sub_total = $sub_total+$total;
    $total_diskon = $total_diskon+$diskon_harga;
}
// print_r($keranjang);
?>
<div class="card">
	<div class='card-body'>
		<div class='container_page'>
			<div class='page'>
                <h3>Checkout</h3>
                <div class="row">
                    <div class="col-md-6">
                        <label class="m-t-20">Pilih Kurir :</label><br>
                        <select class="select2 form-control custom-select" >
                            <option>Pilih Kurir </option>
                            <?php
                                foreach ($kurirs as $kurir) {
                                    ?>
                                    <option value="<?php echo $kurir->courierID;?>"><?php echo $kurir->courierName;?></option>
                                    <?php
                                }
                            ?>
                        </select><br>

                        <label class="m-t-20">Catatan Tambahan :</label><br>
                        <textarea class="form-control" maxlength="200" style="height: 150px;" name="note" id="note"></textarea>
                        <p class="text-right">200 karakter</p>
                        
                        <div class="card border-info">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Alamat Pengiriman</h4>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Alamat Kantor</h5>
                                <p class="card-text">Graha KAS (Lantai 3 PT.Arnawa),Kota Jakarta Selatan</p>
                                <p class="card-text">Kecamatan Kebayoran Baru, Kota Jakarta Selatan</p>
                                <p class="card-text">DKI Jakarta</p>
                                <p class="card-text">081269305494</p>
                                <a href="<?php echo site_url('pengaturan_profile#navpills-2')?>" class="btn btn-info">Pilih ALamat Lain</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card border-info" style="margin-top: 50px;">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Ringkasan Pemesanan</h4></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <h5 class="card-title">Total Harga</h5>
                                        <h5 class="card-title">Biaya Kirim</h5>
                                        <h5 class="card-title">Total Belanja</h5>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <h5 class="card-title"><?php echo "&nbsp;".number_format(($sub_total),0,",","."); ?></h5>
                                        <h5 class="card-title"><?php echo "&nbsp".number_format(($total_diskon),0,",","."); ?></h5>
                                        <h5 class="card-title"><?php $grand_total = $sub_total-$total_diskon; echo "&nbsp".number_format(($grand_total),0,",","."); ?></h5>
                                    </div>
                                    <div>
                                        <a href="<?php echo site_url('CobaC/metodepembayaran')?>" class="btn btn-info" style="width: 250px;">Lanjut Pembayaran</a> 
                                        <a href="<?php echo site_url('CobaC/metodepembayaran')?>"><span class="text-right"> Gunakan Kode Voucher ? </span></a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>