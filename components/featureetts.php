<!-- START THE FEATURE HOMES -->
<?php $feature_home = get_field( 'feature_home_1' ); ?>

<!-- Title of Section -->
<h3 class="heading-for-sale mt-4 mb-4"><?php echo $feature_home['title']; ?></h3>
<br>
<!-- FEATURE HOMES 1 -->
<div class="row featurette">

    <div class="col-md-7">

        <h4 class="featurette-heading"><?php echo $feature_home['heading']; ?> <span class="text-muted">It’ll blow your mind.</span>
        </h4>
        <p class="lead"><?php echo $feature_home['text_area']; ?></p>
        <div class="features">
            <p><i class="fa fa-hotel"> <?php echo $feature_home['bedrooms']; ?></i></p>
            <p><i class="fa fa-bathtub"> <?php echo $feature_home['bathrooms']; ?></i></p>
            <p><i class="fa fa-crop"> <?php echo $feature_home['land_size']; ?></i></p>
        </div>

	    <?php

	    $images = get_field('gallery');

	    if( $images ): ?>
            <ul class="row list-unstyled">
			    <?php foreach( $images as $image ): ?>
                    <li class="col-lg-4">
                        <a href="<?php echo $image['url']; ?> " class="gallery-item">
                            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid"/>
                        </a>
                        <p><?php echo $image['caption']; ?></p>
                    </li>
			    <?php endforeach; ?>
            </ul>
	    <?php endif; ?>


    </div>
    <div class="col-md-5">
        <img src="<?php echo $feature_home['add_image']; ?>" alt="">
    </div>
</div>

<!-- FEATURE HOMES 2 -->
<?php $feature_home_2 = get_field( 'feature_home_02' ); ?>
<div class="row featurette">

    <div class="col-md-7 order-md-2">

        <h4 class="featurette-heading"><?php echo $feature_home_2['heading']; ?> <span class="text-muted">See for yourself.</span>
        </h4>
        <p class="lead"><?php echo $feature_home_2['text_area']; ?></p>
        <div class="features">
            <p><i class="fa fa-hotel"> <?php echo $feature_home_2['bedrooms']; ?></i></p>
            <p><i class="fa fa-bathtub"> <?php echo $feature_home_2['bathrooms']; ?></i></p>
            <p><i class="fa fa-crop"> <?php echo $feature_home_2['land_size']; ?></i></p>
        </div>
	    <?php

	    $images = get_field('gallery_2');

	    if( $images ): ?>
            <ul class="row list-unstyled">
			    <?php foreach( $images as $image ): ?>
                    <li class="col-lg-4">
                        <a href="<?php echo $image['url']; ?> " class="gallery-item">
                            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid"/>
                        </a>
                        <p><?php echo $image['caption']; ?></p>
                    </li>
			    <?php endforeach; ?>
            </ul>
	    <?php endif; ?>

    </div>
    <div class="col-md-5 order-md-1">
        <img src="<?php echo $feature_home_2['add_image']; ?>" alt="">
    </div>
</div>

<!-- FEATURE HOMES 3 -->
<?php $feature_home_3 = get_field( 'feature_home_3' ); ?>
<div class="row featurette">

    <div class="col-md-7">

        <h4 class="featurette-heading"><?php echo $feature_home_3['heading']; ?> <span
                    class="text-muted">Checkmate.</span></h4>
        <p class="lead"><?php echo $feature_home_3['text_area']; ?></p>
        <div class="features">
            <p><i class="fa fa-hotel"> <?php echo $feature_home_3['bedrooms']; ?></i></p>
            <p><i class="fa fa-bathtub"> <?php echo $feature_home_3['bathrooms']; ?></i></p>
            <p><i class="fa fa-crop"> <?php echo $feature_home_3['land_size']; ?></i></p>
        </div>
	    <?php

	    $images = get_field('gallery_3');

	    if( $images ): ?>
            <ul class="row list-unstyled">
			    <?php foreach( $images as $image ): ?>
                    <li class="col-lg-4">
                        <a href="<?php echo $image['url']; ?> " class="gallery-item">
                            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid"/>
                        </a>
                        <p><?php echo $image['caption']; ?></p>
                    </li>
			    <?php endforeach; ?>
            </ul>
	    <?php endif; ?>

    </div>
    <div class="col-md-5">
        <img src="<?php echo $feature_home_3['add_image_3']; ?>" alt="">
    </div>
</div>

<!-- /END THE FEATURE HOMES -->
