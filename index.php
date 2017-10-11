<DOCTYPE html>
  <html>
    <head>
      <title>Ip checker</title>
    </head>
    <body>
      <?php
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR']
        echo $ip
      ?>

    </body>

  </html>
