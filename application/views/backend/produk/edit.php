<div class="col-lg-6">
                                        <div class="panel panel-yellow">
                                            <div class="panel-heading">
                                                <i class="fa fa-plus"></i> Create Produk</div>
                                            <div class="panel-body pan">
                                                <?php echo form_open_multipart('backend/produk/update/'.$getdata->idproduk,array('class'=>'form-horizontal')) ?>
                                                <div class="form-body pal">
                                                    <?php if($this->session->tempdata('success')==true){?><div class="alert alert-success">Berhasil perbarui data</div><?php } ?><br />
                                                    <?php echo $this->session->tempdata('error') ?>
                                                    <div class="form-group">
                                                        <label for="inputName" class="col-md-3 control-label">
                                                            Nama</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <input id="inputName" value="<?php echo $getdata->nama ?>" name="nama" type="text" placeholder="" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="inputName" class="col-md-3 control-label">
                                                            Deskripsi</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <textarea class="deskripsi" class="form-control" rows="5" cols="54"><?php echo $getdata->deskripsi ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- BUG: <div class="form-group">
                                                        <label class="col-md-3 control-label">
                                                            Images</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <input type="file" class="form-control" name="userfile" />
                                                                <input type="hidden" name="new_userfile" value="<?php echo $getdata->image ?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 -->
                                                    <div class="form-group">
                                                        <label for="inputName" class="col-md-3 control-label">
                                                            Estimasi</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <input id="inputName" name="estimasi" type="text" placeholder="" value="<?php echo $getdata->estimasi ?>" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="inputName" class="col-md-3 control-label">
                                                            Harga</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <input id="inputName" name="harga" type="text" placeholder="" class="form-control" value="<?php echo $getdata->harga ?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                
                                                <div class="form-actions pal">
                                                    <div class="form-group mbn">
                                                        <div class="col-md-offset-3 col-md-6">
                                                            <a href="<?php echo site_url('backend/produk') ?>" class="btn btn-primary">Kembali</a>&nbsp;&nbsp;
                                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php echo form_close() ?>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>