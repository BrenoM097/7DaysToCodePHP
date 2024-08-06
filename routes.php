<?php

switch ($_GET['page']) {
  case 'register':
    do_register();
    break;
  case '404':
    do_not_found();
    break;
  default:
    do_login();
    break;
}