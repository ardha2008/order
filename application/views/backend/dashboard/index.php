<div id="sum_box" class="row mbl">
                        <?php if($this->session->userdata('hak_akses')==1){?>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel profit db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-shopping-cart"></i>
                                        </p>
                                        <h4 class="value">
                                            </span><span><?php echo $jumlah_pesan ?></span></h4>
                                        <p class="description">Jumlah Pesan</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-3">
                                <div class="panel income db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-money"></i>
                                        </p>
                                        <h4 class="value">
                                            <span>Rp. <?php echo number_format($total_untung,0,'.','.') ?></span></h4>
                                        <p class="description">Keuntungan</p>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-3">
                                <div class="panel visit db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-group"></i>
                                        </p>
                                        <h4 class="value">
                                            <span><?php echo $jumlah_customer ?></span></h4>
                                        <p class="description">Customer baru</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-3">
                                <div class="panel visit db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-print"></i>
                                        </p>
                                        <h4 class="value">
                                            <span><?php echo $jumlah_konfirmasi ?></span></h4>
                                        <p class="description">Konfirmasi baru</p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        
                        <?php if($this->session->userdata('hak_akses')==0){?>
                            <div class="col-sm-6 col-md-3">
                                <a href="<?php echo site_url('backend/list_kerja') ?>">
                                    <div class="panel task db mbm">
                                        <div class="panel-body">
                                            <p class="icon">
                                                <i class="icon fa fa-signal"></i>
                                            </p>
                                            <h4 class="value">
                                                <span><?php echo $belum_dikerjakan ?></span></h4>
                                            <p class="description">
                                                Antrian</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-sm-6 col-md-3">
                                <a href="<?php echo site_url('backend/list_kerja/riwayat') ?>">
                                <div class="panel task db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-signal"></i>
                                        </p>
                                        <h4 class="value">
                                            <span><?php echo $selesai_dikerjakan ?></span></h4>
                                        <p class="description">
                                            Task completed</p>
                                    </div>
                                </div>
                                </a>
                            </div>
                        <?php } ?>
                            
                        </div>