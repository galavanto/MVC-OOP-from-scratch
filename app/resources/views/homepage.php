<?php include __APP__.'/resources/inc/header.php' ?>
<?php include __APP__.'/resources/inc/navbar.php' ?>

        <div class="maincontainer">
            <div class="visualContainer">

                <div class="listingCard">
                    <div class="photos">
                    </div>
                    <div class="information">
                    </div>
                </div>
            <?php 
                foreach($listings as $listing){
                    include __APP__.'/resources/inc/components/listing_card.php';

                }
            ?>
            
            </div>
        </div>





<?php include __APP__.'/resources/inc/footer.php' ?>


