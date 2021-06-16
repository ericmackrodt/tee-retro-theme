<?php $this->layout(withVariant('layout'), []) ?>

<center>
  <table bordercolordark="#000000" width="600" border="0">
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
  <br><img src="/templates/retro/public/nothing.gif" width="1" height="5"><br><img src="/templates/retro/public/anibar2.gif" width="600"><br><img src="/templates/retro/public/nothing.gif" width="1" height="5">
  <font size="4">
    <b>Latest parts of the experiment</b>
  </font><br><img src="/templates/retro/public/nothing.gif" width="1" height="5"><br><img src="/templates/retro/public/black_pixel.gif" width="100%" height="1"><br><img src="/templates/retro/public/nothing.gif" width="1" height="5">
  <?php $this->insert('retro::categories') ?>
  <img src="nothing.gif" width="1" height="5"><br><img src="black_pixel.gif" width="100%" height="1"><br><img src="nothing.gif" width="1" height="5">
  <?php $this->insert('retro::post-list', ['posts' => $posts]) ?>
  <img src="nothing.gif" width="1" height="5"><br><img src="black_pixel.gif" width="100%" height="1"><br><img src="nothing.gif" width="1" height="5">
  <?php $this->insert('retro::categories') ?>
</center>