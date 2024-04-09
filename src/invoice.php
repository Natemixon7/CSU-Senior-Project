<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/fancy.css">
    <title>Order Complete</title>
</head>
<body>
        <center>
        <h1>Your Order Has Been Processed</h1>
        <h2>Thank You!</h2> <br/>
        </center>
        
        <?php
            echo "<h2>You selected:</h2><br/>"
            . "CPU Cooler---> " . $_POST['CPUCooler'] . "<br/><br/>" 
            . "CPU---> " . $_POST['CPU'] . "<br/><br/>" 
            . "Case---> " . $_POST['Case'] . "<br/><br/>" 
            . "GPU---> " . $_POST['GPU'] . "<br/><br/>" 
            . "Motherboard---> " . $_POST['Motherboard'] . "<br/><br/>" 
            . "PSU---> " . $_POST['PSU'] . "<br/><br/>" 
            . "RAM---> " . $_POST['RAM'] . "<br/><br/>" 
            . "SSD---> " . $_POST['SSD'] . "<br/><br/>";
        ?>
</body>
</html>