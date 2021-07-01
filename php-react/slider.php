<?

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers,Authorization, X-Requested-With");

require 'db_connection.php';

$sql = mysqli_query($db_conn,"select * from slider");
if(mysqli_num_rows($sql)>0){
    $sql = mysqli_fetch_all($sql,MYSQLI_ASSOC);
    echo json_encode(['success'=>1,"slider"=>$sql]);
}else{
    echo json_encode(["success"=>0]);
}

?>