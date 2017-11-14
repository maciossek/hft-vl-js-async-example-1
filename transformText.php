<?php
if(isset($_POST['message']) && isset($_POST['name'])) {
  $a = array('text' => strtoupper($_POST['message']), 'name' => $_POST['name']);
  echo json_encode($a);
} else {
  $a = array('error' => 'no text set');
  echo json_encode($a);
}
?>