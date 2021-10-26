<?php 
$connection = oci_connect('Flavoursmart', 'Flavoursmart_21#', '//localhost/xe'); if (!$connection) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit; 
} 
    ?>