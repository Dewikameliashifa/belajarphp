<?php
$mahasiswa = ["Abdul Rahman", 012345, "Informatika", "abdulrahman@ft.unbara.ac.id;"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta chanset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
<?php for ($i= 0; $i < 7; $i++) { ?>
       <li>
           <?php echo $mahasiswa [$i]; ?>
     </li>
     <?php } ?>

     <hr>


     <?php foreach ($mahasiswa as $h) : ?>
        <li>
            <?=$h; ?>
     </li>
     <?php endforeach; ?>

</body>
</html>
    