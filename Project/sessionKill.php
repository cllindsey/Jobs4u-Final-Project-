<?php

    function killSession() {
        unset($_SESSION['login_user']);
    }
    killSession();
    header(location: "logout.php");

?>