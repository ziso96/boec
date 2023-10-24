<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->selected_lang->short_form ?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php // echo xss_clean($title); ?>  <?php echo xss_clean($settings->site_title); ?></title>
	<meta name="description" content="<?php echo xss_clean($description); ?>"/>
	<meta name="keywords" content="<?php echo xss_clean($keywords); ?>"/>
	<meta name="author" content="Z!SO-ZİSO-ZISO-ziso"/>
	<meta name="robots" content="all"/>
	<meta name="revisit-after" content="1 Days"/>
	<meta property="og:locale" content="<?php echo $this->selected_lang->language_code ?>"/>
	<meta property="og:site_name" content="<?php echo $settings->application_name; ?>"/>
<?php if (isset($page_type)): ?>
    <meta property="og:type" content="<?php echo $og_type; ?>"/>
    <meta property="og:title" content="<?php echo xss_clean($post->title); ?>"/>
    <meta property="og:description" content="<?php echo xss_clean($post->summary); ?>"/>
    <meta property="og:url" content="<?php echo $og_url; ?>"/>
    <meta property="og:image" content="<?php echo $og_image; ?>"/>
    <meta property="og:image:width" content="750"/>
    <meta property="og:image:height" content="415"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="<?php echo $settings->application_name; ?>"/>
    <meta name="twitter:title" content="<?php echo xss_clean($post->title); ?>"/>
    <meta name="twitter:description" content="<?php echo xss_clean($post->summary); ?>"/>
    <meta name="twitter:image" content="<?php echo $og_image; ?>"/>
<?php foreach ($og_tags as $tag): ?>
    <meta property="article:tag" content="<?php echo $tag->tag; ?>"/>
<?php endforeach; ?>
<?php else: ?>
    <meta property="og:image" content="<?php echo get_logo($general_settings); ?>"/>
    <meta property="og:image:width" content="180"/>
    <meta property="og:image:height" content="50"/>
    <meta property="og:type" content=website/>
    <meta property="og:title" content="<?php echo xss_clean($title); ?> - <?php echo xss_clean($settings->site_title); ?>"/>
    <meta property="og:description" content="<?php echo xss_clean($description); ?>"/>
    <meta property="og:url" content="<?php echo base_url(); ?>"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="<?php echo $settings->application_name; ?>"/>
    <meta name="twitter:title" content="<?php echo xss_clean($title); ?> - <?php echo xss_clean($settings->site_title); ?>"/>
    <meta name="twitter:description" content="<?php echo xss_clean($description); ?>"/>
    <meta name="twitter:image" content="<?php echo get_logo($general_settings); ?>"/>
<?php endif; ?>
	<link rel="canonical" href="<?php echo current_url(); ?>"/>
<?php if ($general_settings->multilingual_system == 1):
foreach ($languages as $language):
if ($language->id == $site_lang->id):?>
    <link rel="alternate" hreflang="<?php echo $language->language_code ?>" href="<?php echo base_url(); ?>"/>
<?php else: ?>
    <link rel="alternate" hreflang="<?php echo $language->language_code ?>" href="<?php echo base_url() . $language->short_form . "/"; ?>"/>
<?php endif; endforeach; endif; ?>
<?php if (empty($general_settings->favicon_path)): ?>

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png"/>
<?php else: ?>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() . html_escape($general_settings->favicon_path); ?>"/>
<?php endif; ?>
    <?php echo $primary_font_url; ?>
    <?php echo $secondary_font_url; ?>
    <?php $this->load->view('partials/_font_style'); ?>
	<?php echo $general_settings->head_code; ?>

	<script>var csfr_token_name = '<?php echo $this->security->get_csrf_token_name(); ?>';var csfr_cookie_name = '<?php echo $this->config->item('csrf_cookie_name'); ?>';var base_url = '<?php echo base_url(); ?>';var is_recaptcha_enabled = false;var lang_folder = '<?php echo $this->selected_lang->folder_name; ?>';<?php if ($recaptcha_status == true): ?>is_recaptcha_enabled = true;<?php endif; ?></script>

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>v2/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>v2/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>v2/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>v2/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>v2/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>v2/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>v2/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>v2/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>v2/app-assets/css/core/menu/menu-types/horizontal-menu.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>v2/app-assets/css/pages/page-knowledge-base.css">
    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>v2/app-assets/css/plugins/extensions/ext-component-swiper.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>v2/app-assets/vendors/css/extensions/swiper.min.css">

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>v2/assets/css/style.css">




</head>
<body>
<!-- header -->
<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">

<nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center" data-nav="brand-center">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav">

            <li class="nav-item"><a class="navbar-brand" href="<?php echo lang_base_url(); ?>"><span class="brand-logo">
                        <img src="<?php echo get_logo($general_settings); ?>">

                        <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                    <h2 class="brand-text mb-0">BOEC.EDU.AZ</h2>
                </a></li>
        </ul>
    </div>
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu ficon"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a></li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">

                <?php $this->load->view("partials/_social_links"); ?>
                </ul>

        </div>

        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item dropdown dropdown-language">
                <?php if ($general_settings->multilingual_system == 1 && count($languages) > 1): ?>
                <a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="me-50" data-feather="globe"></i><span class="selected-language"><?php echo html_escape($selected_lang->name); ?></span>
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag">
                    <?php foreach ($languages as $language):
                        $lang_url = base_url() . $language->short_form . "/";
                        if ($language->id == $this->general_settings->site_lang) {
                            $lang_url = base_url();
                        } ?>
                    <a class="dropdown-item" href="<?php echo $lang_url; ?>" data-language="en">
                        <?php echo $language->name; ?></a>

                    <?php endforeach; ?>
                </div>
            </li>


            <?php endif; ?>
            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>

            <?php echo form_open(lang_base_url() . 'search', ['method' => 'get']); ?>




            <li class="nav-item nav-search me-1"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                <div class="search-input">
                    <div class="search-input-icon"><i data-feather="search"></i></div>
                    <input class="form-control input" type="text" name="q" placeholder="<?php echo html_escape(trans("search_exp")); ?>" tabindex="-1" data-search="search" pattern=".*\S+.*" required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
                    <div class="search-input-close"><i data-feather="x"></i></div>
                </div>

            </li>


            <?php echo form_close(); ?>
            <?php if ($this->auth_check) : ?>
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"><?php echo html_escape(character_limiter($this->auth_user->username, 20, '...')); ?></span><span style="text-transform: capitalize;" class="user-status"><?php echo html_escape($this->auth_user->role); ?></span></div><span class="avatar"><img class="round" src="<?php echo get_user_avatar($this->auth_user); ?>" alt="<?php echo html_escape($this->auth_user->username); ?>" height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <?php if (is_admin() || is_author()): ?>
                    <a class="dropdown-item" href="<?php echo admin_url(); ?>"><i class="me-50" data-feather="shield"></i> <?php echo html_escape(trans("admin_panel")); ?></a>
                    <?php endif; ?>
                    <a class="dropdown-item" href="<?php echo lang_base_url(); ?>profile/<?php echo $this->auth_user->slug; ?>"><i class="me-50" data-feather="user"></i> <?php echo html_escape(trans("profile")); ?></a>
<!--                    <a class="dropdown-item" href="--><?php //echo lang_base_url(); ?><!--reading-list"><i class="me-50" data-feather="message-square"></i> --><?php //echo html_escape(trans("reading_list")); ?><!--</a>-->

<!--                    <div class="dropdown-divider"></div>-->

                    <a class="dropdown-item" href="<?php echo lang_base_url(); ?>settings"><i class="me-50" data-feather="settings"></i> <?php echo html_escape(trans("settings")); ?></a>
                    <a class="dropdown-item" target="_blank" href="https://boec.edu.az.umanage.az"><i class="me-50" data-feather="external-link"></i> U-BOEC </a>
                    <a class="dropdown-item" href="<?php echo lang_base_url(); ?>logout"><i class="me-50" data-feather="power"></i> <?php echo trans("logout"); ?></a>
                </div>
            </li>
            <?php else : ?>
            <?php if ($general_settings->registration_system == 1): ?>

            <a href="https://boec.edu.az.umanage.az" target="_blank" type="button" class="btn btn-primary waves-effect">U-BOEC</a>
           <!-- <a href="<?php // echo lang_base_url(); ?>login" type="button" class="btn btn-outline-success waves-effect me-1"><?php // echo html_escape(trans("login")); ?></a>
            <a href="<?php // echo lang_base_url(); ?>register" type="button" class="btn btn-outline-info waves-effect"><?php // echo html_escape(trans("register")); ?></a>
            -->
                <?php endif; ?>
            <?php endif; ?>


        </ul>
    </div>
</nav>


        <div class="horizontal-menu-wrapper">
            <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border container-xxl" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
                <div class="navbar-header">
                    <ul class="nav navbar-nav flex-row">
                        <img src="<?php echo get_logo($general_settings); ?>" width="15" height="15">
                        <li class="nav-item me-auto"><a class="navbar-brand" href="<?php echo lang_base_url(); ?>"><span class="brand-logo">

                                        <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                            <defs>
                                                <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                                    <stop stop-color="#000000" offset="0%"></stop>
                                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                                </lineargradient>
                                                <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                                    <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                                </lineargradient>
                                            </defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                                    <g id="Group" transform="translate(400.000000, 178.000000)">
                                                        <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                                        <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                                        <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                                        <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                                        <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></span>
                                <h2 class="brand-text mb-0">BOEC</h2>
                            </a></li>
                        <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a></li>
                    </ul>
                </div>
                <div class="shadow-bottom"></div>
                <!-- Horizontal menu content-->
                <div class="navbar-container main-menu-content" data-menu="menu-container">
                    <!-- include ../../../includes/mixins-->

                    <?php
                    $active_page = uri_string();
                    if ($general_settings->site_lang != $selected_lang->id) {
                        $active_page = $this->uri->segment(2);
                    }

                    $this->load->view("partials/_nav.php", ['active_page' => $active_page]); ?>

                </div>
            </div>
        </div>
