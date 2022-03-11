<?php
require 'header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}else {
    $id = 0;
}

    switch ($id) {
        case 1:
            require 'article1.php';
            break;
        case 2:
            require 'article2.php';
            break;
        case 3:
            require 'article3.php';
            break;
        
        default:
            echo "<script>window.location.href = 'index.php'</script>";
    }


require 'footer.php';
?>