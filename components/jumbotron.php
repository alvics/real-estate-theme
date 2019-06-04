<?php $hero = get_field('hero'); ?>
<!-- Jumbotron section -->
<div class="jumbotron  jumbotron-fluid bg-primary text-white mb-4">

	<div class="container py-5">
		<h2 class="display-4"><?php echo $hero['title']; ?></h2>
		<?php echo $hero['description']; ?>

		<!-- Display link if there -->
		<?php if($hero['link_left_url'] && ['link_right_url'] ) : ?>

			<br/><a class="btn btn-success btn-lg" href="<?php echo $hero['link_left_url']; ?>"><?php echo $hero['link_left_text']; ?></a>
			<a class="btn btn-info btn-lg" href="<?php echo $hero['link_right_url']; ?>" ><?php echo $hero['link_right_text']; ?></a>

		<?php endif; ?>

	</div>
</div><!-- ./Jumbotron section -->
