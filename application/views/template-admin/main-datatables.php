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
		<meta name="description" content="Updates and statistics" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title><?= $title ?> - Sistem Informasi Akademik</title>

		<!-- Favicon -->

		<!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!-- Fonts -->
		<link href="<?= base_url(mix('css/datatables-admin.css')); ?>" rel="stylesheet" type="text/css" />
        <!-- Theme Styles -->
        <link href="<?= base_url(mix('css/theme-admin.css')); ?>" rel="stylesheet" type="text/css" />

        <!-- Layout Themes -->
        <link href="<?= base_url(mix('css/layouts-admin.css')); ?>" rel="stylesheet" type="text/css" />
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
								<div class="card card-custom">
									<?= $content ;?>
								</div>
                            </div>
                        </div>
                     </div>
					<?php $this->load->view('template-admin/partials/footer') ;?>
                </div>
            </div>
        </div>

    <!-- Global Config -->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>

    <!-- Theme JS Bundle -->
    <script src="<?= base_url(mix('js/theme-admin.js')); ?>"></script>
    <script src="<?= base_url(mix('js/datatables-admin.js')); ?>"></script>
	<script type="module">
		import DS from "<?= base_url('public/js/datatables.js'); ?>";
		var baseUrl = '<?= base_url() ?>';
		$('.datatable').each(function(){
			let url = $(this).attr('data-url');
			let container = '#'+$(this).attr('id');
			DS.datatable(container, url);
		})
	</script>
	<script>
		<?php if ($this->session->flashdata('flash')) : ?>
			toastr.options = {
				"closeButton": false,
				"debug": false,
				"newestOnTop": false,
				"progressBar": true,
				"positionClass": "toast-top-right",
				"preventDuplicates": false,
				"onclick": null,
				"showDuration": "300",
				"hideDuration": "1000",
				"timeOut": "5000",
				"extendedTimeOut": "1000",
				"showEasing": "swing",
				"hideEasing": "linear",
				"showMethod": "fadeIn",
				"hideMethod": "fadeOut"
				};
			toastr.success("<?= $this->session->flashdata('flash'); ?>");
		<?php endif; ?>
	</script>
</body>
</html>
