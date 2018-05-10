<ul class = "collection col m8 offset-m2 s12">
Additional Notes
<?php
    $db = new mysqli("p:localhost", "root", "", "course_website");
    $stmt = $db->stmt_init();
    $stmt->prepare("select idupload, upload_file, upload_name from upload");
    $stmt->execute();
    $stmt->bind_result($id, $uploadFile, $uploadName);
 
    while($stmt->fetch()){ ?>
        <li class = "collection-item avatar">
            <a href = "./subwebsites/profile/download.php?id=<?php echo $id ?>" class = "collection-item">
                <i class = "material-icons circle">folder</i>
                <span class = "title"><?php echo $id ?></span>
                <p><?php echo $uploadName ?> </p>
            </a>
        </li>

<?php
    }

?>

</ul>
</div>