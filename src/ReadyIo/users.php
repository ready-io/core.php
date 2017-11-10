<?php

include_once("Core/vars.php");
include_once("controller/user_controller.class.php");

$u = new user_controller();

if (isset($get->action))
{
  $u->{$get->action}();

  $view = "view/user/$get->action.php";

  include_once "view/layout.php";
}

?>