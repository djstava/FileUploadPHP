<?php

require_once 'src/FileUpload.php';

$file = new FileUpload\FileUpload(dirname(__FILE__) . '/uploadDir');
$file->setInput("file");
$file->save();

if ($file->getStatus())
{
    echo "File is Uploaded!";
}

?>

<html>
<head>
    <title>PHP FileUpload Example</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="file"/>
    <input type="submit" value="Upload now!"/>
</form>
</body>
</html>
