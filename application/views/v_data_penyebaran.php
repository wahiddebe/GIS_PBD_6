<?php 
        
        if ( $this->session->flashdata('pesan')) 
        {
            echo '<div class=" alert-success ">';
            echo $this->session->flashdata('pesan');
            echo '</div>';
            
        }
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="table">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Gunung</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>Latitude</th>
                                            <th>Longitude</th>
                                            <?php if ($this->session->userdata('username')<>"") { ?> 
                                            <th>Action</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; foreach ($penyebaran as $key => $value) { ?>
                                           
                                       
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value->nama_gunung ?></td>
                                            <td><?= $value->keterangan ?></td>
                                            <td><?= $value->status ?></td>
                                            <td><?= $value->latitude ?></td>
                                            <td><?= $value->longitude ?></td>
                                            <?php if ($this->session->userdata('username')<>"") { ?> 
                                            <td>
                                                <a href="<?= base_url('home/edit/'.$value->id) ?>" class="btn btn-xs btn-success">Edit</a>
                                                <a href="<?= base_url('home/delete/'.$value->id) ?>" class="btn btn-xs btn-danger">Delete</a>
                                            </td>
                                            <?php } ?>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>


            