<div class="card-header">
    <div class="card-title">
        <h3 class="card-label"><?= $page_header; ?>
    </div>
    <div class="card-toolbar">
        <a href="<?= base_url().'jurusan'; ?>" class="btn btn-light-primary font-weight-bolder mr-2">
        <i class="ki ki-long-arrow-back icon-sm"></i>Kembali</a>
    </div>
</div>
<div class="card-body">
	<?= form_open('jurusan/edit/'.$jurusan->id_jurusan); ?>
		<?= form_hidden('id_jurusan', $jurusan->id_jurusan); ?>
		<div class="row">
			<div class="col-xl-2"></div>
			<div class="col-xl-8">
				<div class="my-5">
					<div class="form-group row">
						<label class="col-3">Kode Jurusan</label>
						<div class="col-9">
							<input type="text" class="form-control" name="kode_jurusan" value="<?= $jurusan->kode_jurusan ;?>">
							<span class="text-danger"><?= form_error('kode_jurusan'); ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">Nama Jurusan</label>
						<div class="col-9">
							<input type="text" class="form-control" name="nama_jurusan" value="<?= $jurusan->nama_jurusan ;?>">
							<span class="text-danger"><?= form_error('nama_jurusan'); ?></span>
						</div>
					</div>
					<input type="submit" class="btn btn-primary btn-block" value="Update">
				</div>
			</div>
		</div>
	<?= form_close(); ?>
</div>
