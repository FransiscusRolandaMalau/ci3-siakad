<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <div class="brand flex-column-auto" id="kt_brand">
        <a href="}" class="brand-logo">
            <img alt="Logo" src="<?= base_url() ;?>public/img/logo-light.png"/>
        </a>
    </div>
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <ul class="menu-nav">
                <li class="menu-item <?= $this->uri->segment(1) == 'dashboard' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                    <a href="<?= base_url().'dashboard' ;?>" class="menu-link">
                        <i class="menu-icon flaticon-home"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">Menu Akademik</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-imac"></i>
                        <span class="menu-text">Akademik</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item <?= $this->uri->segment(1) == 'jurusan' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'jurusan' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Jurusan</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'program-studi' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'program-studi' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Program Studi</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'mata-kuliah' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'mata-kuliah' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Mata Kuliah</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'mahasiswa' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'mahasiswa' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Mahasiswa</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'tahun-akademik' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'tahun-akademik' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Tahun Akademik</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'krs' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'krs' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">KRS</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'input-nilai' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'input-nilai' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Input Nilai</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'khs' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'khs' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">KHS</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'cetak-transkip' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'cetak-transkip' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Cetak Transkip</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'dosen' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'dosen' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Dosen</span>
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
                            <li class="menu-item <?= $this->uri->segment(1) == 'users' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'users' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Users</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'menu' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'menu' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Menu</span>
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
                                <a href="<?= base_url().'identitas' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Identitas</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'kategori' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'kategori' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Kategori</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'informasi-kampus' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'informasi-kampus' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Informasi Kampus</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'tentang-kampus' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'tentang-kampus' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Tentang Kampus</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'fasilitas' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'fasilitas' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Fasilitas</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'materi-perkuliahan' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'materi-perkuliahan' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Materi Perkuliahan</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'gallery' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'gallery' ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Gallery</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'kontak' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= base_url().'kontak' ;?>" class="menu-link">
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
