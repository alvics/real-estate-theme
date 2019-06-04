<?php $img = get_field( '3_cards_section' ); ?>


<?php $card_4 = get_field( 'card_4' ); ?>
<!-- 3 Card section -->
<div class="container marketing">
    <h3 class="heading-rental mb-3"><?php echo $img['heading']; ?></h3>
    <!-- Card 1 -->
    <div class="row mb-4">
        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $img['card_1']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="features">
                        <p><i class="fa fa-hotel"> <?php echo $card_4['bedrooms']; ?></i></p>
                        <p><i class="fa fa-bathtub"> <?php echo $card_4['bathrooms']; ?></i></p>
                        <p><i class="fa fa-crop"> <?php echo $card_4['land_size']; ?></i></p>
                    </div>
                    <h5 class="card-title"><?php echo $card_4['title']; ?></h5>
                    <p class="card-text lead"><?php echo $card_4['description']; ?></p>
                    <!--					<a href="#" class="btn btn-primary">Go somewhere</a>-->
                    <div class="contract">
						<?php echo $card_4['contract']; ?>
                    </div>
                </div>
            </div>
        </div><!-- /.col-lg-4 -->
	    <?php $card_2 = get_field( 'card_2' ); ?>
        <!-- Card 2 -->
        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $img['card_2']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="features">
                        <p><i class="fa fa-hotel"> <?php echo $card_2['bedrooms']; ?></i></p>
                        <p><i class="fa fa-bathtub"> <?php echo $card_2['bathrooms']; ?></i></p>
                        <p><i class="fa fa-crop"> <?php echo $card_2['land_size']; ?></i></p>
                    </div>
                    <h5 class="card-title"><?php echo $card_2 ['title']; ?></h5>
                    <p class="card-text lead"><?php echo $card_2 ['description']; ?></p>
                    <!--					<a href="#" class="btn btn-primary">Go somewhere</a>-->
                    <div class="contract">
						<?php echo $card_2 ['contract']; ?>
                    </div>
                </div>
            </div>
        </div><!-- /.col-lg-4 -->
	    <?php $card_3 = get_field( 'card_3' ); ?>
        <!-- Card 3 -->
        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $img ['card_3']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="features">
                        <p><i class="fa fa-hotel"> <?php echo $card_3 ['bedrooms']; ?></i></p>
                        <p><i class="fa fa-bathtub"> <?php echo $card_3 ['bathrooms']; ?></i></p>
                        <p><i class="fa fa-crop"> <?php echo $card_3 ['land_size']; ?></i></p>
                    </div>
                    <h5 class="card-title"><?php echo $card_3 ['title']; ?></h5>
                    <p class="card-text lead"><?php echo $card_3 ['description']; ?></p>
                    <!--					<a href="#" class="btn btn-primary">Go somewhere</a>-->
                    <div class="contract">
						<?php echo $card_3 ['contract']; ?>
                    </div>
                </div>
            </div>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    <!-- 3 /.card section -->
