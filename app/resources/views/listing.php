<?php include __APP__.'/resources/inc/header.php' ?>
<?php include __APP__.'/resources/inc/navbar.php' ?>

        <div class="maincontainer">
            <div class="visualContainer">
                <div class="centerContent">
                    <div class="form_div">
                        <div class="formHeader">
                            Add your listing 
                        </div>
                        <div class="addForm">
                            <form action="/new/listing" method="post">
                                <div class="formStyling">
                                    City
                                    <input type="text" name="city">
                                    Streetname
                                    <input type="text" name="streetname">
                                    Housenumber
                                    <input type="text" name="Housenumber">

                                    Rooms
                                    <input type="number" min=0 name="rooms" value=1>
                                    Toilets
                                    <input type="number" min=0  name="toilets" value=1>

                                    Property size
                                    <input type="number" min=0 name="propertysquaremeter">

                                    Liveable area size
                                    <input type="number" min=0 name="livesquaremeter">
                                </div>

                                <input type="submit" value="Submit">
                            </form> 
                        </div>
                    </div>
                </div>


            
            </div>
        </div>


<?php include __APP__.'/resources/inc/footer.php' ?>


