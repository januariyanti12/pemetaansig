<header class="header_area">
  <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container box_1620">
        <div class="navbar-brand logo_h">
          <img src="<?= base_url('assets/images/icons/logo.png') ?>" style="width: 40px;float:left;margin-top:5px;margin-right: 5px">
          <h1 class="text-danger m-0 p-0" style="font-size: 30px"><a href="<?= site_url('') ?>">PEMTIKENAN</a></h1>
          <p class="m-0 p-0" style="font-size: 14px;margin-top:-5px !important">Kel.Desa Kapur</p>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">

          <ul class="nav navbar-nav menu_nav justify-content-end">
            <li class="nav-item active"><a class="nav-link" href="<?= site_url('') ?>">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= site_url('website/berandauser') ?>">Informasi</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= site_url('website/presentaseuser') ?>">Presentase</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= site_url('website/leafletstandar') ?>">Peta Sebaran</a>
            <li class="nav-item submenu dropdown">
            </li>
            <li class="nav-item submenu dropdown">
            </li>
          </ul>


          <div class="nav-right text-center text-lg-right py-4 py-lg-0">
            <a class="button" href="<?= site_url('admin') ?>">Log In</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>