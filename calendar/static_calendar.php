<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar in PHP</title>
</head>
<body>
    <table border="1">
        <tr>
          <th scope="col">S</th>
          <th scope="col">M</th>
          <th scope="col">T</th>
          <th scope="col">W</th>
          <th scope="col">T</th>
          <th scope="col">F</th>
          <th scope="col">S</th>
        </tr>

        <?php 
          $d = 1;
          $stop = false;
          while (!$stop) { 
        ?>
          <tr>
            <?php for ($i = 0; $i < 7; $i++, $d++) { 
              if ($d > 31) {
                $stop = true;
                break;
              }
            ?>
                <td> <?= $d ?> </td>
            <?php }; ?>  
          </tr>
        <?php }; ?>
    </table>    
</body>
</html>