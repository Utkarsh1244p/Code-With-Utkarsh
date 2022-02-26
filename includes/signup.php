  <!--SIGNUP MODAl-->
  <div class="modal" id="SignupModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header bg-primary text-light">
          <h4 class="modal-title ">Signup</h4>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form>
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"><img src="Logo/baseline_person_black_24dp.png"
                  alt=""></span>
              <input type="text" class="form-control" placeholder="Full Name" aria-label="Username"
                aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap my-3">
              <span class="input-group-text" id="addon-wrapping"><img src="Logo/baseline_call_black_24dp.png"
                  alt=""></span>
              <input type="phone" class="form-control" placeholder="Phone Number" aria-label="Username"
                aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"><img src="Logo/baseline_email_black_24dp.png"
                  alt=""></span>
              <input type="text" class="form-control" placeholder="Email" aria-label="Username"
                aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap my-3">
              <span class="input-group-text" id="addon-wrapping"><img src="Logo/baseline_lock_black_24dp.png"
                  alt=""></span>
              <input type="password" class="form-control" placeholder="Password" aria-label="Username"
                aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap my-3">
              <span class="input-group-text" id="addon-wrapping"><img src="Logo/baseline_school_black_24dp.png"
                  alt=""></span>
              <input type="text" class="form-control" placeholder="College" aria-label="Username"
                aria-describedby="addon-wrapping">
            </div>
            <label class="labels mx-3">I'm a</label>
            <input type="radio" id="male" name="gender" value="Male">Male
            <input type="radio" id="female" name="gender" value="Female">Female
          </form>
        </div>
        <div class="d-grid gap-2 mx-1">
          <button class="btn btn-success" type="button">Create Account</button>
        </div>
        <div class="foot">
          <p class="a">Already have an account?<a href="#" data-toggle="modal" data-target="#LoginModal" class="log"
              data-dismiss="modal">Login</a></p>
        </div>
        <!-- Modal footer -->
        <!-- <div class="modal-footer">
                    <button type="submit" class="btn btn-success" data-dismiss="modal">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div> -->
      </div>
    </div>
  </div>

