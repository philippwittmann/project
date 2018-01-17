<?php
function get_menuitem_itemsdata($items){
  $i = 0;
  foreach ($items as $key => $t ){
    echo '<div class="item"><a class="invisblelink"' . 'href="Index.php?item=' . $key . '">';
    echo '<div';
    if (isset ($_GET["item"])) {
      if ($_GET["item"] == $key) { echo ' style="background-color: #ffa500"';}
    }
    echo ' class="menuitem">';
    echo "$t";
    echo '</div></a></div>';
  }
}
?>
