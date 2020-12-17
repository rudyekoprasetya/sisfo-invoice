
<ul class="nav navbar-nav side-nav">

          <li><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
             
          <li><a href="<?php echo site_url('invoice') ?>"><i class="fa fa-file"></i> Invoice</a></li>
<?php if($this->session->userdata('akses')=='admin') { ?>
          <li><a href="<?php echo site_url('admin/user') ?>"><i class="fa fa-users"></i> User</a></li>
          <li><a href="<?php echo site_url('admin/lembaga') ?>"><i class="fa fa-home"></i> Lembaga</a></li>
           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Report <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-book"></i> Rekap Invoice</a></li>
              </ul>
            </li>
<?php } ?> 
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> User Menu <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('login/profil') ?>"><i class="fa fa-lock"></i> Ubah Password</a></li>
                <li><a href="<?php echo site_url('login/logout') ?>" onclick="return confirm('Yakin Mau Keluar?');"><i class="fa fa-sign-out"></i> Log Out</a></li>
              </ul>
            </li>
</ul>