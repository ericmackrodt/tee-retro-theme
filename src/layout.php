<html>

<head>
    <meta charset="UTF-8">
    <title>
        <?= $this->e($siteName) ?>
        <?php if ($title) : ?>
            | <?= $title ?>
        <?php endif; ?>
    </title>
    <?= $this->section('seo') ?>
</head>

<body bgcolor="#000000" text="#fffffff" background="/templates/retro/public/starfiel.gif" vlink="#00FF00" link="#00FF00">
    <center>
        <img src="/templates/retro/public/logo_smaller.gif" alt="The Eric Experiment">
        <br>
        <?php $this->insert('retro::main-menu') ?>
    </center>

    <?= $this->section('content') ?>

    <center>
        <br>
        <img src="/templates/retro/public/nothing.gif" width="1" height="5"><br>
        <table border="0" celspacing="0" celpadding="0" width="100%">
            <tr>
                <td align="left">
                    <img src="/templates/retro/public/ani_raptor.gif">
                </td>
                <td align="right" valign="bottom">
                    <img src="/templates/retro/public/cat.gif">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <img src="/templates/retro/public/flamingline.gif" height="20" width="100%">
                </td>
            </tr>
        </table>
        <br>
        <img src="/templates/retro/public/nothing.gif" width="1" height="5"><br>
        <?php $this->insert('retro::tags') ?>
        <img src="/templates/retro/public/nothing.gif" width="1" height="5"><br><img src="/templates/retro/public/black_pixel.gif" width="100%" height="1"><br><img src="/templates/retro/public/nothing.gif" width="1" height="5"><br>

        <a href="/windows3x/essentialsoftware#netscapecommunicator407">
            <img src="/templates/retro/public/netscap4.gif" alt="Compatible with Netscape" border="0" />
        </a>
        <a href="/windows3x/essentialsoftware#internetexplorer501">
            <img src="/templates/retro/public/ie.gif" width="88" height="31" alt="Compatible with IE" border="0" />
        </a>
        <img src="/templates/retro/public/800x600.gif" border="0">
        <img src="/templates/retro/public/frontpg.gif" border="0">
        <a href="/windows3x/essentialsoftware#mirc591">
            <img src="/templates/retro/public/mircban.gif" border="0">
        </a>
        <br>
        Copyright © 1988-2020 The Eric Experiment
        <br>

        <img src="/templates/retro/public/neon.gif">
        <br>
        <img src="/templates/retro/public/skyline.gif">
    </center>
</body>

</html>