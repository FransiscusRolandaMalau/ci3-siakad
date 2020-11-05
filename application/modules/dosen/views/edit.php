<div class="card-header">
    <div class="card-title">
        <h3 class="card-label"><?= $page_header; ?>
    </div>
    <div class="card-toolbar">
        <a href="<?= base_url('dosen'); ?>" class="btn btn-light-primary font-weight-bolder mr-2">
        <i class="ki ki-long-arrow-back icon-sm"></i>Kembali</a>
    </div>
</div>
<div class="card-body">
	<?= form_open_multipart(''); ?>
		<?= form_hidden('id', $dosen->id_dosen); ?>
		<?= form_hidden('old_photo', $dosen->photo); ?>
		<div class="row">
			<div class="col-xl-2"></div>
			<div class="col-xl-8">
				<div class="my-5">
					<div class="form-group row">
						<label class="col-3">NIDN</label>
						<div class="col-9">
							<input type="text" class="form-control" name="nidn" value="<?= $dosen->nidn; ?>">
							<span class="text-danger"><?= form_error('nidn'); ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">Nama Dosen</label>
						<div class="col-9">
							<input type="text" class="form-control" name="nama_dosen" value="<?= $dosen->nama_dosen; ?>">
							<span class="text-danger"><?= form_error('nama_dosen'); ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">Jenis Kelamin</label>
						<div class="col-9">
							<select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
								<option value="Laki-laki" <?= $dosen->jenis_kelamin == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
								<option value="Perempuan" <?= $dosen->jenis_kelamin == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
							</select>
							<span class="text-danger"><?= form_error('jenis_kelamin'); ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">Alamat</label>
						<div class="col-9">
							<textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10"><?= $dosen->alamat; ?></textarea>
							<span class="text-danger"><?= form_error('alamat'); ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">Email Address</label>
						<div class="col-9">
							<input type="text" class="form-control" name="email" value="<?= $dosen->email; ?>">
							<span class="text-danger"><?= form_error('email'); ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">No.Telepon</label>
						<div class="col-9">
							<input type="text" class="form-control" name="telp" value="<?= $dosen->telp; ?>">
							<span class="text-danger"><?= form_error('telp'); ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">Foto</label>
						<div class="col-9">
							<div class="image-input image-input-outline" id="kt_image_4"">
								<div class="image-input-wrapper" style="background-image: url(<?= base_url('resources/admin/images/upload/dosen/').$dosen->photo; ?>)"></div>
								<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change Photo">
									<i class="fa fa-pen icon-sm text-muted"></i>
									<input type="file" name="photo"/>
								</label>
							</div>
						</div>
					</div>
					<input type="submit" class="btn btn-primary btn-block" value="Simpan">
				</div>
			</div>
		</div>
	<?= form_close(); ?>
</div>
