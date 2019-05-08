<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Login</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
<!-- no additional media querie or css is required -->
<body>
<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url();?>Connexion.html" method="POST" autocomplete="off">
                            <div class="form-group">
                                <input type="text" class="form-control" name="login">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button type="submit" id="sendlogin" class="btn btn-primary">login</button>
                        </form>
                    </div>
                </div>
                    <p><?php if(isset($error)){
                        echo $error;
                    } ?>
                    </p>
            </div>
        </div>
    
    </div>
</body>
</html>