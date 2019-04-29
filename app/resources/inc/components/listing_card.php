


                <div class="listing_card">
                        <div class="card_background">
                            <div class="card_holder">
                                <!-- Header -->
                                <div class="card_header">
                                    <div class="card_photo">
                                        PHOTO
                                    </div>
                                    <div class="card_descripter">
                                        <h3>&euro; 150.000</h3><br>
                                        <?php echo $listing['streetname'] . " " . $listing['housenumber'] ?><br>
                                        <?php echo $listing['city'] ?><br>

                                    </div>
                                </div>
                                
                                <!-- Body -->
                                <div class="card_body">
                                    <div class="card_description">
                                           <?php echo $listing['description'] ?>
                                    </div>
                                </div>
                                <!-- Footer -->
                                <div class="card_footer">
                                    <div class="user_info_listing">
                                       <small></small>
                                    </div>
                                    <div class="info_listing">
                                        <small>listed at: <?php echo(date("d-m-Y",strtotime($listing['created_at'])));?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>