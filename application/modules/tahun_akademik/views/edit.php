<div class="card-header">
    <div class="card-title">
        <h3 class="card-label"><?= $page_header; ?>
    </div>
    <div class="card-toolbar">
        <a href="<?= base_url('tahun_akademik'); ?>" class="btn btn-light-primary font-weight-bolder mr-2">
        <i class="ki ki-long-arrow-back icon-sm"></i>Kembali</a>
    </div>
</div>
<div class="card-body">
	<?= form_open(); ?>
		<?= form_hidden('id', $tahun_akademik->id); ?>
		<div class="row">
			<div class="col-xl-2"></div>
			<div class="col-xl-8">
				<div class="my-5">
				<div class="form-group row">
						<label class="col-3">Tahun Akademik</label>
						<div class="col-9">
							<input type="text" class="form-control" name="tahun_akademik" id="kt_inputmask_4" value="<?= $tahun_akademik->tahun_akademik; ?>">
							<span class="form-text text-muted">Format Tahun Akademik: <code>0000/0000</code></span>
							<span class="text-danger"><?= form_error('tahun_akademik'); ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">Semester</label>
						<div class="col-9">
							<select class="form-control" name="semester" id="semester">
								<option value="Ganjil" <?= ($tahun_akademik->semester == 'Ganjil') ? 'selected' : ''?>>Ganjil</option>
								<option value="Genap" <?= ($tahun_akademik->semester == 'Genap') ? 'selected' : ''?>>Genap</option>
							</select>
							<span class="text-danger"><?= form_error('semester'); ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">Status</label>
						<div class="col-9">
							<select class="form-control" name="status" id="status">
								<option value="0" <?= ($tahun_akademik->status) == '0' ? 'selected' : '' ?>>Non Aktif</option>
								<option value="1" <?= ($tahun_akademik->status) == '1' ? 'selected' : '' ?>>Aktif</option>
							</select>
							<span class="text-danger"><?= form_error('status'); ?></span>
						</div>
					</div>
					<input type="submit" class="btn btn-primary btn-block" value="Simpan">
				</div>
			</div>
		</div>
	<?= form_close(); ?>
</div>
