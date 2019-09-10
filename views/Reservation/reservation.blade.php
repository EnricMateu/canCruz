<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<table> <th> Reservas de esta mierda</th>
    
<?php
    foreach ($reservation as $value) {
?>

<tr>
        <td><?php echo $value->name ?></td>
        <td><?php echo $value->surname ?></td>
        <td><?php echo $value->telephone ?></td>
        <td><?php echo $value->email ?></td>
        <td><?php echo $value->postalCode ?></td>
        <td><?php echo $value->checkinDate ?></td>
        <td><?php echo $value->checkoutDate ?></td>
        <td><?php echo $value->roomNumber ?></td> 
</tr>
    
<?php
    }
?>
 </table>  
</body>
</html>