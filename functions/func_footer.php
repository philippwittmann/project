<?php
function get_footer_content($text){
  echo '© Copyright Philipp Witmann';
  echo '<br><br>';
  echo $text[0];
  echo ' <a href="Index.php?item=4">' . $text[1] .' </a>';
}
?>
