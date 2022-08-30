<?php
setcookie("user", "", time()+3600, "/", "localhost");
?>
<form method="post" action="cookie_id_check.php">  <!--post는 주소창에 보이지 않는것 get은 보이는것-->
    <input type="text" name="name" size="8">
    <input type="submit" value="전송">
</form>