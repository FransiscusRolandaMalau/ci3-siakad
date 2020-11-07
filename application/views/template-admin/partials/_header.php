<div id="kt_header" class="header">
	<div class="container-fluid d-flex align-items-stretch justify-content-between">
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
			<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
				<ul class="menu-nav">
					<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
						<form class="d-flex flex-center py-2 px-6 bg-white rounded">
							<span class="svg-icon svg-icon-lg svg-icon-primary">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
									height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path
											d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
											fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path
											d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
											fill="#000000" fill-rule="nonzero" />
									</g>
								</svg>
							</span>
							<input type="text" class="form-control border-0 font-weight-bold pl-2" placeholder="Search Goods" />
						</form>
					</li>
				</ul>
			</div>
        </div>
        <div class="topbar">
            <div class="dropdown">
				<div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
					<div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2">
						<span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
						<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"><?= $this->session->userdata['name']; ?></span>
						<span class="symbol symbol-35 symbol-light-success">
							<img src="<?= base_url() ;?>resources/admin/images/avatar/<?= $this->session->userdata['profile_photo']; ?>" alt="Profile Images">
						</span>
					</div>
				</div>
                <?php $this->load->view('template-admin/partials/_extras/dropdown/user') ;?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Ready to Leave?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<div class="modal-body">
				<p>Select "Logout" below if you are ready to end your current session.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<a href="<?= site_url('auth/logout'); ?>" class="btn btn-primary">Logout</a>
			</div>
		</div>
    </div>
</div>
