<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
$total_vote = $reactions->re_like + $reactions->re_dislike + $reactions->re_love + $reactions->re_funny + $reactions->re_angry + $reactions->re_sad + $reactions->re_wow;
$per_rate = 100;
if ($total_vote >= 100) {
	$per_rate = 200;
}
if ($total_vote >= 200) {
	$per_rate = 300;
}
if ($total_vote >= 300) {
	$per_rate = 500;
}
if ($total_vote >= 500) {
	$per_rate = 800;
}
$re = 're_' . $reaction;
$re_vote = $reactions->$re;
$re_percentage = round((($reactions->$re) / $per_rate) * 100, 2);

$file_ext = '.gif';
$emoji_class = '';
if ($this->general_settings->emoji_reactions_type == 'png') {
	$file_ext = '.png';
	$emoji_class = ' icon-cnt-png';
}

?>

<?php if (isset($_SESSION['inf_reaction_vote_count_' . $reactions->post_id]) && $_SESSION['inf_reaction_vote_count_' . $reactions->post_id] < 3): ?>
	<div class="col-reaction col-reaction-like" onclick="make_reaction('<?php echo $reactions->post_id; ?>', '<?php echo $reaction; ?>', '<?php echo $emoji_lang; ?>');">
		<div class="col-sm-12">
			<div class="row">
				<div class="icon-cnt<?php echo $emoji_class; ?>">
                    &#128077;
				</div>
			</div>
			<div class="row">
				<div class="progress progress-bar-vertical">
					<span class="span-vote"><?php echo $re_vote; ?></span>
					<div class="progress-bar <?php echo (is_reaction_voted($reactions->post_id, $reaction) == true) ? 'progress-bar-voted' : ''; ?>" role="progressbar" aria-valuenow="<?php echo $re_percentage; ?>" aria-valuemin="0" aria-valuemax="100"
						 style="height: <?php echo $re_percentage; ?>%;"></div>
				</div>
			</div>
			<div class="row m-t-5">
				<button class="btn <?php echo (is_reaction_voted($reactions->post_id, $reaction) == true) ? 'btn btn-info' : ''; ?>  waves-effect me-1 mb-1">
					<span><?php echo trans($reaction); ?></span>
				</button>
			</div>
		</div>
	</div>
<?php else: ?>

	<?php if (is_reaction_voted($reactions->post_id, $reaction) == true): ?>

		<div class="col-reaction col-reaction-like" onclick="make_reaction('<?php echo $reactions->post_id; ?>', '<?php echo $reaction; ?>', '<?php echo $emoji_lang; ?>');">
			<div class="col-sm-12">
				<div class="row">
					<div class="icon-cnt<?php echo $emoji_class; ?>">
                        &#128077;
					</div>
				</div>
				<div class="row">
					<div class="progress progress-bar-vertical">
						<span class="span-vote"><?php echo $re_vote; ?></span>
						<div class="progress-bar <?php echo (is_reaction_voted($reactions->post_id, $reaction) == true) ? 'progress-bar-voted' : ''; ?>" role="progressbar" aria-valuenow="<?php echo $re_percentage; ?>" aria-valuemin="0" aria-valuemax="100"
							 style="height: <?php echo $re_percentage; ?>%;"></div>
					</div>
				</div>
				<div class="row m-t-5">
					<button class="btn <?php echo (is_reaction_voted($reactions->post_id, $reaction) == true) ? 'btn btn-info' : ''; ?> waves-effect me-1 mb-1">
						<span><?php echo trans($reaction); ?></span>
					</button>
				</div>
			</div>
		</div>

	<?php else: ?>
		<div class="col-reaction col-reaction-like col-disable-voting">
			<div class="col-sm-12">
				<div class="row">
					<div class="icon-cnt<?php echo $emoji_class; ?>">
                        &#128077;
					</div>
				</div>
				<div class="row">
					<div class="progress progress-bar-vertical">
						<span class="span-vote"><?php echo $re_vote; ?></span>
						<div class="progress-bar <?php echo (is_reaction_voted($reactions->post_id, $reaction) == true) ? 'progress-bar-voted' : ''; ?>" role="progressbar" aria-valuenow="<?php echo $re_percentage; ?>" aria-valuemin="0" aria-valuemax="100"
							 style="height: <?php echo $re_percentage; ?>%;"></div>
					</div>
				</div>
				<div class="row m-t-5">
					<button class="btn btn-outline-info waves-effect me-1 mb-1">
						<span><?php echo trans($reaction); ?></span>
					</button>
				</div>
			</div>
		</div>
	<?php endif; ?>
<?php endif; ?>
