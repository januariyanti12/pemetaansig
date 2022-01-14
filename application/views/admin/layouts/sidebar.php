 <div class="col-md-3 left_col">
   <div class="left_col scroll-view">
     <div class="navbar nav_title" style="border: 0;">
       <a href="index.html" class="site_title"><i class="fa fa-map-marker"></i> <span>PEMTIKENAN</span></a>
     </div>

     <div class="clearfix"></div>

     <!-- menu profile quick info -->
     <div class="profile clearfix">
       <div class="profile_pic">
         <img src="<?= templates('production/images/default.jpg') ?>" alt="..." class="img-circle profile_img">
       </div>
       <div class="profile_info">
         <span><?= $this->session->nm_pengguna ?></span>
         <h2><?= $this->session->level ?></h2>
       </div>
       <div class="clearfix"></div>
     </div>
     <!-- /menu profile quick info -->

     <br />

     <!-- sidebar menu -->
     <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
       <div class="menu_section">
         <h3>General</h3>
         <ul class="nav side-menu">
           <li><a href="<?= site_url('admin/') ?>"><i class="fa fa-home"></i> Beranda</a></li>
           <?php if ($this->session->level == 'Admin') { ?>
             <li><a><i class="fa fa-table"></i> Detail Data<span class="fa fa-chevron-down"></span></a>
               <ul class="nav child_menu">
                 <li><a href="<?= site_url('admin/pengguna_kb') ?>">Data Pengguna Kb</a></li>
               </ul>
             </li>
             <li><a><i class="fa fa-bar-chart-o"></i>Data Presentase<span class="fa fa-chevron-down"></span></a>
               <ul class="nav child_menu">
                 <li><a href="<?= site_url('admin/presentase') ?>">Chart</a></li>
               </ul>
             </li>
             <li><a><i class="fa fa-map-marker"></i>Peta Sebaran Keluarga Sejahtera Kel. Desa Kapur<span class="fa fa-chevron-down"></span></a>
               <ul class="nav child_menu">
                 <li><a href="<?= site_url('admin/peta') ?>">Peta</a></li>
               </ul>
             </li>
             <li><a><i class="fa fa-folder"></i> Kelola Data Keluarga Sejahtera<span class="fa fa-chevron-down"></span></a>
               <ul class="nav child_menu">
               <li><a href="<?= site_url('admin/geografis') ?>">Data Geografis</a></li>
                 <li><a href="<?= site_url('admin/kesejahteraan') ?>">Data Keluarga Sejahtera</a></li>
                 <li><a href="<?= site_url('admin/laporan_data') ?>">laporan Data</a></li>
               </ul>
             </li>
             <li><a><i class="fa fa-folder"></i> Kelola Data User<span class="fa fa-chevron-down"></span></a>
               <ul class="nav child_menu">
                 <li><a href="<?= site_url('admin/laporan_data_user') ?>">laporan Data</a></li>
               </ul>
             </li>
           <?php } ?>

           <li><a href="<?= site_url('admin/auth/out') ?>"><i class="fa fa-sign-out"></i> Keluar</a></li>
         </ul>
       </div>
     </div>
     <!-- /sidebar menu -->

     <!-- /menu footer buttons -->
     <div class="sidebar-footer hidden-small">
       <a data-toggle="tooltip" data-placement="top" title="Settings">
         <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
       </a>
       <a data-toggle="tooltip" data-placement="top" title="FullScreen">
         <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
       </a>
       <a data-toggle="tooltip" data-placement="top" title="Lock">
         <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
       </a>
       <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
         <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
       </a>
     </div>
     <!-- /menu footer buttons -->
   </div>
 </div>