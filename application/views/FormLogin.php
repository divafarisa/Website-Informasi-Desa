<!DOCTYPE html>
<html>
<head>
  <link href="<?php echo base_url();?>Assets/css/login.css" rel="stylesheet">
<title></title>
</head>
<body>
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="<?php echo base_url();?>C_Login/login" role="login">
          <img src="<?php echo base_url();?>Assets/img/logos/lambang_kota_batu.png" width="150" height="50">
          <input type="email" name="email" placeholder="Email" id="email" required class="form-control input-lg" value="" />
          
          <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
            <a href="#">Create account</a> or <a href="#">reset password</a>
          </div>
          
        </form>
        
        
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>
  
  
  <script src="<?php echo base_url();?>Assets/js/login.js"></script>
  
  
</div>
</body>
</html>