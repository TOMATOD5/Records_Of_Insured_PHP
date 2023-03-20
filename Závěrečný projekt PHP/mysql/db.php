<?php
//připojené s databází zajišťuje funkce Connection
    function Connection(){
        global $connection;

        $connection = mysqli_connect("localhost", "root", "", "loginapp");

    }

// přidání záznamu do databáze, takže funkce AddFunction, přidává pojištěnce

    function AddFun(){
        global $connection;
        $username = $_POST["username"];
        $userlastname = $_POST["userlastname"];
        $dateofbirth = $_POST["dateofbirth"];
        $phonenumber = $_POST["phonenumber"];

        $query = "INSERT INTO users(username,userlastname,dateofbirth,phonenumber) VALUES('$username','$userlastname','$dateofbirth','$phonenumber')";

        $result = mysqli_query($connection,$query);

        if(!$result){
            die("Nepodařilo se data zapsat do databáze.");
        }

    }

// výpis dat z databáze, takže funkce ListingFunction, vypisuje pojištěnce
    function ListFun(){
        // připojení do databáze
        $connection = mysqli_connect("localhost", "root", "", "loginapp");

        //výpis celé databáze
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Dotaz do databáze selhal" . mysqli_error());
        }

        while($row = mysqli_fetch_assoc($result)){
            echo "
            <tr>
            <td>".$row['id']."</td>
            <td>".$row['username']."</td>
            <td>".$row['userlastname']."</td>
            <td>".$row['dateofbirth']."</td>
            <td>".$row['phonenumber']."</td>
            </tr>";
        }
    }

?>
