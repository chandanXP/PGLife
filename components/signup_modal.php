<!--Sign up Modal -->
<div class="modal fade" id="sign_up_modal" tabindex="-1" aria-labelledby="sign_up_modal" aria-hidden="true">
     <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Sign up with PGLife</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                    <form method="post" id="signup-form" class="form" role="form" action="api/signup_submit.php">
                         <div class="mb-3 input_elements">
                              <div class="px-2"><i class="fas fa-user"></i></div>
                              <input type="text" name="full_name" maxlength="30" minlength="1" placeholder="Full Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                         </div>
                         <div class="mb-3 input_elements">
                              <div class="px-2"><i class="fas fa-phone"></i></div>
                              <input type="tel" placeholder="Phone Number" name="phone_number" maxlength="10" minlength="10" class="form-control" id="exampleInputPassword1">
                         </div>
                         <div class="mb-3  input_elements">
                              <div class="px-2"><i class="fas fa-envelope"></i></div>
                              <input type="email" placeholder="Email" name="email" class="form-control" id="exampleInputPassword1">
                         </div>
                         <div class="mb-3 input_elements">
                              <div class="px-2"><i class="fas fa-lock"></i></div>
                              <input type="password" placeholder="Password" name="password" minlength="6" class="form-control" id="exampleInputPassword1">
                         </div>
                         <div class="mb-3 input_elements">
                              <div class="px-2"><i class="fas fa-university"></i></div>
                              <input type="text" placeholder="College" name="college" maxlength="150" class="form-control" id="exampleInputPassword1">
                         </div>
                         <!-- checkbox -->
                         <div class="form-check" >
                              <span>I'm a</span>
                              <input type="radio" class="ml-3" name="gender" id="male" value="male" > Male
                              <label for="gender-male"  >
                              </label>
                              <input type="radio" class="ml-3" name="gender" id="female" value="female" >
                              <label for="gender-female" >
                                   Female
                              </label>
                         </div>
                         <button type="submit" class="w-100 sign_up_btn">Create Account</button>
                    </form>
               </div>
               <div class="modal-footer">
                    <p>Already have an accout?
                         <a style="text-decoration: none;" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#login_modal" href="#">
                              Login
                         </a>
                    </p>
               </div>
          </div>
     </div>
</div>

