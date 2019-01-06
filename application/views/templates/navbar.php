<ul class="sidenav" id="mobile">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
</ul>
<div class="navbar z-depth-2">
    <nav class="deep-orange accent-4">
        <div class="nav-wrapper">        
            <a href="#" data-target="mobile" class="sidenav-trigger"><i class="fas fa-bars"></i></a>			
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="<?= base_url() ?>"><i class="fa fa-home left"></i></a></li>
                <li><a class="dropdown-navbar" href="#" data-target="profil">PROFIL<i class="fa fa-caret-down tiny right"></i></a></li>				
				<li><a class="dropdown-navbar" href="#" data-target="berita">BERITA TERKINI<i class="fa fa-caret-down tiny right"></i></a></li>
				<li><a class="dropdown-navbar" href="#" data-target="pelayanan">PELAYANAN<i class="fa fa-caret-down tiny right"></i></a></li>
				<li><a class="dropdown-navbar" href="#" data-target="statistik">STATISTIK<i class="fa fa-caret-down tiny right"></i></a></li>
				<li><a class="dropdown-navbar" href="#" data-target="transparansi">TRANSPARANSI<i class="fa fa-caret-down tiny right"></i></a></li>
				<li><a class="dropdown-navbar" href="#" data-target="organisasi">ORGANISASI<i class="fa fa-caret-down tiny right"></i></a></li>
				<li><a class="dropdown-navbar" href="#" data-target="usaha">USAHA<i class="fa fa-caret-down tiny right"></i></a></li>					
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a class="waves-effect waves-light btn modal-trigger blue" href="#login">LOGIN / REGISTER<i class="fa fa-user right"></i></a></li>
            </ul>
        </div>
    </nav>
</div>


<!-- dropdown -->
<!-- #profil -->
<ul id="profil" class="dropdown-content navbar-content">
	<div class="row">
		<div class="col s12">
			<div class="col s4 det">
				<div class="left black-text col s12">
					<h5 class="flow-text">DESA SENDUK</h5>
				</div>
				<div class="col s12">
					<p>Desa Senduk merupakan salah satu desa yang berada di kecamatan Tombariri, Kabupaten Minahasa, provinsi Sulawesi Utara, Indonesia</p>
				</div>
			</div>
			<div class="col s4">
				<div class="left black-text col s12">
					<h6 class="flow-text">PROFIL DESA</h6>
				</div>
				<div class="col s12">
					<ul>
						<li><a href="<?= base_url() ?>profil/sejarah"><i class="fa fa-caret-right tiny left"></i>Sejarah</a></li>
						<li><a href="<?= base_url() ?>profil/visiMisi"><i class="fa fa-caret-right tiny left"></i>Visi Dan Misi</a></li>
						<li><a href="<?= base_url() ?>profil/gambaranDesa"><i class="fa fa-caret-right tiny left"></i>Gambaran Umum Desa</a></li>
						<li><a href="<?= base_url() ?>profil/petaDesaSenduk"><i class="fa fa-caret-right tiny left"></i>Peta Wilaya Desa Senduk</a></li>
					</ul>
				</div>
			</div>
			<div class="col s4">
				<div class="black-text col s12">
					<h6 class="flow-text">PEMERINTAHAN DESA</h6>
				</div>
				<div class="col s12">
					<ul>
						<li><a href="<?= base_url() ?>profil/kepalaDesa"><i class="fa fa-caret-right tiny left"></i>Kepala Desa</a></li>
						<li><a href="<?= base_url() ?>profil/sekertarisDesa"><i class="fa fa-caret-right tiny left"></i>Sekertaris Desa</a></li>
						<li><a href="<?= base_url() ?>profil/perangkatDesa"><i class="fa fa-caret-right tiny left"></i>Perangkat Desa</a></li>
						<li><a href="<?= base_url() ?>profil/BPD"><i class="fa fa-caret-right tiny left"></i>BPD</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</ul>