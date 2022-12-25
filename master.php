<?php
class method{

    function display()
    {
        include 'DBinfo.php';
        $result = $conn->query("SELECT * FROM User");
        echo "UserName----password----E-mail ID----Phone Number <br><br>" ;
        while($row = $result->fetch_assoc()) 
            echo  $row["UN"].'--'.$row["PD"].'--'.$row["EID"].'--'.$row["Phone"]. "<BR><BR>";

    }
    function drop()
    {   
        include 'DBinfo.php';
        $Duser = "DROP TABLE User";
        $conn->query($Duser);
    }
    function insert()
    {   
        include 'DBinfo.php';
        $sqlinsertU = "INSERT INTO User VALUES ('Tom','admin','admin@gmail.com','9999999999')";
        $conn->query($sqlinsertU);
    }
}
$D=new method();
$D->display();
?>