<!DOCTYPE html>

<head>
    <h1>Insert data into our table</h1>
</head>

<body>
    <center>
        <?php
        //call your database file into the current file
        require "dbconnect.php";

        //pick data from the user 


        $name = $_REQUEST['name'];
        $gender = $_REQUEST['gender'];
        $address = $_REQUEST['address'];

        //insert data picked into table
        $sql = "insert into staff values(' $name','$gender','$address ')";


        if ($conn->query($sql) === true) {
            echo "records inserted ";
        } else {
            echo "error";
        }
        ?>
    </center>
</body>

</html>