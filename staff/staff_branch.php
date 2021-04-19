<?php

if (isset($_POST['disp'])) {
  if (!isset($_POST['staffcode'])) {
    header('Location: staff_ng.php');
  }
  $staff_code = $_POST['staffcode'];
  header('Location: staff_disp.php?staffcode=' . $staff_code);
}

if (isset($_POST['add'])) {
  header('Location: staff_add.php');
}

if (isset($_POST['edit']) == true) {
  // echo var_dump($_POST['staffcode']);

  // if (empty($_POST['staffcode'])) {
  if (!isset($_POST['staffcode'])) {
    print 'no select';
    header('Location: staff_ng.php');
  }
  $staff_code = $_POST['staffcode'];
  header('Location: staff_edit.php?staffcode=' . $staff_code);
}

if (isset($_POST['delete']) == true) {

  if (isset($_POST['staffcode']) == false) {
    header('Location: staff_ng.php');
  }
  $staff_code = $_POST['staffcode'];
  header('Location: staff_delete.php?staffcode=' . $staff_code);
}
