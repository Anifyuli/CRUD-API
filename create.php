<?php

    require_once('helper.php');

    $note = $_POST['note'];

    $query = "INSERT INTO notes(note) VALUES ('$note')";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        echo json_encode(array('message' => 'Note created'));
    } else {
        echo json_encode(array('message' => 'Note failed to create'));
    }

?>