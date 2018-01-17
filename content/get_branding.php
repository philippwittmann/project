<div class="branding">
  <?php
    $mobile_browser = find_mobile_browser();
  if($mobile_browser) {
    echo '<img class="logo" src="img/conti-logo.png" alt="conti">';; /* Wenn mobile Browser gefunden, dann tue dies */
  } else {
    echo '<img class="logo" src="img/conti-logo.png" alt="conti">';
  }
  ?>







</div>
