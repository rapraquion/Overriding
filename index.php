<?php
    require('./includes/overloading.class.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overriding and Overloading</title>
</head>
<body>
    <?php
        $batch = new Over();
        $batch->overloadedClassBatch("batch1");
    ?>
</body>
</html>