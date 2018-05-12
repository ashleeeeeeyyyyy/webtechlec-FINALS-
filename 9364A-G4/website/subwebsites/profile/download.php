<?php
    $db = new mysqli("p:localhost", "root", "", "course_website");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $stmt = $db->stmt_init();
        $stmt->prepare("select idupload, upload_file, upload_name from upload where idupload = $id");
        $stmt->execute();
        $stmt->bind_result($uploadid, $uploadFile, $uploadName);


        while($stmt->fetch()){
            echo "$uploadid";
            $file = $uploadName;
            $content = $uploadFile;
        }

        header("Content-type: application/octet-stream");
        header("Content-Disposition: attachment; filename = $file");
        ob_clean();
        flush();
        echo $content;
        exit;
    }