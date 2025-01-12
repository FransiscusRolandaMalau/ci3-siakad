<div class="card-header">
	<div class="card-title">
		<span class="card-icon">
			<i class="flaticon-interface-11 text-primary"></i>
		</span>
		<h3 class="card-label"><?= $page_header; ?></h3>
	</div>
	<div class="card-toolbar">
		<a href="<?= base_url('tahun_akademik/create'); ?>" class="btn btn-primary font-weight-bolder">
			<span class="svg-icon svg-icon-md">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<rect x="0" y="0" width="24" height="24" />
						<circle fill="#000000" cx="9" cy="15" r="6" />
						<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
					</g>
				</svg>
			</span>Tambah <?= $page_header; ?>
		</a>
	</div>
</div>
<div class="card-body">
	<table class="table table-striped- table-bordered table-hover table-checkable datatable" id="kt_datatable_2" data-url="<?= base_url('tahun_akademik/list_data'); ?>" style="margin-top: 13px !important">
        <thead>
            <tr>
				<th style="width: 1px;">#</th>
                <th>Tahun Akademik</th>
                <th>Semester</th>
                <th>Status</th>
                <th class="action" style="width: 80px;">Actions</th>
            </tr>
        </thead>
    </table>
</div>
