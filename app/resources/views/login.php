<?php include __APP__.'/resources/inc/header.php' ?>



    <div class="loginformcontainer">
        <form action="/login" method="POST">
          <div class="container">
            <div class="header">
              <h1>Login</h1>
            </div>
            


                <div class="loginformfield">

                    <input type="text" placeholder="Enter Username" name="username" required>



                    <input type="password" placeholder="Enter Password" name="psw" required>


                </div>

            <br>
            <button type="submit" class="loginbtn">Login</button>
          
            <br><br>
            <div class="signin">
              <p>Don't have an account? <a href="/signup">Sign up</a>.</p>
            </div>
          </div>
        </form>
    </div>

<?php include __APP__.'/resources/inc/footer.php' ?>