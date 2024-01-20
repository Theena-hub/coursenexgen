<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include('db.php');

class Enquiry
{
    function add()
    {
        extract($_REQUEST);
        global $conn;

        $query = "INSERT INTO enquiry (enq_name,enq_mobile,enq_mail,enq_msg) VALUES ('$enq_name','$enq_mobile','$enq_mail','$enq_msg')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Your Message Send Successfully!']);
        } else {
            echo json_encode(['success' => false, 'error' => mysqli_error($conn), 'query' => $query]);
        }
    }
    function delete()
    {
        extract($_REQUEST);
        global $conn;

        $query = "UPDATE enquiry SET enq_status = 0 WHERE id = '$id'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Enquiry Deleted Successfully!']);
        } else {
            echo json_encode(['success' => false, 'error' => mysqli_error($conn), 'query' => $query]);
        }
    }
}
$func_type = new Enquiry;

if ($_REQUEST['req_type'] == 'add') {
    $func_type->add();
} else if ($_REQUEST['req_type'] == 'delete') {
    $func_type->delete();
}
?>