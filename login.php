<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> mariokart8 login</title>
  </head>
  <body>
    <?php require_once("tmp/header.php"); ?>
    <form method="POST" action="login.post.php">
      <p>
        id : <input type="text" name="login_id"></p>
      <p>
        password : <input type="password" name="login_pw"></p>
      <p>
        <input type="submit" value="login"></p>
    </form>
  </body>
</html>
