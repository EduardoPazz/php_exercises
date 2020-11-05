<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar in PHP</title>
</head>
<body>
    <table>
        <tr>
          <th scope="col">D</th>
          <th scope="col">S</th>
          <th scope="col">T</th>
        </tr>
        <tr>
          <td> <?= date('w') ?> </td>
          <td>Smith</td>
          <td>50</td>
        </tr>
        <tr>
          <td>Eve</td>
          <td>Jackson</td>
          <td>94</td>
        </tr>
    </table>    
</body>
</html>