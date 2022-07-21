<?php
/*
1. Atvaizduokite formą, kuri leistų upload'inti .png ir .jpeg failus į serverį. Failų dydžio limitas - 1MB.
Uploadintas failas turi atsirasti ./data direktorijoje su unikaliu pavadinimu.
Failo metaduomenys (failo pavadinimas, dydis, path'as, įkėlimo data) turėtų būti išsaugomi atskirame faile.
session_start();
*/
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP File Upload</title>
</head>
<body>
<?php
if (isset($_SESSION['message']) && $_SESSION['message'])
{
    printf('<b>%s</b>', $_SESSION['message']);
    unset($_SESSION['message']);
}
?>
<form method="POST" action="upload.php" enctype="multipart/form-data">
    <div>
        <span>Upload a File:</span>
        <input type="file" name="uploadedFile" />
    </div>

    <input type="submit" name="uploadBtn" value="Upload" />
</form>
</body>
</html>
