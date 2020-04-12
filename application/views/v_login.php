
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2>Admin : Login</h2>
               
                <h5>( Login sebagai Admin )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Login </strong>  
                            </div>
                            <div class="panel-body">
                                <?php
                                        
        if ( $this->session->flashdata('pesan')) 
        {
            echo '<div class=" alert-danger ">';
            echo $this->session->flashdata('pesan');
            echo '</div>';
            
        }
                                ?>
                                <?= form_open('auth/action'); ?>
                                    <br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input name="username" type="text" class="form-control" placeholder="Masukan Username " />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control"  placeholder="Masukan Password" />
                                        </div>
                                    
                                        <button type="submit" class="btn btn-success">Login</button>
                                    <hr />
                                <?= form_close(); ?>
                            </div>

                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/custom.js"></script>
   
</body>
</html>
