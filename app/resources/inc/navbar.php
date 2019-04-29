
<div class="container_nav">
</div>
    <div class="navbar">
        <div class="brand">
            <a href="/" class="brand">Gunda</a>
        </div>
        <div class="leftSide">
            <a href="/" class="leftSideLinks">Home</a>
            <?php 
                if(Auth::loggedIn()){
                    echo '<a href="/user/listings" class="leftSideLinks">My listings</a>';
                    echo '<a href="/user" class="leftSideLinks">My profile</a>';
                } 
            ?>
        </div>
        <div class="rightSide">
            <?php 
                if(Auth::loggedIn()){
                    echo '<a href="/user" class="loggedInLinks" style="margin-right:20px;">'.Auth::username().'</a>';
                    echo '<a href="/logout" class="loggedInLinks">Logout</a>';
                }else{

                    echo '<a href="/signup" class="loggedInLinks">Register</a>';
                    echo '<a href="/signin" class="loggedInLinks">Login</a>';
                }     
            ?>   
        </div>

            
            
    </div>

