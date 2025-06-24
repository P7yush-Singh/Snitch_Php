<?php include "admin/includes/header.php"; ?>


<div class="py-5">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card-header">
          <h4> REGISTRATION FORM </h4>
        </div>
        <div class="card-body">

          <form>
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" placeholder="enter your name">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control"  placeholder="enter your email-id" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Phone</label>
              <input type="text" class="form-control"  placeholder="enter your phone number" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="enter your password">
            </div>
            <div class="mb-3">
              <label  class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" confrim password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>
</div>


<?php include 'admin/includes/footer.php'; ?>