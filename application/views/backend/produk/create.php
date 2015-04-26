<div class="col-lg-6">
                                        <div class="panel panel-yellow">
                                            <div class="panel-heading">
                                                <i class="fa fa-plus"></i> Create Produk</div>
                                            <div class="panel-body pan">
                                                <?php echo form_open_multipart('backend/produk/store',array('class'=>'form-horizontal')) ?>
                                                <div class="form-body pal">
                                                    <?php if($this->session->tempdata('success')==true){?><div class="alert alert-success">Berhasil menambahkan data baru</div><?php } ?><br />
                                                    <?php echo $this->session->tempdata('error') ?>
                                                    <div class="form-group">
                                                        <label for="inputName" class="col-md-3 control-label">
                                                            Nama</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <input id="inputName" name="nama" type="text" placeholder="" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="inputName" class="col-md-3 control-label">
                                                            Deskripsi</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <textarea class="deskripsi" class="form-control" rows="5" cols="54"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">
                                                            Images</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <input type="file" class="form-control" name="userfile" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="form-group">
                                                        <label for="inputName" class="col-md-3 control-label">
                                                            Estimasi</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <input id="inputName" name="estimasi" type="text" placeholder="" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="inputName" class="col-md-3 control-label">
                                                            Harga</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <input id="inputName" name="harga" type="text" placeholder="" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                
                                                <div class="form-actions pal">
                                                    <div class="form-group mbn">
                                                        <div class="col-md-offset-3 col-md-6">
                                                            <a href="#" class="btn btn-primary">Kembali</a>&nbsp;&nbsp;
                                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php echo form_close() ?>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    
<div class="col-lg-6">
    <div class="panel panel-dark">
        <div class="panel-heading">Data terakhir</div>
        
        <div class="panel-body">
                <table class="table table-bordered">
                <thead>
                        <tr>
                        <th>#</th>
                        <th>Nama </th>
                        <th>Harga </th>
                        <th>Estimasi </th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                            
                <tbody>
                            <?php $i=1;foreach($last as $result){?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $result->nama ?></td>
                                    <td><?php echo $result->harga ?></td>
                                    <td><?php echo $result->estimasi ?></td>
                                    <td><button class="btn btn-danger btn-block"><i class="fa fa-trash"></i> Delete</button></td>
                                </tr>
                            <?php $i++; } ?>
                        </tbody>
            </table>
        </div>
    </div>
</div>