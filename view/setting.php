      <?php
          $active = "setting";
           include_once './template/header.php';
        ?> 


               <div class="d-flex justify-content-center">
                <!-- Material form login --> 
                <div class="card" style=" margin-top: 100px; margin-bottom: 100px; width: 30%" style="background-image: url(ru.jpg); width: 28rem;">

                  <h5 class="card-header amber black-text text-center py-4">
                    <strong>Change New Password</strong>
                  </h5>

                  <!--Card content-->
                  <div class="card-body px-lg-5 pt-0">

                    <!-- Form -->
                    <form class="text-center" style="color: black;" action="../model/updatePass.php" method="post" name="users">

                        <div class="md-form">
                            <input type="text" id="materialLoginFormPassword" class="form-control" name="user" required>
                        <label for="materialLoginFormPassword">User Name</label>
                      </div>

                       <div class="md-form">
                           <input type="password" id="materialLoginFormPassword" class="form-control" name="passward" required>
                        <label for="materialLoginFormPassword">Old Password</label>
                      </div>

                      <!-- Password -->
                      <div class="md-form">
                        <input type="password" id="materialLoginFormPassword" class="form-control" name="newpass" required>
                        <label for="materialLoginFormPassword">New Password</label>

                      </div>
                <div class="md-form">
                        <input type="password" id="materialLoginFormPassword" class="form-control" name="confirmpass">
                        <label for="materialLoginFormPassword">Confirm Password</label>

                      </div>
                      <button class="btn btn-warning-white" style="background-color: #ffc107" type="submit" onclick="validate()"><b>Change Password</b></button>

                      <!-- Register -->


                    </form>

                      <script>
                          function validate(){



                var pass =document.forms["users"]["newpass"].value;
                var confirmpass= document.forms["users"]["confirmpass"].value;

                if(pass !== confirmpass){
                   alert("New Password doesn't match")
                    //header("Location: /onlineStudentCleranceSystem/MDB-Free_4.8.2/ruth/r.html");
                }


                }
                          </script>
                          </div>
                          </div>
                          </div>
              

                   <?php
                       include_once './template/footer.php';
                        ?> 

  