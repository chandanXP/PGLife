<div class="modal fade" id="login_modal" tabindex="-1" aria-labelledby="login_modal" aria-hidden="true">
     <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title">Login to PGLife</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                    <form id="login-form" method="post" class="form" role="form" action="api/login_submit.php">
                         <div class="mb-3 input_elements">
                              <div class="px-2"><i class="fas fa-envelope"></i></div>
                              <input type="email" class="form-control" placeholder="Email" name="email">
                         </div>
                         <div class="mb-3 input_elements">
                              <div class="px-2"><i class="fas fa-lock"></i></div>
                              <input type="password" class="form-control" placeholder="Password" name="password">
                         </div>
                         <button type="submit" class="login_button w-100">LOGIN</button>
                    </form>
               </div>
               <div class="modal-footer">
                    <p>New user? <a style="text-decoration: none;" href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#sign_up_modal">Sign up</a></p>
               </div>
          </div>
     </div>
</div>
