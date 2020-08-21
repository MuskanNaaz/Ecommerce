<div class="container" style="margin-top:7%;" >
    <div class="row">
       <div class="col-lg-6">
           <img src="../assets/img/core-img/undraw_online_groceries_a02y.svg" alt="">
       </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-light h4">Login</div>
                <div class="card-body">
                    <form action="#" method="post">
                                        <div class="form-group">
                                            <p class="">Email address</p>
                                            <input type="email" class="form-control" placeholder="" required="">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                                with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <p class="">Password</p>
                                            <input type="password" class="form-control" placeholder="" required="">
                                        </div>
                                        <button type="submit" class="btn essence-btn" name="login">Sign In</button>
                                    </form>
                                    <hr>
                                    <h4>OR</h4>
                                    <center><button type="submit" class="btn essence-btn" >Sign In with Google</button>
                                    <p>Don't have an account Yet ? <br>
       Click here for <a href="" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Registration</a> </p>
               </center>
                </div>
            </div>
        </div>
    </div>
</div>
      <!-- ##### Registration Collapas ##### -->
      <?= $this->session->flashdata('success');?>
     <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <form action="<?= base_url('User/user_reg');?>" method="post">
                                        <div class="form-group">
                                            <p class="">Name</p>
                                            <input type="text" class="form-control" id="name" placeholder="" required="" name="name">
                                        </div>
                                        <div class="form-group">
                                            <p class="">Email</p>
                                            <input type="email" class="form-control" id="email" placeholder="" required="" name="email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                                with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <p class="">Create Password</p>
                                            <input type="password" class="form-control" id="password1" placeholder="" required name="createpwd">
                                        </div>
                                        <div class="form-group">
                                            <p class="">Confirm Password</p>
                                            <input type="password" class="form-control" id="password2" placeholder="" required="" name="confirmpwd">
                                        </div>
                                        <div class="form-group">
                                            <p class="">Mobile</p>
                                            <input type="text" class="form-control" id="mobile" placeholder="" required="" name="mobile">
                                        </div>
                                        <button type="submit" class="btn essence-btn" id="user_reg" name="reg">Sign In</button>
                                    </form>
      </div>
    </div>
    <!--  -->
    </div>
  </div>
</div>
    