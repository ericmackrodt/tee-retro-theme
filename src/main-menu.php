<?php
$per_row = 4;
$count = count($mainMenu);
$rows = ceil($count / 4);
$index = 0;
?>
<table border="0" cellspacing="0" cellpadding="5">
  <?php for ($i = 1; $i <= $rows; $i++) : ?>
    <tr>
      <?php $count = 0 ?>
      <?php while ($count < $per_row) : ?>
        <?php $item = $mainMenu[$index]; ?>
        <td align="center"><a href="<?= $item->path ?>"><img src="<?= $item->icon ?>" border="0"><br>
            <font size="-1"><?= $item->label ?></font>
          </a></td>
        <?php
        $count++;
        $index++;
        ?>
      <?php endwhile; ?>
    </tr>
  <?php endfor; ?>
</table>