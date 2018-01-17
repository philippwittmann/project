<div class="clickbar">
  <table class="clickbar-table">
    <tr class="clickbar-tr">
      <?php
      if (isset ($_GET["item"])) {
        if ($_GET["item"] == 0) { get_clickbar_contentdata($text_clickbar[0]);}
        if ($_GET["item"] == 1) { get_clickbar_contentdata($text_clickbar[1]);}
        if ($_GET["item"] == 2) { get_clickbar_contentdata($text_clickbar[2]);}
        if ($_GET["item"] == 3) { get_clickbar_contentdata($text_clickbar[3]);}
        if ($_GET["item"] == 4) { get_clickbar_contentdata($text_clickbar[4]);}
      }
      ?>
      <!-- weitere Inhalte müssen hinzugefügt werden -->
    </tr>
  </table>
</div>
