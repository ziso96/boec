<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

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
                                <a class="nav-link active" href="<?php echo lang_base_url(); ?>profile/<?php echo $this->auth_user->slug; ?>">
                                    <i data-feather="user" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold"><?php echo html_escape(trans("profile")); ?></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="<?php echo lang_base_url(); ?>settings">
                                    <i data-feather="user" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold"><?php echo html_escape(trans("update_profile")); ?></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo lang_base_url(); ?>settings/change-password">
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
                        <div class="row match-height">
                            <!-- Congratulations Card -->
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card card-congratulations">
                                    <div class="card-body text-center">
                                        <img src="<?php echo lang_base_url(); ?>/v2/app-assets/images/elements/decore-left.png" class="congratulations-img-left" alt="card-img-left">
                                        <img src="<?php echo lang_base_url(); ?>/v2/app-assets/images/elements/decore-right.png" class="congratulations-img-right" alt="card-img-right">
                                        <div class="avatar avatar-xl bg-primary shadow">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award font-large-1"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="mb-1 text-white">Salam, <?php echo html_escape($user->username); ?> !</h1>
                                            <p class="card-text m-auto w-75">
                                                Siz <a>boec.edu.az</a>-da <strong style="text-transform: capitalize;"><?php echo html_escape($user->role); ?></strong> olaraq fəaliyyət göstərirsiniz. <br> İşlərinizdə müvəffəqiyyətlər...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php else : ?>
                        <?php if ($general_settings->registration_system == 1): ?>

                            <?php endif; ?>
                        <?php endif; ?>
                        <div class="card">
                            <h4 style="justify-content: normal;" class="card-header"> <i data-feather="user" class="font-medium-3 me-50"></i> <?php echo html_escape(trans("profile")); ?></h4>
                        <div class="card-body py-2 my-25">
                            <div class="row">
                                <?php if (!empty($user->facebook_url)): ?>
                                    <div class="col-12 col-sm-6 d-flex mb-3"><i style="zoom: 2; color: royalblue;" class="font-medium-5 me-50" data-feather='facebook'></i>
                                        <div class="me-1">
                                            <p class="fw-bolder mb-0">Facebook</p>
                                            <span>
                                                ..... <?php echo mb_strimwidth($user->facebook_url, 12, 0, "..."); ?>
                                            </span>
                                        </div>
                                        <div class="mt-50 mt-sm-0">
                                            <a href="<?php echo $user->facebook_url; ?>" target="_blank" type="button" class="btn btn-icon btn-outline-secondary waves-effect">
                                                <i data-feather='link'></i>
                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($user->instagram_url)): ?>
                                    <div class="col-12 col-sm-6 d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="<?php echo base_url(); ?>v2/app-assets/images/icons/social/instagram.png" alt="instagram" class="me-1" height="44" width="44">
                                        </div>

                                        <div class="me-1">
                                            <p class="fw-bolder mb-0">Instagram</p>
                                            <span>
                                                ..... <?php echo mb_strimwidth($user->instagram_url, 12, 0, "..."); ?>
                                            </span>
                                        </div>
                                        <div class="mt-50 mt-sm-0">
                                            <a href="<?php echo $user->instagram_url; ?>" target="_blank" type="button" class="btn btn-icon btn-outline-secondary waves-effect">
                                                <i data-feather='link'></i>
                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($user->youtube_url)): ?>
                                    <div class="col-12 col-sm-6 d-flex mb-3"><i  style="zoom: 2; color: red" class="font-medium-5 me-50" data-feather='youtube'></i>
                                        <div class="me-1">
                                            <p class="fw-bolder mb-0">Youtube</p>
                                            ..... <?php echo mb_strimwidth($user->youtube_url, 12, 0, "..."); ?>
                                            </span>
                                        </div>
                                        <div class="mt-50 mt-sm-0">
                                            <a href="<?php echo $user->youtube_url; ?>" target="_blank" type="button" class="btn btn-icon btn-outline-secondary waves-effect">
                                                <i data-feather='link'></i>
                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($user->twitter_url)): ?>
                                    <div class="col-12 col-sm-6 d-flex mb-3"><i  style="zoom: 2; color: #1DA1F2;" class="font-medium-5 me-50" data-feather='twitter'></i>
                                        <div class="me-1">
                                            <p class="fw-bolder mb-0">Twitter</p>
                                            <span><?php echo $user->twitter_url; ?></span>
                                        </div>
                                        <div class="mt-50 mt-sm-0">
                                            <a href="<?php echo $user->twitter_url; ?>" target="_blank" type="button" class="btn btn-icon btn-outline-secondary waves-effect">
                                                <i data-feather='link'></i>
                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($user->pinterest_url)): ?>
                                    <div class="col-12 col-sm-6 d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="<?php echo base_url(); ?>v2/app-assets/images/icons/social/google.png" alt="instagram" class="me-1" height="38" width="38">
                                        </div>

                                        <div class="me-1">
                                            <p class="fw-bolder mb-0">Google</p>
                                            <span><?php echo $user->pinterest_url; ?></span>
                                        </div>
                                        <div class="mt-50 mt-sm-0">
                                            <a href="<?php echo $user->pinterest_url; ?>" target="_blank" type="button" class="btn btn-icon btn-outline-secondary waves-effect">
                                                <i data-feather='link'></i>
                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($user->linkedin_url)): ?>
                                    <div class="col-12 col-sm-6 d-flex mb-3"><i  style="zoom: 2; color: #0077B5;" class="font-medium-5 me-50" data-feather="linkedin"></i>
                                        <div class="me-1">
                                            <p class="fw-bolder mb-0">Linkedin</p>
                                            <span><?php echo $user->linkedin_url; ?></span>
                                        </div>
                                        <div class="mt-50 mt-sm-0">
                                            <a href="<?php echo $user->linkedin_url; ?>" target="_blank" type="button" class="btn btn-icon btn-outline-secondary waves-effect">
                                                <i data-feather='link'></i>
                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($user->vk_url)): ?>
                                    <div class="col-12 col-sm-6 d-flex mb-3"><i  style="zoom: 2;" class="font-medium-5 me-50" data-feather='globe'></i>
                                        <div class="me-1">
                                            <p class="fw-bolder mb-0">WEB</p>
                                            <span><?php echo $user->vk_url; ?></span>
                                        </div>
                                        <div class="mt-50 mt-sm-0">
                                            <a href="<?php echo $user->vk_url; ?>" target="_blank" type="button" class="btn btn-icon btn-outline-secondary waves-effect">
                                                <i data-feather='link'></i>
                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        </div>




                    </div>
                    <!--/ User Content -->
                </div>
            </section>
        </div>
    </div>
</div>
<!-- Section: main -->

<!-- /.Section: main -->


