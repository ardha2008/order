<div class="col-lg-12">
    <div class="col-md-4"><a href="<?php echo site_url('backend/pegawai/create') ?>" class="btn btn-success btn-block"> Tambah</a></div>
    <div class="clearfix"></div><br />
    <div class="panel panel-dark">
        <div class="panel-heading"> Data Pegawai</div>
        
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Bagian</th>
                    <th>Aksi</th>
                </thead>
                
                <tbody>
                    <?php $i=1;foreach($getall as $result):?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $result->nama ?></td>
                            <td>Produksi</td>
                            <td><a href="<?php echo site_url('backend/pegawai/edit/'.$result->idpegawai) ?>" class="btn btn-block btn-blue">Update</a></td>
                        </tr>
                    <?php $i++;endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>