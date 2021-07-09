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
  <br>
  <img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif"><img src="/templates/retro/public/lemmings_walking.gif">
  <br><br>
  <font size="4">
    <b>Latest parts of the experiment</b>
  </font><br>
  <?php $this->insert('retro::categories') ?>
  <br>
  <?php $this->insert('retro::post-list', ['posts' => $posts, 'custom_next_link' => ['url' => '/posts?page=1', 'icon' => '/templates/retro/public/more_md_wht.gif']]) ?>
  <br>
  <?php $this->insert('retro::categories') ?>
</center>