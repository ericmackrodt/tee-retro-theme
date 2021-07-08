<img src="/templates/retro/public/anibar.gif"><br><img src="/templates/retro/public/nothing.gif" width="1" height="5">
<table border="0" cellspacing="0" cellpadding="5">
  <tr>
    <?php foreach ($mainMenu as $key => $item) : ?>
      <td align="center"><a href="<?= $item->path ?>"><img src="<?= $item->icon ?>" border="0"><br><font size="-1"><?= $item->label ?></font></a></td>
    <?php endforeach; ?>
  </tr>
</table>
<img src="/templates/retro/public/nothing.gif" width="1" height="5"><br><img src="/templates/retro/public/anibar.gif">