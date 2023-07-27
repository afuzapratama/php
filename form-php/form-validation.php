<!DOCTYPE html>
<html lang="en">

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Validation</title>
</head>

<body>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name"><br />
    E-mail: <input type="text" name="email"><br />
    Website: <input type="text" name="website"><br />
    Comment: <textarea name="comment" rows="5" cols="40"></textarea><br />
    <input type="submit" />
  </form>
</body>

</html>