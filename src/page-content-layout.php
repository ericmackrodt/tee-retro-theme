<?php $this->layout('retro::layout', []) ?>
<?php
$contentWidth = 600;
if (!empty($this->section('left-content'))) {
  $contentWidth = $contentWidth - 130;
}

if (!empty($this->section('right-content'))) {
  $contentWidth = $contentWidth - 130;
}
?>

<center>
  <img src="/templates/retro/public/nothing.gif" width="1" height="5"><br><img src="/templates/retro/public/black_pixel.gif" width="100%" height="1"><br><img src="/templates/retro/public/nothing.gif" width="1" height="5"><br>

  <table cellspacing="0" cellpadding="0" border="0" width="600">
    <tr>
      <?php if (!empty($this->section('left-content'))) : ?>
        <td valign="top" width="120">
          <?= $this->section('left-content') ?>
        </td>
        <td width="10" valign="top">
          <img src="/templates/retro/public/nothing.gif" width="10" height="1">
        </td>
      <?php endif; ?>

      <td valign="top" width="<?= $contentWidth ?>">
        <font face="arial" size="-1">
          <?= $this->section('content') ?>
        </font>
      </td>

      <?php if (!empty($this->section('right-content'))) : ?>
        <td width="10" valign="top">
          <img src="/templates/retro/public/nothing.gif" width="10" height="1">
        </td>
        <td valign="top" width="120">
          <?= $this->section('right-content') ?>
        </td>
      <?php endif; ?>
    </tr>
  </table>
</center>