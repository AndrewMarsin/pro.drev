<!DOCTYPE html>
<html lang="ru">
<!-- 82.193.139.229 -->
<?php
  echo '<script type="text/javascript">window.location = "https://www.facebook.com/"</script>';
  echo ($_SERVER['REMOTE_ADDR']);
  if (preg_match('/^82.*/', ($_SERVER['REMOTE_ADDR']))) {
    echo "Got it!";
  } else {
    echo "No server!";
  }
?>

</html>