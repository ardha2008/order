
						
                        <?php foreach($produk as $result){?>
                            <div class="col-sm-4">
    							<div class="product-image-wrapper">
    								<div class="single-products">
    									<div class="productinfo text-center">
    										<img src="<?php echo base_url('assets/frontend')?>/images/shop/product12.jpg" alt="" />
    										<h2>Rp. <?php echo number_format($result->harga,0,',','.') ?></h2>
    										<p>Easy Polo Black Edition</p>
    										<a href="<?php echo site_url('order/'.$result->idproduk) ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Order</a>
    									</div>
    									<div class="product-overlay">
    										<div class="overlay-content">
    											<h2><?php echo $result->harga ?></h2>
    											<p>Easy Polo Black Edition</p>
    											<a href="<?php echo site_url('order/'.$result->idproduk) ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Order</a>
    										</div>
    									</div>
    								</div>
    								<div class="choose">
    									<ul class="nav nav-pills nav-justified">
    										<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
    										<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
    									</ul>
    								</div>
    							</div>
    						</div>
                        <?php } ?>				
						
						<div class="clearfix"></div>
						
						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
