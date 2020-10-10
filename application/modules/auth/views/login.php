<div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
	<div class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
		<div class="login-content d-flex flex-column pt-lg-0 pt-12">
			<div class="login-form">
				<div class="pb-5 pb-lg-15">
					<h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Login</h3>
					<div class="text-muted font-weight-bold font-size-h4">Belum Punya Akses? 
					<a href="<?= base_url().'auth/register' ;?>" class="text-primary font-weight-bolder">Buat Akun </a></div>
				</div>
				<?php if ($this->session->flashdata('flash')) : ?>
					<div class="alert alert-primary" role="alert">
						<?= $this->session->flashdata('flash'); ?>
					</div>
				<?php endif; ?>
				<?= form_open('auth/login'); ?>
					<div class="form-group">
						<label class="font-size-h6 font-weight-bolder text-dark">Email</label>
						<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="text" name="email" autocomplete="off" placeholder="Your Email or Username" />
						<span class="text-danger"><?= form_error('email'); ?></span>
					</div>

					<div class="form-group">
						<div class="d-flex justify-content-between mt-n5">
							<label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
						</div>
						<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="password" name="password" autocomplete="off" placeholder="Your Password" />
						<span class="text-danger"><?= form_error('password'); ?></span>
					</div>

					<div class="pb-lg-0 pb-5">
						<button type="submit" id="kt_login_singin_form_submit_button" class="btn btn-primary btn-block font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right">
		<div class="login-conteiner bgi-no-repeat bgi-position-x-right bgi-position-y-bottom">
			<h3 class="pt-lg-40 pl-lg-20 pb-lg-0 pl-10 py-20 m-0 d-flex justify-content-lg-start font-weight-boldest display5 display1-lg text-white">Akses 
			<br />Administrator
		</div>
	</div>
</div>
