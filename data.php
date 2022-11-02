<?php

    require_once('helper.php');

    $query = "SELECT * FROM notes ORDER BY id DESC";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        $res = array();
        while ($row = mysqli_fetch_array($sql)) {
            array_push($res, array(
                'id' => $row['id'],
                'note' => $row['note'],
            ));
            
        }
        echo json_encode( array('notes' => $res) );
    }

?>