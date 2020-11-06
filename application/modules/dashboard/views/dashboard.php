<div class="row">
	<div class="col-xl-3">
		<div class="card card-custom bgi-no-repeat card-stretch gutter-b"
			style="background-position: right top; background-size: 30% auto; background-image: url(/metronic/theme/html/demo1/dist/assets/media/svg/shapes/abstract-1.svg)">
			<div class="card-body">
				<i class="flaticon2-indent-dots icon-lg text-info"></i>
				<span class="card-title font-weight-bolder text-dark-75 font-size-h1 mb-0 mt-6 d-block">
					<?= $prodi ?>
				</span>
				<span class="font-weight-bold text-muted font-size-sm">Jumlah Program Studi</span>
			</div>
		</div>
	</div>
	<div class="col-xl-3">
		<div class="card card-custom bg-info card-stretch gutter-b">
			<div class="card-body">
				<i class="flaticon-time-2 icon-lg text-white"></i>
				<span class="card-title font-weight-bolder text-white font-size-h1 mb-0 mt-6 d-block">
					<?= $matakuliah ?>
				</span>
				<span class="font-weight-bold text-white font-size-sm">Jumlah Mata Kuliah</span>
			</div>
		</div>
	</div>
	<div class="col-xl-3">
		<div class="card card-custom bg-danger card-stretch gutter-b">
			<div class="card-body">
				<i class="flaticon2-group icon-lg text-white"></i>
				<span class="card-title font-weight-bolder text-white font-size-h1 mb-0 mt-6 d-block">
						<?= $mahasiswa ?>
				</span>
				<span class="font-weight-bold text-white font-size-sm">Jumlah Mahasiswa</span>
			</div>
		</div>
	</div>
	<div class="col-xl-3">
		<div class="card card-custom bg-dark card-stretch gutter-b">
			<div class="card-body">
				<i class="flaticon2-avatar icon-lg text-white"></i>
				<span class="card-title font-weight-bolder text-white font-size-h1 mb-0 mt-6 d-block">
					<?= $dosen ?>
				</span>
				<span class="font-weight-bold text-white font-size-sm">Jumlah Dosen</span>
			</div>
		</div>
	</div>
</div>
<!-- <div class="alert alert-success mb-5 p-5" role="alert">
    <h4 class="alert-heading">Selamat Datang!</h4>
    <p>Selamat datang <strong><?= $this->session->userdata['name']; ?></strong> di Sistem Informasi Akademik Universitas CKI Indonesia, Anda login sebagai <strong><?= $this->session->userdata['level']; ?></strong>.</p>
</div> -->
