<div class="col-lg-6">
                                        
                                        <div class="panel panel-orange">
                                            <div class="panel-heading">
                                                Perbarui data pegawai</div>
                                            <div class="panel-body pan">
                                            <?php if($this->session->tempdata('success')==true){?><div class="alert alert-success">Berhasil memperbarui data </div><?php } ?><br />
                                                    
                                                <?php echo form_open('backend/pegawai/store') ?>
                                                <div class="form-body pal">
                                                    
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-user"></i>
                                                            <input id="inputName" name="username" type="text" placeholder="Username" class="form-control" /></div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-envelope"></i>
                                                            <input id="inputEmail" name="email" type="text" placeholder="Email address" class="form-control" /></div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-lock"></i>
                                                            <input id="inputPassword" name="password" type="password" placeholder="Password" class="form-control" /></div>
                                                    </div>
                                                    
                                                   <!-- TODO:  <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-lock"></i>
                                                            <input id="inputConfirmPassword" type="password" name="password2" placeholder="Confirm Password" class="form-control" /></div>
                                                    </div> -->
                                                    <hr />
                                                    
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input id="inputFirstName" name="nama" type="text" placeholder="Nama" class="form-control" /></div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <select name="hak_akses" class="form-control">
                                                            
                                                            <option value="0" selected="">Pegawai</option>
                                                            <option value="1">Owner</option>
                                                            <option value="2">Superadmin</option>
                                                        </select></div>
                                                        
                                                </div>
                                                
                                                <div class="form-actions text-right pal">
                                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        
                                    </div>