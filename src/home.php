<?php $this->layout(withVariant('layout'), []) ?>

<center>
  <table bordercolordark="#000000" border="0">
    <tr>
      <td>
        <img src="/templates/retro/public/avatar.jpg">
      </td>
      <td>
        <img src="/templates/retro/public/welcome.gif">
        <font size="-1">
          <?= $intro ?>
        </font>
      </td>
    </tr>
  </table>
  <br><img src="/templates/retro/public/nothing.gif" width="1" height="5"><br>
  <img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif">
  <br><img src="/templates/retro/public/nothing.gif" width="1" height="10"><br>
  <font size="4">
    <b>Latest parts of the experiment</b>
  </font><br><img src="/templates/retro/public/nothing.gif" width="1" height="5"><br><img src="/templates/retro/public/black_pixel.gif" width="100%" height="1"><br><img src="/templates/retro/public/nothing.gif" width="1" height="5">
  <?php $this->insert('retro::categories') ?>
  <img src="/templates/retro/public/nothing.gif" width="1" height="5"><br><img src="/templates/retro/public/black_pixel.gif" width="100%" height="1"><br><img src="/templates/retro/public/nothing.gif" width="1" height="5">
  <?php $this->insert('retro::post-list', ['posts' => $posts, 'custom_next_link' => ['url' => '/posts?page=1', 'icon' => '/templates/retro/public/more_md_wht.gif']]) ?>
  <img src="/templates/retro/public/nothing.gif" width="1" height="5"><br><img src="/templates/retro/public/black_pixel.gif" width="100%" height="1"><br><img src="/templates/retro/public/nothing.gif" width="1" height="5">
  <?php $this->insert('retro::categories') ?>
</center>