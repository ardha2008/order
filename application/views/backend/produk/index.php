<div class="col-lg-4">
    <a href="<?php echo site_url('backend/produk/create') ?>" class="btn btn-success btn-block"><i class="glyphicon-plus"></i> Tambah</a>    
</div>

<div class="clearfix"></div><br />

<div class="col-lg-12">
    <div class="panel panel-dark">
        <div class="panel-heading">Master Data Produk</div>
        
        <div class="panel-body">
         <?php if($this->session->tempdata('success')==true){?><div class="alert alert-danger">Data berhasil dihapus</div><?php } ?><br />
                                                  
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
                    <?php $i=1;foreach($getall as $result){?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $result->nama ?></td>
                            <td><?php echo $result->harga ?></td>
                            <td><?php echo $result->estimasi ?></td>
                            <td><a href="<?php echo site_url('backend/produk/edit/'.$result->idproduk) ?>" class="btn btn-blue btn-block"> Update</a><a href="<?php echo site_url('backend/produk/delete/'.$result->idproduk) ?>" class="btn btn-danger btn-block"> Delete</a></td>
                        </tr>
                    <?php $i++; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>