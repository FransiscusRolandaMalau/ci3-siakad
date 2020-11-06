<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <div class="brand flex-column-auto" id="kt_brand">
        <a href="<?= site_url(); ?>" class="brand-logo">
            <img alt="Logo" src="<?= base_url('resources/admin/images/logo/logo-light.png'); ?>" alt="Logo"/>
        </a>
    </div>
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <ul class="menu-nav">
                <li class="menu-item <?= active_link_controller('dashboard'); ?>" aria-haspopup="true">
                    <a href="<?= site_url('dashboard') ?>" class="menu-link">
                        <i class="menu-icon flaticon-home"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">Menu Navigation</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
				</li>
				<li class="menu-item menu-item-submenu <?= active_link_multiple(array('prodi', 'jurusan', 'dosen', 'matakuliah', 'mahasiswa', 'tahun_akademik')); ?>" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-layers-2"></i>
                        <span class="menu-text">Master Data</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
							<li class="menu-item <?= $this->uri->segment(1) == 'prodi' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= site_url('prodi') ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Program Studi</span>
                                </a>
                            </li>
                            <li class="menu-item <?= active_link_controller('dosen'); ?>" aria-haspopup="true">
                                <a href="<?= site_url('dosen') ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Data Dosen</span>
                                </a>
							</li>
							<li class="menu-item <?= $this->uri->segment(1) == 'mahasiswa' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= site_url('mahasiswa') ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Data Mahasiswa</span>
                                </a>
                            </li>
							<li class="menu-item <?= active_link_controller('matakuliah'); ?>" aria-haspopup="true">
                                <a href="<?= site_url('matakuliah') ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Mata Kuliah</span>
                                </a>
                            </li>
							<li class="menu-item <?= $this->uri->segment(1) == 'tahun_akademik' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= site_url('tahun_akademik') ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Data Tahun Akademik</span>
                                </a>
                            </li>
                        </ul>
                    </div>
				</li>
				<li class="menu-item menu-item-submenu <?= active_link_multiple(array('input_nilai', 'cetak_transkip')); ?>" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-pen"></i>
                        <span class="menu-text">Master Nilai</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
							<li class="menu-item <?= active_link_controller('input_nilai') ?>" aria-haspopup="true">
                                <a href="<?= site_url('input_nilai') ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Input Nilai</span>
                                </a>
                            </li>
                            <li class="menu-item <?= active_link_controller('cetak_transkip') ?>" aria-haspopup="true">
                                <a href="<?= site_url('cetak_transkip') ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Cetak Transkip</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu <?= active_link_multiple(array('krs', 'khs')); ?>" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-imac"></i>
                        <span class="menu-text">Akademik</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item <?= $this->uri->segment(1) == 'krs' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= site_url('krs') ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">KRS</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'khs' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= site_url('khs') ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">KHS</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-cogwheel-1"></i>
                        <span class="menu-text">Pengaturan</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item <?= $this->uri->segment(1) == 'menu' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= site_url().'menu' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Menu</span>
                                </a>
							</li>
							<li class="menu-item <?= $this->uri->segment(1) == 'users' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= site_url().'users' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Data Pengguna</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-folder"></i>
                        <span class="menu-text">Info Kampus</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item <?= $this->uri->segment(1) == 'identitas' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= site_url().'identitas' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Identitas</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'kategori' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= site_url().'kategori' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Kategori</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'informasi-kampus' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= site_url().'informasi-kampus' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Informasi Kampus</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'tentang-kampus' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= site_url().'tentang-kampus' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Tentang Kampus</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'fasilitas' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= site_url().'fasilitas' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Fasilitas</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'materi-perkuliahan' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= site_url().'materi-perkuliahan' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Materi Perkuliahan</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'gallery' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= site_url().'gallery' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Gallery</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'kontak' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= site_url().'kontak' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Kontak</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
