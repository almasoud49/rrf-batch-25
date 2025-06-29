<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="margin-left:100px; font-size:40px">Document</title>

    <style>
        table{
            border-collapse: collapse;
        }
        td {
            border: 2px solid #ddd;
            padding: 12px;
            
        }
    </style>
</head>

<body>

    <table border="1">
        <?php for( $i = 1 ; $i <=8 ; $i++): ?> 
        <tr>
            <?php for($j=1 ;$j <=15 ;$j++): ?> 
            <td> <?php echo $i*$j ?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>



    <?php $fruits = ["Apple","Banana","Orange", "Jackfruits"]; ?>
        <ul>
        <?php foreach($fruits as $fruit): ?>
        <li style="list-style: none;"> <?php echo $fruit ?></li>
        <?php endforeach; ?>

    </ul>
</body>

</html>