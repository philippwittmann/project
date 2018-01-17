<?php
function get_clickbar_contentdata($text){
  foreach ($text as $t){
    echo '<td class="clickbar-td">'. $t . '</td>';
  }
}
?>
