<?php defined('BASEPATH') OR exit('No direct script access allowed');
	require_once './mix.php';
	require_once './vendor/autoload.php';
	if (!isset($this->session->userdata['username'])) {
		$this->session->set_flashdata('flash', 'Kamu belum login!');
		redirect(base_url().'auth/login');
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8" />
		<title><?= $title ?> - Sistem Informasi Akademik</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->

		<!--begin::Page Vendors Styles(used by this page)-->
		<!--end::Page Vendors Styles-->		

		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?= base_url(mix('admin/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url(mix('admin/plugins/custom/prismjs/prismjs.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url(mix('admin/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->

		<!--begin::Layout Themes(used by all pages)-->
		<link href="<?= base_url(mix('admin/css/themes/layout/header/base/light.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url(mix('admin/css/themes/layout/header/menu/light.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url(mix('admin/css/themes/layout/brand/dark.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url(mix('admin/css/themes/layout/aside/dark.css')); ?>" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		
		<!--begin::Favicon-->
		<link rel="shortcut icon" href="/metronic/theme/html/demo1/dist/assets/media/logos/favicon.ico" />
		<!--end::Favicon-->
	</head>
	<body id="kt_body" class="header-static aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<?php $this->load->view('template-admin/partials/header-mobile') ;?>
        <div class="d-flex flex-column flex-root">
            <div class="d-flex flex-row flex-column-fluid page">
				<?php $this->load->view('template-admin/partials/aside') ;?>
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<?php $this->load->view('template-admin/partials/header') ;?>
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <div class="d-flex flex-column-fluid">
                            <div class="container">
								<div class="card card-custom card-sticky" id="kt_page_sticky_card">
									<?= $content ;?>
								</div>
                            </div>
                        </div>
                     </div>
					<?php $this->load->view('template-admin/partials/footer') ;?>
                </div>
            </div>
        </div>

		<!--begin::Global Config(global config for global JS scripts)-->
		<script type="text/javascript" src="<?= base_url(mix('admin/js/config.js')); ?>"></script>
		<!--end::Global Config-->
		
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script type="text/javascript" src="<?= base_url(mix('admin/plugins/global/plugins.bundle.js')); ?>"></script>
		<script type="text/javascript" src="<?= base_url(mix('admin/plugins/custom/prismjs/prismjs.bundle.js')); ?>"></script>
		<script type="text/javascript" src="<?= base_url(mix('admin/js/scripts.bundle.js')); ?>"></script>
		<!--end::Global Theme Bundle-->

		<!--begin::Page Vendors(used by this page)-->
		<!--end::Page Vendors-->
	</body>
</html>
