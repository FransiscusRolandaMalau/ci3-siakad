<div class="card-header">
    <div class="card-title">
        <h3 class="card-label"><?= $page_header; ?>
    </div>
    <div class="card-toolbar">
        <a href="<?= base_url('matakuliah'); ?>" class="btn btn-light-primary font-weight-bolder mr-2">
        <i class="ki ki-long-arrow-back icon-sm"></i>Kembali</a>
    </div>
</div>
<div class="card-body">
	<?= form_open(); ?>
		<?= form_hidden('id', $matakuliah->id_matakuliah); ?>
		<div class="row">
			<div class="col-xl-2"></div>
			<div class="col-xl-8">
				<div class="my-5">
					<div class="form-group row">
						<label class="col-3">Kode Mata Kuliah</label>
						<div class="col-9">
							<input type="text" class="form-control" name="kode_matakuliah" value="<?= $matakuliah->kode_matakuliah; ?>">
							<span class="text-danger"><?= form_error('kode_matakuliah'); ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">Nama Mata Kuliah</label>
						<div class="col-9">
							<input type="text" class="form-control" name="nama_matakuliah" value="<?= $matakuliah->nama_matakuliah; ?>">
							<span class="text-danger"><?= form_error('nama_matakuliah'); ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">SKS</label>
						<div class="col-9">
							<input type="text" class="form-control" name="sks" value="<?= $matakuliah->sks; ?>">
							<span class="text-danger"><?= form_error('sks'); ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">Semester</label>
						<div class="col-9">
							<input type="text" class="form-control" name="semester" value="<?= $matakuliah->semester; ?>">
							<span class="text-danger"><?= form_error('semester'); ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">Nama Prodi</label>
						<div class="col-9">
							<select name="nama_prodi" class="form-control" id="kt_select2_1" data-placeholder="--Pilih Prodi">
								<?php foreach ($program_studi as $prodi) : ?>
									<option value="<?= $prodi['nama_prodi'] ;?>"
										<?php if ($prodi['nama_prodi'] == ($matakuliah->nama_prodi)): ?>
											selected
										<?php endif; ?>
									><?= $prodi['nama_prodi'] ;?></option>
								<?php endforeach; ?>
							</select>
							<span class="text-danger"><?= form_error('nama_prodi'); ?></span>
						</div>
					</div>
					<input type="submit" class="btn btn-primary btn-block" value="Simpan">
				</div>
			</div>
		</div>
	<?= form_close(); ?>
</div>
