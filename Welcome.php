<?PHP
  // form handler
  if($_POST && isset($_POST['sendfeedback'], $_POST['name'], $_POST['email'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    // $subject = $_POST['subject'];
    // $message = $_POST['message'];

    if(!$name) {
      $errorMsg = "Please enter your Name";
    } elseif(!$email || !preg_match("/^\S+@\S+$/", $email)) {
      $errorMsg = "Please enter a valid Email address";
    } else {
      // send email and redirect

    }

  }
?>