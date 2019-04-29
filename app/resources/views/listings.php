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
                // Loop through all listings
                    if(isset($listings)){
                        foreach($listings as $listing){
                        ?>
                            <div class="listing_card">
                                <div class="card_background">
                                    <div class="card_holder">
                                        <div class="card_header">
                                            <div class="card_photo">
                                            PHOTO
                                            </div>
                                            <div class="card_descripter">
                                                <?php echo $listing['streetname'] . ' ' . $listing['housenumber'] . '<br>'; ?>
                                                <?php echo $listing['city']."<br>"; ?>
                                                POSTALCODE<br>
                                                SALESPRICE
                                            </div>
                                        </div>
                                        <div class="card_body">
                                            <div class="card_description">
                                            DESCRIPTION
                                            </div>
                                        </div>
                                        <div class="card_footer">
                                            <div class="user_info_listing">
                                                <small>Posted by: <?php echo $listing['username'] ?></small>
                                            </div>
                                            <div class="info_listing">
                                                <small>LISTED AT: DATE DATE DATE</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <?php
                        // End of foreach
                        }
                    // If there are no listing then..
                    }else{
                        echo "no listings";
                    }
                    
                    ?>
                </div>

            </div>
            <div class="border">
            </div>
        </div>


<?php include __APP__.'/resources/inc/footer.php' ?>


