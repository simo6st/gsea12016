<?php
function test_input($data) {
 // pour des mesures de securité ;) anti espace & specialchars & xss
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}


 ?>
