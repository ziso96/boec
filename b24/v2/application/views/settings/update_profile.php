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
                    <ul class="nav nav-pills mb-2">
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo lang_base_url(); ?>profile/<?php echo $this->auth_user->slug; ?>">
                                <i data-feather="user" class="font-medium-3 me-50"></i>
                                <span class="fw-bold"><?php echo html_escape(trans("profile")); ?></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo lang_base_url(); ?>settings">
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

                    <div class="card">


                          <div class="card">
                              <?php $this->load->view('partials/_messages'); ?>
                              <?php echo form_open_multipart("profile_controller/update_profile_post", ['id' => 'formAccountDeactivation']); ?>
                              <div class="card-header border-bottom">
                                  <h4 class="card-title"><i data-feather="user" class="font-medium-3 me-50"></i> <?php echo html_escape(trans("update_profile")); ?></h4>
                              </div>
                              <div class="card-body py-2 my-25">
                                  <!-- header section -->
                                  <div class="d-flex mb-4">
                                      <a href="#" class="me-25">
                                          <img src="<?php echo get_user_avatar($user); ?>" id="account-upload-img" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100" />
                                      </a>
                                      <!-- upload and reset button -->
                                      <div class="d-flex align-items-end mt-75 ms-1">
                                          <div>
                                              <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Yüklə</label>
                                              <input type="file" name="file" size="40" id="account-upload" onchange="$('#upload-file-info').html($(this).val().replace(/.*[\/\\]/, '..'));" hidden accept="image/*" />

                                              <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75">Sıfırla</button>
                                              <p class="mb-0">Keçərli formatlar: png, jpg, jpeg.</p>
                                          </div>
                                      </div>
                                      <!--/ upload and reset button -->
                                  </div>

                                  <!--/ header section -->

                                  <!-- form -->

                                      <div class="row">

                                          <div class="col-12 col-sm-6 mb-1">
                                              <label class="form-label" ><?php echo trans("email"); ?></label>
                                              <input type="email" name="email" class="form-control form-input" value="<?php echo html_escape($user->email); ?>" placeholder="<?php echo trans("email_address"); ?>" required>
                                          </div>
                                          <div class="col-12 col-sm-6 mb-1">
                                              <label class="form-label" ><?php echo trans("username"); ?></label>
                                              <input type="text" name="username" class="form-control form-input" value="<?php echo html_escape($user->username); ?>" placeholder="<?php echo trans("username"); ?>" maxlength="<?php echo $this->username_character_limit; ?>" required>
                                          </div>
                                          <div class="col-12 col-sm-6 mb-1">
                                              <label class="form-label" ><?php echo trans("slug"); ?></label>
                                              <input type="text" name="slug" class="form-control form-input" value="<?php echo html_escape($user->slug); ?>" placeholder="<?php echo trans("slug"); ?>" required>
                                          </div>
                                          <div class="col-12 col-sm-6 mb-1">
                                              <label class="form-label" ><?php echo trans("phone"); ?></label>
                                              <input type="text"  class="form-control form-input" value="" placeholder=" ">
                                          </div>
                                          <div class="col-12 col-sm-12 mb-1">
                                              <label class="form-label" ><?php echo trans("about_me"); ?></label>
                                              <textarea name="about_me" class="form-control form-textarea" placeholder="<?php echo trans("about_me"); ?>"><?php echo html_escape($user->about_me); ?></textarea>
                                          </div>
                                          <div class="form-group">
                                              <div class="row">
                                                  <div class="col-12 col-sm-12 mb-1">
                                                      <label class="form-label" for="accountFirstName"><?php echo trans('show_email_on_profile'); ?>:</label>
                                                  </div>
                                                  <div class="col-12 col-sm-6 mb-1">

                                                      <label class="form-check-label" for="accountFirstName">
                                                          <input class="form-check-input" type="radio" name="show_email_on_profile" value="1" <?php echo ($user->show_email_on_profile == 1) ? 'checked' : ''; ?> required>
                                                          <span class="checkbox-icon"><i class="icon-check"></i></span>
                                                          <span><?php echo trans("yes"); ?></span>
                                                      </label>
                                                  </div>

                                                  <div class="col-12 col-sm-6 mb-1">
                                                      <label class="form-check-label" for="accountFirstName">
                                                          <input class="form-check-input" type="radio" name="show_email_on_profile" value="0" <?php echo ($user->show_email_on_profile == 0) ? 'checked' : ''; ?> required>
                                                          <span class="checkbox-icon"><i class="icon-check"></i></span>
                                                          <span><?php echo trans("no"); ?></span>
                                                      </label>
                                                  </div>
                                              </div>
                                          </div>



                                          <div class="col-12">
                                              <button type="submit" name="submit" value="update" class="btn btn-primary mt-1 me-1"><?php echo trans("save_changes") ?></button>
                                              <button type="reset" class="btn btn-outline-secondary mt-1">Sıfırla</button>
                                          </div>



                                      </div>
                                  <?php echo form_close(); ?>
                                  <!--/ form -->
                              </div>
                          </div>

                    </div>
                </div>
                <!--/ User Content -->
        </div>
        </section>
    </div>
</div>


<!-- /.Section: main -->
