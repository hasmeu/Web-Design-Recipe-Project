<html>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gia";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        //check connection
        if (!$conn)
        {
            die ("Connection failed: " .mysqli_connect_error());

        }



        $sql = "INSERT INTO reports (Fluorescence) Values ('Very Fluorescent')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            $sql = "SELECT Fluorescence FROM reports";
            
        

            mysqli_close($conn);
            ?>
        

       
    </body>
</html>