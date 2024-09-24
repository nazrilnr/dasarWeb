<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Data in Table</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<?php
    $Dosen = [
        'nama' => 'Nazreall',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Laki Laki'
    ];
?>

<table>
    <tr>
        <th>Attribute</th>
        <th>Value</th>
    </tr>
    <tr>
        <td>Nama</td>
        <td><?php echo $Dosen['nama']; ?></td>
    </tr>
    <tr>
        <td>Domisili</td>
        <td><?php echo $Dosen['domisili']; ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo $Dosen['jenis_kelamin']; ?></td>
    </tr>
</table>

</body>
</html>
