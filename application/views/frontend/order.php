<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
				<div class="productinfo text-center">
				    <img src="<?php echo base_url('assets/frontend')?>/images/shop/product12.jpg" alt="" />
				        <h2>Rp. <?php echo number_format($detail->harga,0,',','.') ?></h2>
				            <p>Easy Polo Black Edition</p>
                </div>							
        </div>
        
    </div>
</div>

<div class="col-sm-8">
        <div class="signup-form"><!--sign up form-->
						<h2>Lengkapi identitas anda</h2>
						<?php echo form_open('konfirmasi') ?>
                            <input type="hidden" value="<?php $detail->idproduk ?>" name="idproduk" />
							<input type="text" name="nama" placeholder="Name"/>
							<input type="email" placeholder="Email"/>
							<input type="text" placeholder="Telepon" name="telp"/>
							<input type="text" placeholder="Alamat lengkap" name="alamat"/>
                            <button type="submit" name="order" class="btn btn-default">Order</button>
						</form>
					</div>
</div>