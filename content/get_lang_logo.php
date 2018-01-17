<div class="container-language-logo">
    <?php
    if (isset ($_COOKIE["language"])) {
      get_lang_logo($_COOKIE["language"]);
    } else {
      get_lang_logo($_COOKIE["language"]);
     }
    ?>
</div>
