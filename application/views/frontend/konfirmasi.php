<div class="col-sm-6">
    <h3><?php echo $data['nama'] ?></h3>
        <p><?php echo $data['email'] ?></p>
        <p><?php echo $data['telp'] ?></p>
        <p><?php echo $data['alamat'] ?></p>
    <hr />
</div>

<div class="col-sm-12">
        <section id="cart_items">
    			<div class="review-payment">
    				<h2>Pemesanan</h2>
    			</div>
    
    			<div class="table-responsive cart_info">
    				<table class="table table-condensed">
    					<thead>
    						<tr class="cart_menu">
    							<td class="image">Produk</td>
    							<td class="description"></td>
    							<td class="price">Harga</td>
    							<td class="total">Total</td>
    						</tr>
    					</thead>
    					<tbody>
    						<tr>
    							<td class="cart_product">
    								<a href=""><img width="100" height="100" src="<?php echo base_url('assets/produk/'.$produk->image) ?>" alt=""></a>
    							</td>
    							<td class="cart_description">
    								<h4><?php echo $produk->nama ?></h4>
    							</td>
                                
    							<td class="cart_price">
    								<p>Rp. <?php echo number_format($produk->harga,0,'.','.') ?></p>
    							</td>
    							
    							<td class="cart_total">
    								<p class="cart_total_price">Rp. <?php echo number_format($produk->harga,0,'.','.') ?></p>
    							</td>
    						</tr>
                            
                            <tr>
							<td colspan="2">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Total</td>
										<td><span>Rp. <?php echo number_format($produk->harga,0,'.','.') ?></span></td>
									</tr>
								</table>
							</td>
						</tr>
    
    					</tbody>
    				</table>
    			</div>
    	</section>
<?php echo form_open('complete') ?>
    <button class="btn btn-default" name="konfirmasi">Konfirmasi</button>
<?php echo form_close() ?>
</div>