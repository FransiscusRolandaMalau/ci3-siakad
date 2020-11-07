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
						<label class="col-3">Tahun Akademik/Semester</label>
						<div class="col-9">
							<select name="id_tahun_akademik" class="form-control" id="kt_select2_1" data-placeholder="--Pilih Tahun Akademik/Semester">
								<option></option>
								<?php foreach($get_tahun_semester as $gts) : ?>
									<option value="<?= $gts->thn_semester . '/' .$gts->semester ;?>">
										<?= $gts->thn_semester . '/' .$gts->semester ;?>
									</option>
								<?php endforeach; ?>
							</select>
							<span class="text-danger"><?= form_error('id_tahun_akademik'); ?></span>
						</div>
					</div>
					<input type="submit" class="btn btn-primary btn-block" value="Simpan">
				</div>
			</div>
		</div>
	<?= form_close(); ?>
</div>
