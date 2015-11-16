<?php 

  $newURL = 'http://localhost/darte-art';

  if(isset($_POST['session_email']))
    header('Location: '.$newURL.'/homeartist.php');
  else
    header('Location: '.$newURL.'/homeinterested.php');

 ?>