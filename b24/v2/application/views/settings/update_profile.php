<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">

                        <h2 class="content-header-title float-start mb-0"><?php echo html_escape($user->role); ?> </h2>
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

                        <?php $this->load->view('partials/_messages'); ?>
                          <div class="card">
                              <div class="card-header border-bottom">
                                  <h4 class="card-title"><i data-feather="user" class="font-medium-3 me-50"></i> <?php echo html_escape(trans("update_profile")); ?></h4>
                              </div>
                              <div class="card-body py-2 my-25">
                                  <!-- header section -->
                                  <div class="d-flex">
                                      <a href="#" class="me-25">
                                          <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" id="account-upload-img" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100" />
                                      </a>
                                      <!-- upload and reset button -->
                                      <div class="d-flex align-items-end mt-75 ms-1">
                                          <div>
                                              <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                              <input type="file" id="account-upload" hidden accept="image/*" />
                                              <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                                              <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                                          </div>
                                      </div>
                                      <!--/ upload and reset button -->
                                  </div>
                                  <!--/ header section -->

                                  <!-- form -->
                                  <form class="validate-form mt-2 pt-50">
                                      <div class="row">
                                          <div class="col-12 col-sm-6 mb-1">
                                              <label class="form-label" for="accountFirstName">First Name</label>
                                              <input type="text" class="form-control" id="accountFirstName" name="firstName" placeholder="John" value="John" data-msg="Please enter first name" />
                                          </div>
                                          <div class="col-12 col-sm-6 mb-1">
                                              <label class="form-label" for="accountLastName">Last Name</label>
                                              <input type="text" class="form-control" id="accountLastName" name="lastName" placeholder="Doe" value="Doe" data-msg="Please enter last name" />
                                          </div>
                                          <div class="col-12 col-sm-6 mb-1">
                                              <label class="form-label" for="accountEmail">Email</label>
                                              <input type="email" class="form-control" id="accountEmail" name="email" placeholder="Email" value="johndoe@gmail.com" />
                                          </div>
                                          <div class="col-12 col-sm-6 mb-1">
                                              <label class="form-label" for="accountOrganization">Organization</label>
                                              <input type="text" class="form-control" id="accountOrganization" name="organization" placeholder="Organization name" value="PIXINVENT" />
                                          </div>
                                          <div class="col-12 col-sm-6 mb-1">
                                              <label class="form-label" for="accountPhoneNumber">Phone Number</label>
                                              <input type="text" class="form-control account-number-mask" id="accountPhoneNumber" name="phoneNumber" placeholder="Phone Number" value="457 657 1237" />
                                          </div>
                                          <div class="col-12 col-sm-6 mb-1">
                                              <label class="form-label" for="accountAddress">Address</label>
                                              <input type="text" class="form-control" id="accountAddress" name="address" placeholder="Your Address" />
                                          </div>
                                          <div class="col-12 col-sm-6 mb-1">
                                              <label class="form-label" for="accountState">State</label>
                                              <input type="text" class="form-control" id="accountState" name="state" placeholder="State" />
                                          </div>
                                          <div class="col-12 col-sm-6 mb-1">
                                              <label class="form-label" for="accountZipCode">Zip Code</label>
                                              <input type="text" class="form-control account-zip-code" id="accountZipCode" name="zipCode" placeholder="Code" maxlength="6" />
                                          </div>
                                          <div class="col-12 col-sm-6 mb-1">
                                              <label class="form-label" for="country">Country</label>
                                              <select id="country" class="select2 form-select">
                                                  <option value="">Select Country</option>
                                                  <option value="Australia">Australia</option>
                                                  <option value="Bangladesh">Bangladesh</option>
                                                  <option value="Belarus">Belarus</option>
                                                  <option value="Brazil">Brazil</option>
                                                  <option value="Canada">Canada</option>
                                                  <option value="China">China</option>
                                                  <option value="France">France</option>
                                                  <option value="Germany">Germany</option>
                                                  <option value="India">India</option>
                                                  <option value="Indonesia">Indonesia</option>
                                                  <option value="Israel">Israel</option>
                                                  <option value="Italy">Italy</option>
                                                  <option value="Japan">Japan</option>
                                                  <option value="Korea">Korea, Republic of</option>
                                                  <option value="Mexico">Mexico</option>
                                                  <option value="Philippines">Philippines</option>
                                                  <option value="Russia">Russian Federation</option>
                                                  <option value="South Africa">South Africa</option>
                                                  <option value="Thailand">Thailand</option>
                                                  <option value="Turkey">Turkey</option>
                                                  <option value="Ukraine">Ukraine</option>
                                                  <option value="United Arab Emirates">United Arab Emirates</option>
                                                  <option value="United Kingdom">United Kingdom</option>
                                                  <option value="United States">United States</option>
                                              </select>
                                          </div>
                                          <div class="col-12 col-sm-6 mb-1">
                                              <label for="language" class="form-label">Language</label>
                                              <select id="language" class="select2 form-select">
                                                  <option value="">Select Language</option>
                                                  <option value="en">English</option>
                                                  <option value="fr">French</option>
                                                  <option value="de">German</option>
                                                  <option value="pt">Portuguese</option>
                                              </select>
                                          </div>
                                          <div class="col-12 col-sm-6 mb-1">
                                              <label for="timeZones" class="form-label">Timezone</label>
                                              <select id="timeZones" class="select2 form-select">
                                                  <option value="">Select Time Zone</option>
                                                  <option value="-12">(GMT-12:00) International Date Line West</option>
                                                  <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                                                  <option value="-10">(GMT-10:00) Hawaii</option>
                                                  <option value="-9">(GMT-09:00) Alaska</option>
                                                  <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                                                  <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                                                  <option value="-7">(GMT-07:00) Arizona</option>
                                                  <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                                  <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                                                  <option value="-6">(GMT-06:00) Central America</option>
                                                  <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                                                  <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                                  <option value="-6">(GMT-06:00) Saskatchewan</option>
                                                  <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                                  <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                                                  <option value="-5">(GMT-05:00) Indiana (East)</option>
                                                  <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                                                  <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                                                  <option value="-4">(GMT-04:00) Manaus</option>
                                                  <option value="-4">(GMT-04:00) Santiago</option>
                                                  <option value="-3.5">(GMT-03:30) Newfoundland</option>
                                              </select>
                                          </div>
                                          <div class="col-12 col-sm-6 mb-1">
                                              <label for="currency" class="form-label">Currency</label>
                                              <select id="currency" class="select2 form-select">
                                                  <option value="">Select Currency</option>
                                                  <option value="usd">USD</option>
                                                  <option value="euro">Euro</option>
                                                  <option value="pound">Pound</option>
                                                  <option value="bitcoin">Bitcoin</option>
                                              </select>
                                          </div>
                                          <div class="col-12">
                                              <button type="submit" class="btn btn-primary mt-1 me-1">Save changes</button>
                                              <button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>
                                          </div>
                                      </div>
                                  </form>
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
</div>

<!-- Section: main -->
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

                        <?php echo form_open_multipart("profile_controller/update_profile_post", ['id' => 'form_validate']); ?>
                        <div class="form-group">
                            <div class="row m-b-10">
                                <div class="col-sm-12">
                                    <img src="<?php echo get_user_avatar($user); ?>" alt="<?php echo $user->username; ?>" class="form-avatar">
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <div class="col-sm-12">
                                    <a class='btn btn-md btn-info btn-file-upload btn-profile-file-upload'>
                                        <?php echo trans('select_image'); ?>
                                        <input type="file" name="file" size="40" accept=".png, .jpg, .jpeg, .gif" onchange="$('#upload-file-info').html($(this).val().replace(/.*[\/\\]/, '..'));">
                                    </a>
                                </div>
                            </div>
                            <p class='label label-info' id="upload-file-info"></p>
                        </div>

                        <div class="form-group m-t-30">
                            <label><?php echo trans("email"); ?></label>
                            <input type="email" name="email" class="form-control form-input" value="<?php echo html_escape($user->email); ?>" placeholder="<?php echo trans("email_address"); ?>" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo trans("username"); ?></label>
                            <input type="text" name="username" class="form-control form-input" value="<?php echo html_escape($user->username); ?>" placeholder="<?php echo trans("username"); ?>" maxlength="<?php echo $this->username_character_limit; ?>" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo trans("slug"); ?></label>
                            <input type="text" name="slug" class="form-control form-input" value="<?php echo html_escape($user->slug); ?>" placeholder="<?php echo trans("slug"); ?>" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo trans("about_me"); ?></label>
                            <textarea name="about_me" class="form-control form-textarea" placeholder="<?php echo trans("about_me"); ?>"><?php echo html_escape($user->about_me); ?></textarea>
                        </div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-12">
									<label><?php echo trans('show_email_on_profile'); ?></label>
								</div>
								<div class="col-md-4 col-sm-4 col-option">
									<label class="custom-checkbox custom-radio">
										<input type="radio" name="show_email_on_profile" value="1" <?php echo ($user->show_email_on_profile == 1) ? 'checked' : ''; ?> required>
										<span class="checkbox-icon"><i class="icon-check"></i></span>
										<span><?php echo trans("yes"); ?></span>
									</label>
								</div>
								<div class="col-md-4 col-sm-4 col-option">
									<label class="custom-checkbox custom-radio">
										<input type="radio" name="show_email_on_profile" value="0" <?php echo ($user->show_email_on_profile == 0) ? 'checked' : ''; ?> required>
										<span class="checkbox-icon"><i class="icon-check"></i></span>
										<span><?php echo trans("no"); ?></span>
									</label>
								</div>
							</div>
						</div>

                        <button type="submit" name="submit" value="update" class="btn btn-md btn-custom"><?php echo trans("save_changes") ?></button>
                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.Section: main -->
