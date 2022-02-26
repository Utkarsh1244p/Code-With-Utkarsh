  <!-- LOGIN MODAL -->
  <div class="modal" id="LoginModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header bg-primary text-light">
          <h4 class="modal-title ">Login</h4>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form>
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
          </form>
        </div>

        <!-- Modal footer -->
        <!-- <div class="d-grid gap-2 mx-1 my-1">
          <button class="btn btn-success" type="button">Login</button>
        </div> -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" data-dismiss="modal">Submit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
