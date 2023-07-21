<?php
session_start();
session_unset();
session_destroy();


//back alla pagina iniziale
header('location: ../index.php?error=none');
