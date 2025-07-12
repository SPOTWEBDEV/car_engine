<?php
$out = $domain . 'admin/login.php';

if(!isset($_SESSION['admin_login'])){
   echo "<script>window.location.href='$out'</script>" ;
}



?>