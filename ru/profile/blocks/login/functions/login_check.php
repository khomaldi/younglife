<?php
//Try to include <sql.php>
try {
  if (!@include_once($_SERVER['DOCUMENT_ROOT'] . 'ru/profile/core/sql.php')) {
    throw new Exception('Can\'t open file &lt;sql.php&gt;');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}

if (isset($_POST['login']) && isset($_POST['password']))
{
  login();
}
else
{
  exit('0');
}

function login()
{
  $login = strpos($_POST['login'], '@');

  if ($login === FALSE)
  {
    $user = R::findOne('users', 'username = ?', array($_POST['login']));
  }
  else
  {
    $user = R::findOne('users', 'email = ?', array($_POST['login']));
  }

  if ($user)
  {
    if (password_verify($_POST['password'], $user->password))
    {
      $_SESSION['logged_user'] = $user;
    }
    else
    {
      echo 0;
    }
  }
  else
  {
    echo 0;
  }
}
?>
