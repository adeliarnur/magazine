<?php
session_start();
global $id, $username, $role;
function harus_login()
{
  if (!cek_session()):
    header('location: Login.php');
    die();
  endif;
}

function cek_session()
{
  global $id, $username, $role;
  if (empty($_SESSION['id']) || empty($_SESSION['username']) || empty($_SESSION['role'])) :
    return FALSE;
  endif;

  $id = $_SESSION['id'];
  $username = $_SESSION['username'];
  $role = $_SESSION['role'];
  return TRUE;
}

function cek_login()
{
  if (cek_session()):
    global $role;
    if ($role == 1):
      header('location: AdminIndex.php');
    else:
      header('location: AdminIndexLSM.php');
    endif;
    die();
  endif;
}

function simpan_sesi($id, $username, $role)
{
  $_SESSION['id'] = $id;
  $_SESSION['username'] = $username;
  $_SESSION['role'] = $role;
}

function id_role_harus($role_id) {
  global $role;
  harus_login();
  if (!in_array($role, $role_id)) {
    // echo "Anda tidak mempunyai hak akses";
    ?>
    <script type="text/javascript">
      alert('Anda tidak memiliki hak akses !');
      window.location = "Login.php";
    </script>
    <?php
    die();
  }
}

?>
