<?php 
$createfile = fopen("hello_there.php", "w") or die("Unable to open file!");
$code = "<?php
// This is a comment
echo 'This is a test page!';
echo 'Exam number two!';
// This is the end of a comment";
fwrite($createfile, $code);




?>



 
