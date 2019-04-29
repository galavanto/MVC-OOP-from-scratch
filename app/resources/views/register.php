<?php include __APP__.'/resources/inc/header.php' ?>

    <div class="signupformcontainer">

        <form action="/user/save" method="POST">
          <div class="container">
            <h1>Register</h1>
            
            <p>Please fill in this form to create an account.</p>
              <?php
                // if(isset($_SESSION['errors'])){
                //     echo '<div class="error">'.$_SESSION['errors'].'</div>';
                //     echo '<br/>';
                // }
              ?>
                <div class="signupformfield">
                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>
                    
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>


                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>


                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                </div>

            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <button type="submit" class="registerbtn">Register</button>
          

            <div class=" signin">
              <p>Already have an account? <a href="/signin">Sign in</a>.</p>
            </div>
          </div>
        </form>
    </div>

<?php include __APP__.'/resources/inc/footer.php' ?>