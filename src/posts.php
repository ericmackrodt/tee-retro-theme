<?php $this->layout(withVariant('layout'), ['title' => 'Posts']) ?>
<center>
  <h2>Posts - Page <?= $page ?></h2>
  <?php $this->insert(withVariant('categories')) ?>
  <img src="/templates/retro/public/nothing.gif" width="1" height="5"><br><img src="/templates/retro/public/black_pixel.gif" width="100%" height="1"><br><img src="/templates/retro/public/nothing.gif" width="1" height="5">
  <?php $this->insert(withVariant('post-list'), ['posts' => $posts]) ?>
  <img src="/templates/retro/public/nothing.gif" width="1" height="5"><br><img src="/templates/retro/public/black_pixel.gif" width="100%" height="1"><br><img src="/templates/retro/public/nothing.gif" width="1" height="5">
  <?php $this->insert(withVariant('categories')) ?>
</center>