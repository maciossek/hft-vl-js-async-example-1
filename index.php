<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <script src="script.js" type="text/javascript"></script>
  </head>
  <body>
    <form id="guestbook-form" action="?login=1" method="post">
      Name<br>
      <input type="name" size="40" maxlength="250" name="name"><br><br>

      Text<br>
      <textarea name="message"></textarea>
      <input id="submit" type="submit" value="Abschicken">
    </form>
    Result:
    <div id="result"></div>
  </body>
</html>
