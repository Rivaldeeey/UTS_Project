<?php
echo "<FORM METHOD=post ACTION=input_uts.php ENCTYPE=MULTIPART/FORM-DATA>";
$user = "rival";
$pass = "130503";
if($user == "rival" && $pass =="130503"){
echo "login berhasil";
} else {
    echo "login gagal";
}
echo "<BR><INPUT TYPE=SUBMIT NAME=input VALUE=NEXT>"
?>