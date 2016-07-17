            
<?php

        require_once('./cisco/cisco.class.php');

        $cisc = new cisco('sicret', 'username', 'password', 'hostname');
        if ($cisc->copy_config('flash:config.text','ftp://username:password@hostname/config.text')) echo "Success"; else echo "Failed";
