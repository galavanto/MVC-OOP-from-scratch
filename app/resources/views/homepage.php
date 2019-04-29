<?php include __APP__.'/resources/inc/header.php' ?>
<?php include __APP__.'/resources/inc/navbar.php' ?>

        <div class="maincontainer">
            <div class="visualContainer">


                <div class="allListings">
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
        </div>





<?php include __APP__.'/resources/inc/footer.php' ?>


