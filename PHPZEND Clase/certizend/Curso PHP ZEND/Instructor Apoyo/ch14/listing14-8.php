<?php
   function authenticate_user() {
      header('WWW-Authenticate: Basic realm="Secret Stash"');
      header("HTTP/1.0 401 Unauthorized");
      exit;
   }

   if(! isset($_SERVER['PHP_AUTH_USER'])) {
      authenticate_user();
   } else {
      // Connect to the MySQL database
         $conn = mysql_connect("localhost", "jason", "secret");

        $db = mysql_select_db("corporate");

      // Create and execute the selection query.
      $query = "SELECT username, pswd FROM userauth
                WHERE username='$_SERVER[PHP_AUTH_USER]' AND
                pswd=MD5('$_SERVER[PHP_AUTH_PW]') AND
                ipaddress='$_SERVER[REMOTE_ADDR]'";

      $result = mysql_query($conn, $query);
      // If nothing was found, reprompt the user for the login information.
      if (mysql_num_rows($result) == 0) {
         authenticate_user();
      }
      else {
         echo "Welcome to the secret archive!";
      }
   }
?>