<div class="card-header">
    <div class="card-title">
        <h3 class="card-label"><?= $page_header; ?>
    </div>
</div>
<div class="card-body">
	<?= form_open(); ?>
		<div class="row">
			<div class="col-xl-2"></div>
			<div class="col-xl-8">
				<div class="my-5">
					<div class="form-group row">
						<label class="col-3">NIM</label>
						<div class="col-9">
							<input type="text" class="form-control" name="nim" value="<?= set_value('nim'); ?>" >
							<span class="text-danger"><?= form_error('nim'); ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">Semester</label>
						<div class="col-9">
							<select class="form-control" name="semester" id="semester">
								<option value="Ganjil">Ganjil</option>
								<option value="Genap">Genap</option>
							</select>
							<span class="text-danger"><?= form_error('semester'); ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">Tahun Akademik</label>
						<div class="col-9">
							<input type="text" class="form-control" name="tahun_akademik" id="kt_inputmask_4" value="<?= set_value('tahun_akademik'); ?>">
							<span class="form-text text-muted">Format Tahun Akademik: <code>0000/0000</code></span>
							<span class="text-danger"><?= form_error('tahun_akademik'); ?></span>
						</div>
					</div>
					<input type="submit" class="btn btn-primary btn-block" value="Simpan">
				</div>
			</div>
		</div>
	<?= form_close(); ?>
</div>
