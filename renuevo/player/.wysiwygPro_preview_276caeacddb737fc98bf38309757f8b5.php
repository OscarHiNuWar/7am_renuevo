<?php
if ($_GET['randomId'] != "cpKVTuMcA_686oXX4TaM586w3UB07Ex3C2PvoJW3ZS4RvlDsgy6EB5Wr1VcEkdzR") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
