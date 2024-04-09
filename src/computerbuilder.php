<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/fancy.css">
    <title>Computer Builder</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "AFosi31@";
        $database = "ComputerParts";
        $conn = new mysqli($servername, $username, $password, $database);
        if (!$conn) {
            die("Connection failed: " . $conn->connect_error);
        }

        echo "<form action='invoice.php' method='post'>";

        $sqlQueries = array("select * from CPUCoolers", "select * from CPUs", "select * from Cases", "select * from GPUs",
            "select * from Motherboards", "select * from PSUs", "select * from RAM", "select * from SSDs");
        
        $nameID = array("CPUCooler", "CPU", "Case", "GPU", "Motherboard", "PSU", "RAM", "SSD");
        $iter = 0;
        foreach($sqlQueries as $sql) {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<label for='" . $nameID[$iter] . "s" . "'>Choose your " . $nameID[$iter] . ": </label>"
                . "<div class='select-fancy' style='width:1500px;'>";
                echo "<select name='" . $nameID[$iter] . "' id='" . $nameID[$iter] . "'>";
                while ($Items = $result->fetch_assoc()) {
                    echo "<option value='" . $Items['name'] ."'>" . $Items['name'] . "</option>";
                }
            echo "</select><br/><br/>";
            echo "</div>";
            $iter++;
            }
            echo "<br/>";           
        }
        echo "<br/>";
        echo "<input type='submit' value='Purchase' name='submit'> <br />";

        echo "</form>";
        
        $conn->close();
    ?>
    <script src="styles/fancy2.js"></script>
</body>
</html>