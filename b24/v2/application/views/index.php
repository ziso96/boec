<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- <h1 class="title-index"><?php // echo html_escape($home_title); ?></h1> -->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-body">



<!-- Section: main -->
            <section id="knowledge-base-search">
                <div class="row">
                    <div class="col-12">
                        <div class="card knowledge-base-bg text-center" style="background-position: 50% 70%; background-size: cover; background-attachment: fixed; background-image: url('<?php echo base_url(); ?>v2/app-assets/images/banner/banner.png'), url('<?php echo base_url(); ?>v2/app-assets/images/banner/banner-boec.png')">

                            <div class="card-body">
                                <h1 class="text-primary"><?php echo xss_clean($settings->site_description); ?></h1><br>
                                <p class="card-text mb-2">
                                    <span class="fw-bolder"> Kollecimizin rəsmi saytına xoş gəlmisiniz!</span><br><br>
                                    <span>Faydalı keçidlər:</span>
                                </p>
                                <a href="https://boec.edu.az.umanage.az" target="_blank" type="button" class="btn btn-outline-primary waves-effect me-1 mb-1" title="Elektron kollec sistemi">U-BOEC</a>
                                <button type="button" class="btn btn-outline-primary waves-effect me-1 mb-1" data-bs-target="#large" data-bs-toggle="modal" title="Elektron kollec sistemi üçün təlimatlar">Təlimat</button>
                                <a href="<?php echo base_url(); ?>qaydalar" type="button" class="btn btn-outline-primary waves-effect me-1 mb-1"title="Kollecdaxili qaydalar">Qaydalar</a>
                                <a href="<?php echo base_url(); ?>telebeqebulu" type="button" class="btn btn-outline-primary waves-effect me-1 mb-1"title="Qəbul olmaq istəyənlər üçün məlumat kitabçası">Tələbə qəbulu</a>
                                <a href="<?php echo base_url(); ?>niyebiz" type="button" class="btn btn-outline-primary waves-effect me-1 mb-1"title="Bizi seçməyin üstünlükləri">Niyə biz?</a>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal fade text-start" id="large" tabindex="-1" aria-labelledby="myModalLabel17" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel17">U-BOEC | Təlimat</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                * Bu təlimatlar ilə Siz Elektron jurnaldan istifadə forması və qaydalarını öyrənə bilərsiniz.
                                <hr>
                                <section id="modal-examples">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <i data-feather="user" class="font-large-2 mb-1"></i>
                                                    <h5 class="card-title">Müəllim üçün</h5>
                                                    <p class="card-text">Bu təlimat müəllim profilinin işləmə qaydalarını izah edir.</p>

                                                    <!-- modal trigger button -->
                                                    <a href="https://boec.edu.az.umanage.az/teacherv2/faq" type="button" class="btn btn-primary waves-effect waves-float waves-light" >
                                                        BAX
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <i data-feather="users" class="font-large-2 mb-1"></i>
                                                    <h5 class="card-title">Tələbələr üçün</h5>
                                                    <p class="card-text">Bu təlimat tələbə profilinin işləmə qaydalarını izah edir.</p>

                                                    <!-- modal trigger button -->
                                                    <a href="https://boec.edu.az.umanage.az/teacherv2/faq" type="button" class="btn btn-primary waves-effect waves-float waves-light" data-bs-toggle="modal" data-bs-target="#editUser">
                                                        BAX
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </section>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Bağla</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="component-swiper-parallax">
                <div class="card ">

                    <div class=" ">
                        <!-- Swiper -->
                        <div class="swiper-parallax swiper-container">
                            <div class="parallax-bg" data-swiper-parallax="-23%">
                                <img class="img-fluid" src="<?php echo base_url(); ?>v2/app-assets/images/banner/parallax-4.jpg" alt="banner" />
                            </div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">

                                    <div class="subtitle" data-swiper-parallax="-200"> </div>
                                    <div class="text" data-swiper-parallax="-100">
                                        <p class="card-text">
                                            Bu təhsil sisteminin nə qədər dəyərli olduğunu ondan görmək olar ki, Azərbaycanda yüksək savada, biliyə, <br>
                                            ixtisasa, yüksək elmə malik insanlar var və onlar cəmiyyətin çox hissəsini təşkil edir. Əgər bunlar olmasaydı, <br>
                                            Azərbaycanın iqtisadiyyatı belə güclü inkişaf edə bilməzdi. Bunlar olmasaydı, Azərbaycan elmi inkişaf edə <br> bilməzdi.
                                            Bunlar olmasaydı, biz indi Azərbaycanı müstəqil dövlət kimi idarə edə bilməzdik. <br>
                                            Onları qiymətləndirmək lazımdır və on illərlə əldə etdiyimiz nailiyyəti heç vaxt unutmamalıyıq.
                                        </p>
                                    </div><br>
                                    <div class="title" data-swiper-parallax="-300">ULU ÖNDƏR HEYDƏR ƏLİYEV</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="subtitle" data-swiper-parallax="-200"> </div>
                                    <div class="text" data-swiper-parallax="-100">
                                        <p class="card-text">
                                            Təhsilimizin məqsədi gənc nəslə, uşaqlara təhsil verib onları gələcəyə hazırlamaqdır. <br> Hər bir insan gərək, eyni zamanda vətəndaş olsun. Mütləq vətəndaş olsun. <br> Dövlətinə sadiq, millətinə sadiq, ənənələrinə sadiq, xalqına sadiq vətəndaş olsun.
                                        </p>
                                    </div><br>
                                    <div class="title" data-swiper-parallax="-300" data-swiper-parallax-opacity="0">ULU ÖNDƏR HEYDƏR ƏLİYEV</div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="subtitle" data-swiper-parallax="-200"> </div>
                                    <div class="text" data-swiper-parallax="-100">
                                        <p class="card-text">
                                            Təhsil hər bir dövlətin, ölkənin, cəmiyyətin həyatının, <br> fəaliyyətinin mühüm bir sahəsidir. <br>  Cəmiyyət təhsilsiz inkişaf edə bilməz.
                                        </p>
                                    </div><br>
                                    <div class="title" data-swiper-parallax="-300">ULU ÖNDƏR HEYDƏR ƏLİYEV</div>

                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                            <!-- Add Navigation -->
                        </div>
                    </div>
                </div>
            </section>


<?php
            $url = 'https://boec.edu.az.umanage.az/api/statistics'; // path to your JSON file
            $data = file_get_contents($url); // put the contents of the file into a variable
            $characters = json_decode($data); // decode the JSON feed
?>

            <section id="knowledge-base-content">
                <div class="row kb-search-content-info match-height">
                    <!-- sales card -->
                    <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                        <div class="card">
                            <a href="#">
<!--                                <img src="v2/app-assets/images/illustration/sales.svg" class="card-img-top" alt="knowledge-base-image">-->

                                <div class="card-body text-center">
                                    <h2><span class="badge badge-glow bg-primary"><?php echo $characters->all_student_count; ?></span> tələbə</h2>

                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- marketing -->
                    <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                        <div class="card">
                            <a href="#">
<!--                                <img src="v2/app-assets/images/illustration/marketing.svg" class="card-img-top" alt="knowledge-base-image">-->
                                <div class="card-body text-center">
                                    <h2><span class="badge badge-glow bg-info"><?php echo $characters->male_std_count; ?></span> tələbə oğlan</h2>

                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- api -->
                    <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                        <div class="card">
                            <a href="#">
<!--                                <img src="v2/app-assets/images/illustration/sales.svg" class="card-img-top" alt="knowledge-base-image">-->
                                <div class="card-body text-center">
                                    <h2><span class="badge badge-glow bg-danger"><?php echo $characters->female_std_count; ?></span> tələbə qız</h2>

                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12 kb-search-content">
                        <div class="card">
                            <a href="#">
                                <!--                                <img src="v2/app-assets/images/illustration/sales.svg" class="card-img-top" alt="knowledge-base-image">-->
                                <div class="card-body text-center">
                                    <h2><span style="box-shadow: 0px 0px 10px #82868b;" class="badge badge-glow bg-bitbucket"><?php echo $characters->eyani_std_count; ?></span> Əyani tələbə</h2>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-12 kb-search-content">
                        <div class="card">
                            <a href="#">
                                <!--                                <img src="v2/app-assets/images/illustration/sales.svg" class="card-img-top" alt="knowledge-base-image">-->
                                <div class="card-body text-center">
                                    <h2><span style="box-shadow: 0px 0px 10px #82868b;" class="badge badge-glow bg-reddit"><?php echo $characters->qiyabi_std_count; ?></span> Qiyabi tələbə</h2>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                        <div class="card">
                            <a href="#">
<!--                                <img src="v2/app-assets/images/illustration/marketing.svg" class="card-img-top" alt="knowledge-base-image">-->
                                <div class="card-body text-center">
                                    <h2><span style="box-shadow: 0px 0px 10px #82868b;" class="badge badge-glow bg-linkedin"><?php echo $characters->specialty_count; ?></span>  aktiv ixtisas</h2>

                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- personalization -->
                    <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                        <div class="card">
                            <a href="#">
<!--                                <img src="v2/app-assets/images/illustration/sales.svg" class="card-img-top" alt="knowledge-base-image">-->
                                <div class="card-body text-center">
                                    <h2><span style="box-shadow: 0px 0px 10px #82868b;" class="badge badge-glow bg-adn"><?php echo $characters->group_count; ?></span>  aktiv qrup</h2>

                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- email -->
                    <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                        <div class="card">
                            <a href="#">
<!--                                <img src="v2/app-assets/images/illustration/marketing.svg" class="card-img-top" alt="knowledge-base-image">-->
                                <div class="card-body text-center">
                                    <h2><span class="badge badge-glow bg-success"><?php echo $characters->lesson_count; ?> </span> aktiv fənn</h2>

                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                        <div class="card">
                            <a href="#">
<!--                                <img src="v2/app-assets/images/illustration/marketing.svg" class="card-img-top" alt="knowledge-base-image">-->
                                <div class="card-body text-center">
                                    <h2><span class="badge badge-glow bg-warning"><?php echo $characters->all_teacher_count; ?></span>  müəllim</h2>

                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- demand -->


                    <!-- no result -->

                </div>
            </section>




            <div class="content-detached">
                <div class="content-body">
                    <!-- Blog List -->
                    <div class="blog-list-wrapper">
                        <!-- Blog List Items -->
                        <div class="row">



                            <!--Include Widget Comments-->
                            <?php $this->load->view('partials/_sidebar_widget_polls'); ?>

		<!-- posts -->
					<div class="col-xs-12 col-sm-12  <?php echo ($layout == "layout_3" || $layout == "layout_6") ? '' : ''; ?>">
						<div class="row match-height">
							<!-- printf posts -->
							<?php $count = 0; ?>

							<?php foreach ($posts as $item): ?>
								<?php if ($count != 0 && $count % 2 == 0): ?>

								<?php endif; ?>


								<!-- post item -->
								<?php $this->load->view('post/_post_item', ['item' => $item]); ?>
								<!-- /.post item -->

								<?php if ($count == 1): ?>

									<?php $this->load->view("partials/_ad_spaces", ["ad_space" => "index_top"]); ?>

									<!-- increment count -->
								<?php endif; ?>

								<?php $count++;

                                ?>

							<?php endforeach; ?>
						</div>
					</div><!-- /.posts -->
<!--                            <div class="divider divider-primary">-->
<!--                                <div class="divider-text">-->
<!---->
<!--                                    <a href="--><?php //echo base_url(); ?><!--boec" type="button" class="btn btn-outline-primary waves-effect">--><?php //echo html_escape(trans("more")); ?><!-- --><?php //echo html_escape(trans("post")); ?><!-- </a>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
					<div class="col-xs-12 col-sm-12 col-xs-12">
						<div class="row">
							<?php $this->load->view("partials/_ad_spaces", ["ad_space" => "index_bottom"]); ?>
						</div>
					</div>

                            <div class="col-xs-12 col-sm-12 col-xs-12">
                                <div class="row">
                                <div class="card-body">
							<?php echo $this->pagination->create_links(); ?>
                                </div>
                                </div>
                            </div>



				</div>

			</div>

                    <section id="component-swiper-centered-slides">
                        <div class="card bg-transparent shadow-none">

                            <div class="card-body">
                                <div class="swiper-centered-slides swiper-container p-1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide rounded swiper-shadow">
                                            <a href=""><img src="http://asoiu.edu.az/public/user/assets/img/tehsil.png"></a>
<!--                                            <i data-feather="play" class="font-large-1"></i>-->
<!--                                            <div class="swiper-text pt-md-1 pt-sm-50">Azərbaycan Respublikası Elm və Təhsil Nazirliyi</div>-->
                                        </div>
                                        <div class="swiper-slide rounded swiper-shadow">
                                            <a href=""><img src="http://asoiu.edu.az/public/user/assets/img/tehsil.png"></a>
                                            <!--                                            <i data-feather="play" class="font-large-1"></i>-->
                                            <!--                                            <div class="swiper-text pt-md-1 pt-sm-50">Azərbaycan Respublikası Elm və Təhsil Nazirliyi</div>-->
                                        </div>
                                        <div class="swiper-slide rounded swiper-shadow">
                                            <i data-feather="dollar-sign" class="font-large-1"></i>
                                            <div class="swiper-text pt-md-1 pt-sm-50">Dövlət İmtahan Mərkəzi</div>
                                        </div>
                                        <div class="swiper-slide rounded swiper-shadow">
                                            <i data-feather="dollar-sign" class="font-large-1"></i>
                                            <div class="swiper-text pt-md-1 pt-sm-50">Dövlət İmtahan Mərkəzi</div>
                                        </div>
                                        <div class="swiper-slide rounded swiper-shadow">
                                            <i data-feather="help-circle" class="font-large-1"></i>
                                            <div class="swiper-text pt-md-1 pt-sm-50">ADNSU</div>
                                        </div>
                                        <div class="swiper-slide rounded swiper-shadow">
                                            <i data-feather="file-text" class="font-large-1"></i>
                                            <div class="swiper-text pt-md-1 pt-sm-50">Şirkət</div>
                                        </div>
                                        <div class="swiper-slide rounded swiper-shadow">
                                            <i data-feather="archive" class="font-large-1"></i>
                                            <div class="swiper-text pt-md-1 pt-sm-50">Şirkət</div>
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </section>

			<div class="col-xs-12 col-sm-12 col-md-4">
				<!--Sidebar-->
				<?php // $this->load->view('partials/_sidebar'); ?>
			</div><!--/col-->

		</div>
	</div>
        </div>
        <!--/ Blog List Items -->

        <!-- Pagination -->
        <script src="<?php echo base_url(); ?>v2/app-assets/js/scripts/pagination/components-pagination.js"></script>
        <script src="<?php echo base_url(); ?>v2/app-assets/vendors/js/pagination/jquery.twbsPagination.min.js"></script>
        <!--/ Pagination -->
    </div>
    <!--/ Blog List -->

</div>
</div>
<!-- /.Section: main -->