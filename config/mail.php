<?php

return array(
    "driver" => "smtp",
    "host" => "mailtrap.io",
    "port" => 2525,
    "from" => array(
        "address" => "from@example.com",
        "name" => "Example"
    ),
    "username" => "5350645c717bf5288",
    "password" => "10b804672c08b4",
    "sendmail" => "/usr/sbin/sendmail -bs",
    "pretend" => false
);