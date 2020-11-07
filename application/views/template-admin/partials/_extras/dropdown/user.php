<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
	<div class="d-flex align-items-center p-8 rounded-top">
		<div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
			<img src="<?= base_url() ;?>resources/admin/images/avatar/<?= $this->session->userdata['profile_photo']; ?>"
				alt="Profile Images">
		</div>
		<div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5"><?= $this->session->userdata['name']; ?></div>
	</div>
	<div class="separator separator-solid"></div>
	<div class="navi navi-spacer-x-0 pt-5">
		<a href="" class="navi-item px-8">
			<div class="navi-link">
				<div class="navi-icon mr-2">
					<i class="flaticon2-calendar-3 text-success"></i>
				</div>
				<div class="navi-text">
					<div class="font-weight-bold">Profil Saya</div>
					<div class="text-muted">Pengaturan akun dan banyak lagi</div>
				</div>
			</div>
		</a>
		<div class="navi-separator mt-3"></div>
		<div class="navi-footer px-8 py-5">
			<button class="btn btn-light-primary btn-block font-weight-bold" data-toggle="modal" data-target="#logout">
				Logout
			</button>
		</div>
	</div>
</div>
