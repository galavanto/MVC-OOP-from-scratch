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
                                    <input type="text" name="housenumber">

                                    Rooms
                                    <input type="number" min=0 name="rooms" value=1>
                                    Toilets
                                    <input type="number" min=0  name="toilets" value=1>

                                    Property size
                                    <input type="number" min=0 name="propertysquaremeter">

                                    Liveable area size
                                    <input type="number" min=0 name="livesquaremeter">

                                    Heating type
                                    <select name="heatingtype">
                                      <option value="cv">Central heating(Gas)</option>
                                      <option value="wood">Wood</option>
                                      <option value="heatpump">Heatpump</option>
                                      <option value="electric">Electric</option>
                                      <option value="none">None</option>
                                    </select> 

                                    Sale price
                                    <input type="number"  name="saleprice">
                                    Description
                                    <input type="test"  name="description">
                                </div>
                                <br>
                                <input type="submit" value="Submit">
                            </form> 
                        </div>
                    </div>
                </div>


            
            </div>
        </div>


<?php include __APP__.'/resources/inc/footer.php' ?>


