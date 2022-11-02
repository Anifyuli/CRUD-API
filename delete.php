<?php

    require_once('helper.php');
    parse_str(file_get_contents('php://input'), $value);

    $id = $value['id'];

    $query = " DELETE FROM notes WHERE id = '$id' ";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        echo json_encode(array('message' => 'Note deleted'));
    } else {
        echo json_encode(array('message' => 'Note failed to create'));
    }

?>