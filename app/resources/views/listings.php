<?php include __APP__.'/resources/inc/header.php' ?>
<?php include __APP__.'/resources/inc/navbar.php' ?>

        <div class="listing_container">
            <div class="border">
            </div>
            <div class="listing_visual_container">
                <div class="infoMenu">
                    <div onclick="location.href='/new/listing';" class="new_listing_button">
                        <div class="add_icon">
                            +
                        </div>
                        <div class="text_listing_button">
                        New Listing
                        </div>
                    </div>
                </div>

                <div class="all_listings">
                <?php 
                // Geef alle listings weer
                    if(isset($listings)){
                        foreach($listings as $listing){
                            include __APP__.'/resources/inc/components/listing_card.php';
                        }
                    }else{
                        echo "No listings found";
                    }
                ?>
                </div>

            </div>
            <div class="border">
            </div>
        </div>


<?php include __APP__.'/resources/inc/footer.php' ?>


