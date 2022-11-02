<?php

    require_once('helper.php');
    parse_str(file_get_contents('php://input'), $value);

    $id = $value['id'];
    $note = $value['note'];

    $query = " UPDATE notes SET note = '$note' WHERE id = '$id' ";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        echo json_encode(array('message' => 'Note updated'));
    } else {
        echo json_encode(array('message' => 'Note failed to create'));
    }

?>