<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Data Table</title>
    <style>
        body {
            font-size: 24px;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 30px auto;
        }

        td,
        th {
            border: 2px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <h2>User Data from API</h2>

    <?php
    // Fetch data from API
    $api_url = 'https://jsonplaceholder.typicode.com/users ';
    $response = file_get_contents($api_url);

    if ($response === FALSE) {
        die('Error fetching data from API');
    }

    $data = json_decode($response, true);
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
        </tr>
        <?php foreach ($data as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['address']['city'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>