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
                    <?php if ($this->auth_check) : ?>
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
                                <a class="nav-link " href="<?php echo lang_base_url(); ?>settings/change-password">
                                    <i data-feather="lock" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold"><?php echo html_escape(trans("change_password")); ?></span>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link active" href="<?php echo lang_base_url(); ?>settings/social-accounts">
                                    <i data-feather="link" class="font-medium-3 me-50"></i><span class="fw-bold"><?php echo html_escape(trans("social_accounts")); ?></span>
                                </a>
                            </li>
                        </ul>

                        <div class="card">

                            <?php $this->load->view('partials/_messages'); ?>


                            <div class="card-header border-bottom">
                                <h4 class="card-title"><i data-feather="user" class="font-medium-3 me-50"></i> <?php echo html_escape(trans("social_accounts")); ?></h4>
                            </div>
                            <div class="card-body py-2 my-25">


                                        <!-- include message block -->


                                        <?php echo form_open("profile_controller/social_accounts_post"); ?>
                                <div class="row">
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label">Facebook <?php echo trans('url'); ?></label>
                                            <input type="text" class="form-control form-input" name="facebook_url"
                                                   placeholder="Facebook <?php echo trans('url'); ?>" value="<?php echo html_escape($user->facebook_url); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
                                        </div>

                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label">Instagram <?php echo trans('url'); ?></label>
                                            <input type="text" class="form-control form-input" name="instagram_url" placeholder="Instagram <?php echo trans('url'); ?>"
                                                   value="<?php echo html_escape($user->instagram_url); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
                                        </div>

                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label">Youtube <?php echo trans('url'); ?></label>
                                        <input type="text" class="form-control form-input" name="youtube_url"
                                               placeholder="Youtube <?php echo trans('url'); ?>" value="<?php echo html_escape($user->youtube_url); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
                                    </div>

                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label">Twitter <?php echo trans('url'); ?></label>
                                        <input type="text" class="form-control form-input"
                                               name="twitter_url" placeholder="Twitter <?php echo trans('url'); ?>"
                                               value="<?php echo html_escape($user->twitter_url); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
                                    </div>

                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label">Google <?php echo trans('url'); ?></label>
                                        <input type="text" class="form-control form-input" name="pinterest_url" placeholder="Pinterest <?php echo trans('url'); ?>"
                                               value="<?php echo html_escape($user->pinterest_url); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
                                    </div>

                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label">Linkedin <?php echo trans('url'); ?></label>
                                            <input type="text" class="form-control form-input" name="linkedin_url" placeholder="Linkedin <?php echo trans('url'); ?>"
                                                   value="<?php echo html_escape($user->linkedin_url); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
                                        </div>

                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label">WEB <?php echo trans('url'); ?></label>
                                            <input type="text" class="form-control form-input" name="vk_url"
                                                   placeholder="VK <?php echo trans('url'); ?>" value="<?php echo html_escape($user->vk_url); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
                                        </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-1 me-1"><?php echo trans("save_changes") ?></button>
                                        <button type="reset" class="btn btn-outline-secondary mt-1">Sıfırla</button>
                                    </div>
                                        <?php echo form_close(); ?>


                                </div>
                            </div>


                        </div>
                    <?php else : ?>
                        <?php if ($general_settings->registration_system == 1): ?>
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title"><i data-feather="user" class="font-medium-3 me-50"></i> <?php echo html_escape(trans("change_password")); ?></h4>
                                </div>
                                <div class="card-body py-2 my-25">
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <!--/ User Content -->
        </div>
        </section>
    </div>
</div>



<!-- /.Section: main -->
