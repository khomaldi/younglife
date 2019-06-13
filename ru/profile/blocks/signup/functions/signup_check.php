<?php
require_once($_SERVER['DOCUMENT_ROOT'] . 'ru/profile/core/sql.php');

function check_email() {
  /* If we found email in table */
  if (R::count('users', "email = ?", array($_POST['email']))) {
    echo 'wrong';
  } else {
    echo 'success';
  }
}

if (isset($_POST['email']))
{
  check_email();
}
else
{
  exit();
}
?>