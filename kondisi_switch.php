<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <title>PHP Dasar</title> 
    </head> 
    <body> 
        <h2>kondisi switch</h2>
        <?php 
        $nama_hari = date("l"); 
        switch($nama_hari) {
            case "Sunday": 
                echo "Minggu"; 
                break; 
            case "Monday": 
                echo "Senin"; 
                break; 
            case "Tuesday": 
                echo "Selasa"; 
                break; 
            default: 
            echo "Sabtu"; } 
?>
    </body> 
</html>
