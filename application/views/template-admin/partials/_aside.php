<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <div class="brand flex-column-auto" id="kt_brand">
        <a href="<?= site_url(); ?>" class="brand-logo">
            <img alt="Logo" src="<?= base_url('resources/admin/images/logo/logo-light.png'); ?>" />
		</a>
		<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
			<span class="svg-icon svg-icon svg-icon-xl">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
					viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<path
							d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
							fill="#000000" fill-rule="nonzero"
							transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
						<path
							d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
							fill="#000000" fill-rule="nonzero" opacity="0.3"
							transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
					</g>
				</svg>
			</span>
		</button>
    </div>
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
		<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <ul class="menu-nav">
                <li class="menu-item <?= active_link_controller('dashboard'); ?>" aria-haspopup="true">
					<a href="<?= site_url('dashboard') ?>" class="menu-link">
						<span class="svg-icon menu-icon svg-icon-2x">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
								viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<path
										d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 C2.99998155,19.0000663 2.99998155,19.0000652 2.99998155,19.0000642 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z"
										fill="#000000" opacity="0.3" />
									<path
										d="M13.8,12 C13.1562,12 12.4033,12.7298529 12,13.2 C11.5967,12.7298529 10.8438,12 10.2,12 C9.0604,12 8.4,12.8888719 8.4,14.0201635 C8.4,15.2733878 9.6,16.6 12,18 C14.4,16.6 15.6,15.3 15.6,14.1 C15.6,12.9687084 14.9396,12 13.8,12 Z"
										fill="#000000" opacity="0.3" />
								</g>
							</svg>
						</span>
                        <span class="menu-text">Dashboard</span>
                    </a>
				</li>
				
                <li class="menu-section">
                    <h4 class="menu-text">Menu Navigation</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
				</li>
				
				<li class="menu-item menu-item-submenu <?= active_link_multiple(array('prodi', 'jurusan', 'dosen', 'matakuliah', 'mahasiswa', 'tahun_akademik')); ?>" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
						<span class="svg-icon menu-icon svg-icon-2x">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
								viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="6" rx="1.5" />
									<rect fill="#000000" x="4" y="13" width="16" height="6" rx="1.5" />
								</g>
							</svg>
						</span>
                        <span class="menu-text">Master Data</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
							<li class="menu-item <?= active_link_controller('dosen'); ?>" aria-haspopup="true">
                                <a href="<?= site_url('dosen') ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Dosen</span>
                                </a>
							</li>
							<li class="menu-item <?= $this->uri->segment(1) == 'mahasiswa' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= site_url('mahasiswa') ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Mahasiswa</span>
                                </a>
                            </li>
							<li class="menu-item <?= $this->uri->segment(1) == 'prodi' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= site_url('prodi') ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Program Studi</span>
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
                                    <span class="menu-text">Tahun Akademik</span>
                                </a>
							</li>
							<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
								<a href="javascript:;" class="menu-link menu-toggle">
									<i class="menu-bullet menu-bullet-line">
										<span></span>
									</i>
									<span class="menu-text">Manajemen Users</span>
									<i class="menu-arrow"></i>
								</a>
								<div class="menu-submenu">
									<i class="menu-arrow"></i>
									<ul class="menu-subnav">
										<li class="menu-item" aria-haspopup="true">
											<a href="/metronic/demo1/custom/apps/chat/private.html" class="menu-link">
												<i class="menu-bullet menu-bullet-dot">
													<span></span>
												</i>
												<span class="menu-text">Users Data</span>
											</a>
										</li>
										<li class="menu-item" aria-haspopup="true">
											<a href="/metronic/demo1/custom/apps/chat/group.html" class="menu-link">
												<i class="menu-bullet menu-bullet-dot">
													<span></span>
												</i>
												<span class="menu-text">Roles</span>
											</a>
										</li>
										<li class="menu-item" aria-haspopup="true">
											<a href="/metronic/demo1/custom/apps/chat/popup.html" class="menu-link">
												<i class="menu-bullet menu-bullet-dot">
													<span></span>
												</i>
												<span class="menu-text">Permission</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
                        </ul>
                    </div>
				</li>
				<li class="menu-item menu-item-submenu <?= active_link_multiple(array('input_nilai', 'cetak_transkip')); ?>" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
						<span class="svg-icon menu-icon svg-icon-2x">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
								viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<path
										d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
										fill="#000000" opacity="0.3" />
									<path
										d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
										fill="#000000" />
									<rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1" />
									<rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1" />
								</g>
							</svg>
						</span>
                        <span class="menu-text">Laporan</span>
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
						<span class="svg-icon menu-icon svg-icon-2x">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
								viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<path
										d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z"
										fill="#000000" />
									<rect fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1" />
									<path
										d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z"
										fill="#000000" opacity="0.3" />
								</g>
							</svg>
						</span>
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
                                    <span class="menu-text">Kartu Rencana Studi</span>
                                </a>
                            </li>
                            <li class="menu-item <?= $this->uri->segment(1) == 'khs' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
                                <a href="<?= site_url('khs') ;?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Kartu Hasil Studi</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
						<span class="svg-icon menu-icon svg-icon-2x">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
								viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<path
										d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z"
										fill="#000000" fill-rule="nonzero" opacity="0.3" />
									<path
										d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
										fill="#000000" />
								</g>
							</svg>
						</span>
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
						<span class="svg-icon menu-icon svg-icon-2x">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
								viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
									<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
									<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
								</g>
							</svg>
						</span>
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
