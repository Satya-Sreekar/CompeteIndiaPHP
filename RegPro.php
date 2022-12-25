<?php
include 'DBinfo.php';
$un = $_POST["UN"];
$pwd = $_POST["PD"];
$EM = $_POST["EM"];
$PN = $_POST["PN"];
$result = $conn->query("SELECT * FROM User");                              //Select table query and stored in result                           //Select table query and stored in result
            $ct=0;                                                           //INITIALISE FLAG VARIABLE
    while ($row = $result->fetch_assoc()) //PARSING THROUGH THE DATA
        {
            if ($row["UN"] === $un) {
                $ct=1;
                echo "<script>alert('Username Taken!')</script>";
                echo "<script>location.href='Register.php'</script>";
        }

        }
    if($ct==0)
    {
        $sqlinsertU = "INSERT INTO User VALUES ('$un','$pwd','$EM','$PN')";
        $conn->query($sqlinsertU);
        echo "<script>alert('Sucessfully Registered! Continue To Login')</script>";
        echo "<script>location.href='Login.php'</script>";
    }
?>