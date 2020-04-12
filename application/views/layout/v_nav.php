           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
					</li>
				
					
                    <li>
                        <a  href="<?= base_url() ?>"><i class="fa fa-book"></i>Pemetaan</a>
                    </li>
                      <li>
                        <a  href="<?= base_url() ?>home/tampil"><i class="fa fa-table"></i>Data Gunung </a>
                    </li>
                    <?php if ($this->session->userdata('username')<>"") { ?> 
                    
                    <li>
                        <a  href="<?= base_url() ?>home/input"><i class="fa fa-plus"></i>Input Data</a>
                    </li>
                    <?php } ?>
					<!-- <li>
                        <a  href="chart.html"><i class="fa fa-user"></i>User</a>
                    </li>		 -->
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2><?= $title ?></h2>
                        </div>
                </div>
                <!-- /. ROW  -->
                <hr />