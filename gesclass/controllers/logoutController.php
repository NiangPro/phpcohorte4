<?php 

unset($_SESSION["user"]);
session_destroy();

return header("Location: ?page=login");