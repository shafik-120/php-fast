<?php include "../index.php"; ?>
<style>
.gradient-custom {
/* fallback for old browsers */
background: #f093fb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}

</style>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form action="insert_register.php" method="post">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="full_name" id="firstName" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Full Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" name="user_name" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">User Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="password" name="password" class="form-control form-control-lg" id="birthdayDate" />
                    <label for="birthdayDate" class="form-label">Password</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">
                <div class="form-outline">
                    <input type="email" name="email" id="emailAddress" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <input type="number" name="number" id="phoneNumber" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <select name="gender" class="select form-control-lg">
                      <option value="0" selected disabled>Choose option</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="other">Other</option>
                    </select>
                    <label class="form-label" >Gender</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12"> 
                  <select name="roll" class="select form-control-lg">
                    <option value="1" selected disabled>Choose option</option>
                    <option value="2">Editor</option>
                    <option value="3">Viewer</option>
                    <option value="4">Commentor</option>
                  </select> 
                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" name="sumbit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
