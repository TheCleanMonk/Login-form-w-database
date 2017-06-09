<?php
session_start();
session_destroy();
header("Location: fun.php");