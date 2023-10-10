<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $subcomments = get_subcomments($parent_comment->id); ?>
<?php if (!empty($subcomments)): ?>

				<?php foreach ($subcomments as $subcomment):
					$subcomment_user = null;
					if (!empty($subcomment->user_id)) {
						$subcomment_user = get_user($subcomment->user_id);
					} ?>

    <div class="card" style="margin-left: 70px;">
        <div class="card-body">

            <div class="d-flex align-items-start">
                        <?php if (!empty($subcomment_user)): ?>
                    <div class="avatar me-75">
									<img src="<?php echo get_user_avatar($subcomment_user); ?>" width="38" height="38" alt="<?php echo html_escape($subcomment_user->username); ?>">
                    </div>
                        <?php else: ?>
                    <div class="avatar me-75">
							<img src="<?php echo get_user_avatar_by_id($subcomment->user_id); ?>" width="38" height="38" alt="<?php echo html_escape($subcomment->name); ?>">
                    </div>
							<?php endif; ?>

                        <div class="author-info">
								<?php if (!empty($subcomment_user)):  ?>
                            <h6 class="fw-bolder mb-25"><?php echo html_escape($subcomment_user->username); ?></h6>
								<?php else: ?>
                            <h6 class="fw-bolder mb-25"><?php echo html_escape($subcomment->name); ?></h6>
								<?php endif; ?>
                            <p class="card-text">
                            <?php echo time_ago($subcomment->created_at); ?>
                            </p>

                            <p class="card-text">
								<?php echo html_escape($subcomment->comment); ?>
							</p>

								<?php if (auth_check()):
									if ($subcomment->user_id == user()->id || user()->role == "admin"): ?>
										<a href="javascript:void(0)" class="btn-delete-comment" onclick="delete_comment('<?php echo $subcomment->id; ?>','<?php echo $subcomment->post_id; ?>','<?php echo trans("confirm_comment"); ?>');">
                                            <div class="d-inline-flex align-items-center">
                                                <i class=" font-medium-3 me-50" data-feather="trash-2"></i>
                                                <span><?php echo trans("delete"); ?></span>
                                            </div>
                                        </a>
									<?php endif;
								endif; ?>
						</div>
            </div>
        </div>
    </div>
                <?php endforeach; ?>



<?php endif; ?>
