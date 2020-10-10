<div class="alert alert-success mb-5 p-5" role="alert">
    <h4 class="alert-heading">Selamat Datang!</h4>
    <p>Selamat datang <strong><?= $this->session->userdata['name']; ?></strong> di Sistem Informasi Akademik Universitas CKI Indonesia, Anda login sebagai <strong><?= $this->session->userdata['level']; ?></strong>.</p>
    <div class="border-bottom border-white opacity-20 mb-5"></div>
    <button href="#" class="btn btn-light mb-0" data-toggle="modal" data-target="#exampleModal">
		<i class="flaticon-cogwheel-1"></i> Control Panel
	</button>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="flaticon-cogwheel-1"></i> Control Panel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
					<div class="col-md-3 text-info text-center">
						<a href="<?= base_url() ;?>"><p class="nav-link text-muted">Mahasiswa</p>
							<i class="text-success fa fa-user-graduate icon-4x"></i>
						</a>
					</div>
					<div class="col-md-3 text-info text-center">
						<a href="<?= base_url() ;?>"><p class="nav-link text-muted">Tahun Akademik</p>
							<i class="text-success fa fa-calendar-alt icon-4x"></i>
						</a>
					</div>
					<div class="col-md-3 text-info text-center">
						<a href="<?= base_url() ;?>"><p class="nav-link text-muted">KRS</p>
							<i class="text-success fa fa-edit icon-4x"></i>
						</a>
					</div>
					<div class="col-md-3 text-info text-center">
						<a href="<?= base_url() ;?>"><p class="nav-link text-muted">KHS</p>
							<i class="text-success fa fa-file-alt icon-4x"></i>
						</a>
					</div>
				</div><hr>
                <div class="row">
					<div class="col-md-3 text-info text-center">
						<a href="<?= base_url() ;?>"><p class="nav-link text-muted">Input Nilai</p>
							<i class="text-success fa fa-sort-numeric-down icon-4x"></i>
						</a>
					</div>
					<div class="col-md-3 text-info text-center">
						<a href="<?= base_url() ;?>"><p class="nav-link text-muted">Cetak Transkip</p>
							<i class="text-success fa fa-print icon-4x"></i>
						</a>
					</div>
					<div class="col-md-3 text-info text-center">
						<a href="<?= base_url() ;?>"><p class="nav-link text-muted">Kategori</p>
							<i class="text-success fa fa-list-ul icon-4x"></i>
						</a>
					</div>
					<div class="col-md-3 text-info text-center">
						<a href="<?= base_url() ;?>"><p class="nav-link text-muted">Info Kampus</p>
							<i class="text-success fa fa-bullhorn icon-4x"></i>
						</a>
					</div>
				</div><hr>
                <div class="row">
					<div class="col-md-3 text-info text-center">
						<a href="<?= base_url() ;?>"><p class="nav-link text-muted">Identitas</p>
							<i class="text-success fa fa-id-card-alt icon-4x"></i>
						</a>
					</div>
					<div class="col-md-3 text-info text-center">
						<a href="<?= base_url() ;?>"><p class="nav-link text-muted">Tentang Kampus</p>
							<i class="text-success fa fa-info-circle icon-4x"></i>
						</a>
					</div>
					<div class="col-md-3 text-info text-center">
						<a href="<?= base_url() ;?>"><p class="nav-link text-muted">Fasilitas</p>
							<i class="text-success fa fa-laptop icon-4x"></i>
						</a>
					</div>
					<div class="col-md-3 text-info text-center">
						<a href="<?= base_url() ;?>"><p class="nav-link text-muted">Gallery</p>
							<i class="text-success fa fa-image icon-4x"></i>
						</a>
					</div>
				</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
