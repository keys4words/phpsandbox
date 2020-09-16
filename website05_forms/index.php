<?php
    $msg = '';
    $msgClass = '';


    if(filter_has_var(INPUT_POST, 'submit')){
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if(!empty($email) && !empty($name) && !empty($message)){
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            }else{
              
              $toEmail = 'support@yandex.ru';
              $subject = 'Contact Request From'.$name;
              $body = '<h3>Contact Request</h3>
              <h4>Name</h4><p>'.$name.'</p>
              <h4>Email</h4><p>'.$email.'</p>
              <h4>Message</h4><p>'.$message.'</p>';

              $headers = "MIME-Version: 1.0"."\r\n";
              $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";
              $headers .= "From: ".$name."<".$email.">"."\r\n";
              if(mail($toEmail, $subject, $body, $headers)){
                $msg = 'Your email has been sent!';
                $msgClass = 'alert-success';
              } else{
                $msg = 'Your email was NOT sent!';
                $msgClass = 'alert-danger';
              }
            }
        } else {
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cosmo/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  </div>
</nav>
<div class="container mt-5">
<?php if($msg != ''): ?>
    <div class="alert <?php echo $msgClass; ?>">
        <?php echo $msg; ?>
    </div>
<?php endif; ?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="message">Message</label>
      <textarea class="form-control" id="message" rows="3" name="message">
      <?php echo isset($_POST['message']) ? $message : ''; ?>
      </textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      
    
</form>
</div>



</body>
</html>