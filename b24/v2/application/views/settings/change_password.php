<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Section: main -->

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">

                        <h2 style="text-transform: capitalize;" class="content-header-title float-start mb-0"><?php echo html_escape($user->role); ?> </h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo lang_base_url(); ?>"><?php echo html_escape(trans("home")); ?></a>
                                </li>
                                <li class="breadcrumb-item"><a href="<?php echo lang_base_url(); ?>admin"><?php echo html_escape(trans("profile")); ?></a>
                                </li>
                                <li class="breadcrumb-item"><a style="text-transform: capitalize;" href="<?php echo lang_base_url(); ?>admin"><?php echo html_escape($user->role); ?></a>
                                </li>
                                <li class="breadcrumb-item active"><?php echo html_escape($user->username); ?>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">

                </div>
            </div>
        </div>
        <div class="content-body">
            <section class="app-user-view-account">
                <div class="row match-height">
                    <!-- User Sidebar -->
                    <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                        <!-- User Card -->
                        <div class="card">

                            <!--                                        <img class="img-fluid rounded mt-3 mb-2" src="../v2/app-assets/images/portrait/small/avatar-s-2.jpg" height="110" width="110" alt="User avatar" />-->
                            <?php $this->load->view("profile/_profile_user_info"); ?>


                            <div class="d-flex justify-content-around my-2 pt-75">
                                <!--                                    <div class="d-flex align-items-start me-2">-->
                                <!--                                            <span class="badge bg-light-primary p-75 rounded">-->
                                <!--                                                <i data-feather="check" class="font-medium-2"></i>-->
                                <!--                                            </span>-->
                                <!--                                        <div class="ms-75">-->
                                <!--                                            <h4 class="mb-0">1.23k</h4>-->
                                <!--                                            <small>Tasks Done</small>-->
                                <!--                                        </div>-->
                                <!--                                    </div>-->
                                <!--                                    <div class="d-flex align-items-start">-->
                                <!--                                            <span class="badge bg-light-primary p-75 rounded">-->
                                <!--                                                <i data-feather="briefcase" class="font-medium-2"></i>-->
                                <!--                                            </span>-->
                                <!--                                        <div class="ms-75">-->
                                <!--                                            <h4 class="mb-0">568</h4>-->
                                <!--                                            <small>Projects Done</small>-->
                                <!--                                        </div>-->
                                <!--                                    </div>-->
                            </div>

                        </div>
                    </div>

                </div>


                <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                    <!-- User Pills -->
                    <ul class="nav nav-pills mb-2">
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo lang_base_url(); ?>profile/<?php echo $this->auth_user->slug; ?>">
                                <i data-feather="user" class="font-medium-3 me-50"></i>
                                <span class="fw-bold"><?php echo html_escape(trans("profile")); ?></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo lang_base_url(); ?>settings">
                                <i data-feather="user" class="font-medium-3 me-50"></i>
                                <span class="fw-bold"><?php echo html_escape(trans("update_profile")); ?></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo lang_base_url(); ?>settings/change-password">
                                <i data-feather="lock" class="font-medium-3 me-50"></i>
                                <span class="fw-bold"><?php echo html_escape(trans("change_password")); ?></span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo lang_base_url(); ?>settings/social-accounts">
                                <i data-feather="link" class="font-medium-3 me-50"></i><span class="fw-bold"><?php echo html_escape(trans("social_accounts")); ?></span>
                            </a>
                        </li>
                    </ul>

                    <div class="card">


                        <div class="card">
                            <?php $this->load->view('partials/_messages'); ?>
                            <?php echo form_open_multipart("profile_controller/update_profile_post", ['id' => 'formAccountDeactivation']); ?>
                            <div class="card-header border-bottom">
                                <h4 class="card-title"><i data-feather="user" class="font-medium-3 me-50"></i> <?php echo html_escape(trans("change_password")); ?></h4>
                            </div>
                            <div class="card-body py-2 my-25">
                            <div class="col-sm-12 col-md-9">
                                <div class="profile-tab-content">
                                    <!-- include message block -->
                                    <?php $this->load->view('partials/_messages'); ?>
                                    <?php echo form_open_multipart("profile_controller/change_password_post", ['id' => 'form_validate']); ?>
                                    <?php if (!empty($user->password)): ?>
                                        <div class="form-group">
                                            <label><?php echo trans("old_password"); ?></label>
                                            <input type="password" name="old_password" class="form-control form-input" value="<?php echo old("old_password"); ?>" placeholder="<?php echo trans("old_password"); ?>" required>
                                        </div>
                                        <input type="hidden" value="1" name="is_pass_exist">
                                    <?php else: ?>
                                        <input type="hidden" value="0" name="is_pass_exist">
                                    <?php endif; ?>
                                    <div class="form-group">
                                        <label><?php echo trans("password"); ?></label>
                                        <input type="password" name="password" class="form-control form-input" value="<?php echo old("password"); ?>" placeholder="<?php echo trans("password"); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label><?php echo trans("confirm_password"); ?></label>
                                        <input type="password" name="password_confirm" class="form-control form-input" value="<?php echo old("password_confirm"); ?>" placeholder="<?php echo trans("confirm_password"); ?>" required>
                                    </div>

                                    <button type="submit" class="btn btn-md btn-custom"><?php echo trans("change_password") ?></button>
                                    <?php echo form_close(); ?>

                                </div>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--/ User Content -->
        </div>
        </section>
    </div>
</div>



<section id="main">
	<div class="container">
		<div class="row">
			<!-- breadcrumb -->
			<div class="page-breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo lang_base_url(); ?>"><?php echo trans("home"); ?></a></li>
					<li class="breadcrumb-item"><a href="<?php echo lang_base_url(); ?>settings"><?php echo trans("settings"); ?></a></li>
					<li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
				</ol>
			</div>
			<div class="page-content">
				<div class="col-sm-12">
					<h1 class="page-title"><?php echo trans("settings"); ?></h1>
				</div>
				<div class="col-sm-12 col-md-3">
					<!-- load profile nav -->
					<?php $this->load->view("settings/_setting_tabs"); ?>
				</div>

				<div class="col-sm-12 col-md-9">
					<div class="profile-tab-content">
						<!-- include message block -->
						<?php $this->load->view('partials/_messages'); ?>
						<?php echo form_open_multipart("profile_controller/change_password_post", ['id' => 'form_validate']); ?>
						<?php if (!empty($user->password)): ?>
							<div class="form-group">
								<label><?php echo trans("old_password"); ?></label>
								<input type="password" name="old_password" class="form-control form-input" value="<?php echo old("old_password"); ?>" placeholder="<?php echo trans("old_password"); ?>" required>
							</div>
							<input type="hidden" value="1" name="is_pass_exist">
						<?php else: ?>
							<input type="hidden" value="0" name="is_pass_exist">
						<?php endif; ?>
						<div class="form-group">
							<label><?php echo trans("password"); ?></label>
							<input type="password" name="password" class="form-control form-input" value="<?php echo old("password"); ?>" placeholder="<?php echo trans("password"); ?>" required>
						</div>
						<div class="form-group">
							<label><?php echo trans("confirm_password"); ?></label>
							<input type="password" name="password_confirm" class="form-control form-input" value="<?php echo old("password_confirm"); ?>" placeholder="<?php echo trans("confirm_password"); ?>" required>
						</div>

						<button type="submit" class="btn btn-md btn-custom"><?php echo trans("change_password") ?></button>
						<?php echo form_close(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.Section: main -->
