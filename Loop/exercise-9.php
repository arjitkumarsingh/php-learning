<!DOCTYPE html>
<!-- 9. Write a PHP script using nested for loop that creates a chess board as shown below.
Use table width="270px" and take 30px as cell height and width.

chess board -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise-9</title>
</head>

<body>
    <table width="270px" cellspacing="0px" cellpadding="0px">
        <?php for ($i = 1; $i <= 8; $i++) { ?>
            <tr>
                <?php for ($j = 1; $j <= 8; $j++) { ?>
                    <td>
                        <?php if ($i % 2 == 1 && $j % 2 == 1) { ?>
                    <td height="30px" width="30px" bgcolor="brown"></td>
                <?php } elseif ($i % 2 == 0 && $j % 2 == 0) { ?>
                    <td height="30px" width="30px" bgcolor="brown"></td>
                <?php } ?>
                </td>
            <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>

</html>