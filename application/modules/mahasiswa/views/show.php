<div class="card-header">
    <div class="card-title">
        <h3 class="card-label"><?= $page_header; ?>
    </div>
    <div class="card-toolbar">
        <a href="<?= base_url('mahasiswa'); ?>" class="btn btn-light-primary font-weight-bolder mr-2">
        <i class="ki ki-long-arrow-back icon-sm"></i>Kembali</a>
    </div>
</div>
<div class="card-body">
	<?= form_open(''); ?>	
		<?= form_hidden('id', $mahasiswa->id); ?>
		<div class="row">
			<div class="col-xl-2"></div>
			<div class="col-xl-8">
				<div class="my-5">
					<div class="form-group row">
						<label class="col-5 font-weight-bolder">Foto</label>
						<div class="col-7">
							<div class="image-input image-input-outline" id="kt_image_4"">
								<div class="image-input-wrapper" style="background-image: url(<?= base_url('resources/admin/images/upload/mahasiswa/').$mahasiswa->photo; ?>)"></div>
							</div>
						</div>
						<label class="col-5 font-weight-bolder">NIM</label>
						<div class="col-7">
							<p class="font-weight-normal" name="nim" >:&nbsp; <?= $mahasiswa->nim; ?></p>
						</div>
						<label class="col-5 font-weight-bolder">Nama Lengkap</label>
						<div class="col-7">
							<p class="font-weight-normal" name="nama_lengkap" >:&nbsp; <?= $mahasiswa->nama_lengkap; ?></p>
						</div>
						<label class="col-5 font-weight-bolder">Jenis Kelamin</label>
						<div class="col-7">
							<p class="font-weight-normal" name="nama_lengkap" >:&nbsp; <?= ($mahasiswa->jenis_kelamin == 'Laki-laki') ? 'Laki-laki' : 'Perempuan'; ?></p>
						</div>
						<label class="col-5 font-weight-bolder">Email</label>
						<div class="col-7">
							<p class="font-weight-normal" name="email" >:&nbsp; <?= $mahasiswa->email; ?></p>
						</div>
						<label class="col-5 font-weight-bolder">No.Telepon</label>
						<div class="col-7">
							<p class="font-weight-normal" name="telepon" >:&nbsp; <?= $mahasiswa->telepon; ?></p>
						</div>
						<label class="col-5 font-weight-bolder">Alamat</label>
						<div class="col-7">
							<p class="font-weight-normal" name="alamat" >:&nbsp; <?= $mahasiswa->alamat; ?></p>
						</div>
						<label class="col-5 font-weight-bolder">Tempat/Tanggal Lahir</label>
						<div class="col-7">
							<p class="font-weight-normal" name="tempat_lahir" >:&nbsp; <?= $mahasiswa->tempat_lahir . '/' . tanggal_indonesia($mahasiswa->tanggal_lahir); ?></p>
						</div>
						<label class="col-5 font-weight-bolder">Nama Prodi</label>
						<div class="col-7">
							<p class="font-weight-normal" name="alamat" >:&nbsp; <?= $mahasiswa->nama_prodi; ?></p>
						</div>
						<label class="col-5 font-weight-bolder">Status Mahasiswa</label>
						<div class="col-7">
							<p class="font-weight-normal" name="status_mahasiswa" >:&nbsp; <?= ($mahasiswa->status_mahasiswa == '0') ? 'Belum Lulus' : 'Lulus'; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?= form_close(); ?>
</div>
