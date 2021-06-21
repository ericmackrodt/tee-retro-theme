<table border="0" cellspacing="5">
  <tr>
    <?php foreach ($mainMenu as $key => $item) : ?>
      <td align="center">
        <a href="<?= $item->path ?>">
        <img src="/img.php?p=<?= $item->icon ?>&output=gif" border="0"><br><font size="-1"><?= $item->label ?></font></a>
      </td>
    <?php endforeach; ?>
  </tr>
</table>