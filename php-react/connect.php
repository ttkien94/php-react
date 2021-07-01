<?php
    // using mysqli
    // $server = "localhost";
    // $username = "lpevn_lpe";
    // $pw ="lpe.team";
    // $database = "lpevn_lpe";
    $server = "localhost";
    $username = "lpevn_lpe";
    $pw ="lpe.team";
    $database = "lpevn_lpe";
    $conn = new mysqli($server,$username,$pw,$database);
    $conn -> query("set names utf8"); // cho code hiểu tiếng việt
    if ($conn->connect_error) {
        die('Kết nối thất bại - Lỗi (' . $conn->connect_errno . ') '
                . $conn->connect_error);
    }
    // else {
        // $sql = "select * from Customer ";
        // $query = $conn -> query($sql);
        // if($query-> num_rows > 0) // num_rows : trả về số lượng hàng trong câu lệnh sql;
        // {
        //     while($row = $query -> fetch_assoc())
        //     {
        //         echo "ID = ".$row["ID"]." username = ".$row["Username"]."<br/>";
        //     }
        // }
    // }
    // $conn -> close();



    // using PDO 
//     try{
//     $conn = new PDO("mysql:host=localhost;dbname=Shop","root","");
//     $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "<h1>Kết nối thành công;</h1>";
// }catch(PDOException $e)
// {
//     echo "Kết nối thất bại ".$e->getMessage();
// }
// $conn = null;
?>