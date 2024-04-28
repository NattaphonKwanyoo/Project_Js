<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nameMenu[]="";
    $num[]="";
    $n=1;
    $c=0;

    for($i=0;$i<6;$i++){
        $name = "menu".$n;
        $number = "count".$n;
        
        if(isset($_POST[$name])){
            echo $name;
            $nameMenu[$c] = $_POST[$name];
            $num[$c] = $_POST[$number];
            $c++;
            
        }
        $n++;
    }

    $z = 1;
    for($m=0;$m<count($nameMenu);$m++){

        echo "<p> เมนูที่ ".$z." คือ ".$nameMenu[$m]." จำนวน ".$num[$m]." ชิ้น </p><br>";
        $z++;

    }

    ?>
</body>
</html>
