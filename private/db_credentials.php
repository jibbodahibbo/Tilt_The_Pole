<?php
 $url = parse_url(getenv("mysql://b0d41420cfca89:92b34fca@us-cdbr-iron-east-01.cleardb.net/heroku_c489e6d16d0d210?reconnect=true"));
define("DB_SERVER", $url["host"]);
define("DB_USER", $url["user"]);
define("DB_PASS", $url["pass"]);
define("DB_NAME", substr($url["path"], 1);




 ?>
