<?php
$pagination = createPagination($posts);
?>

<table bordercolordark="#000000" width="600" bordercolor="#000000" border="0" bgcolor="#FFFFFF" cellspacing="0" cellpadding="5" background="/templates/retro/public/Fine_Speckled0001A16B.gif">
  <tr>
    <td>
      <?php
      $len = count($pagination->posts);
      $i = 0;
      ?>
      <?php foreach ($pagination->posts as $post) : ?>
        <?php $isLast = $i == $len - 1; ?>
        <?php $image = $post->full_path . $post->image; ?>
        <table width="600" cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td width="143" valign="top">
              <a href="/post/<?= $post->slug ?>">
                <img src="/img.php?p=<?= $image ?>&w=143&fit=cover&aspectRatio=16:9&output=jpg&compression=50" border="0" /></a>
            </td>
    </td>
    <td width="10" valign="top">
      <img src="/templates/retro/public/nothing.gif" width="10" height="1">
    </td>
    <td valign="top" width="397">
      <a href="/post/<?= $post->slug ?>">
        <font size="3" color="#000000" face="arial">
          <b><?= $post->title ?></b>
        </font>
      </a>
      <br><img src="/templates/retro/public/nothing.gif" width="1" height="5"><br>
      <font face="arial" size="-1" color="#000000">
        <?= $post->description ?>
      </font>
      <br><img src="/templates/retro/public/nothing.gif" width="1" height="5"><br>
      <font size="-1" face="arial" color="#777777">
        <?= $post->date ?>
      </font>
    </td>
  </tr>

  <?php if (!$isLast) : ?>
    <tr>
      <td colspan="3" width="600" valign="top"><img height="10" width="1" src="/templates/retro/public/nothing.gif"><br><img height="1" width="600" src="/templates/retro/public/black_pixel.gif"><br><img height="10" width="1" src="/templates/retro/public/nothing.gif"></td>
    </tr>
  <?php endif; ?>
  <?php $i++ ?>
</table>
<?php endforeach; ?>
</td>
</tr>
<tr>
  <td>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr>
        <?php if ($pagination->previous_page != null) : ?>
          <td>
            <a href="<?= $pagination->previous_page ?>"><img src="/templates/retro/public/arrow_text1_left.gif" border="0"></a>
          </td>
        <?php endif; ?>
        <?php if ($pagination->next_page != null) : ?>
          <td align="right">
            <?php if ($custom_next_link) : ?>
              <a href="<?= $custom_next_link["url"] ?>"><img src="<?= $custom_next_link["icon"] ?>" border="0"></a>
            <?php else : ?>
              <a href="<?= $pagination->next_page ?>"><img src="/templates/retro/public/arrow_text1_right.gif" border="0"></a>
            <?php endif; ?>
          </td>
        <?php endif; ?>
      </tr>
    </table>
  </td>
</tr>
</table>