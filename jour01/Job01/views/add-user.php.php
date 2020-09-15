<?php
include('../models/Utilisateurs.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
<?php
  if (isset($_POST['valid'])) {
                        $user = new Utilisateurs_model;
                        $user_sign = $user->adduser($_POST['firstname'], $_POST['lastname'], $_POST['email']);
                    }
                    ?>
                    <form type="post">
   <div class="form-group">
    <label>Firstname</label>
    <input type="text" class="form-control" id="firstname " name="firstname" required=""/>
  </div>
   <div class="form-group">
    <label>Lastname</label>
    <input type="text" class="form-control" id="lastname" name="lastname" required=""/>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required=""/>
  </div>
  <button type="submit" id="valid" name="valid" class="btn btn-primary">Submit</button>
</form>



</body>
</html>