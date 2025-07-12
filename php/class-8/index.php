<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 2px solid #ddd;
            padding: 12px;
            text-align: left;

        }
    </style>
</head>

<body style="margin-left: 100px; font-size:40px">
    <table>
        <?php for ($i = 1; $i <= 8; $i++): ?>
            <tr>
                <?php for ($j = 1; $j <= 15; $j++): ?>
                    <td><?php echo $i * $j ?></td>
                <?php endfor; ?>

            </tr>
        <?php endfor; ?>
    </table>
    <?php $fruits = ['Mango', 'Apple', 'Banana']; ?>
    <ul>
        <?php foreach ($fruits as $fruit): ?>
            <li><?php echo $fruit; ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>