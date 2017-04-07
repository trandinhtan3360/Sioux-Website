<!DOCTYPE html>
<html>
<head>
<title> Display Amin with role is 0</title>
</head>
<body>
<?php
if($data==NULL){
	echo "Data empty";
}
else{
      echo "<table>
       <tr>
       <td>id</td>
       <td>full_name</td>
       <td>username</td>
       <td>password</td>
       <td>email</td>
       <td>address</td>
       <td>dob</td>
       <td>phone</td>
       <td>image</td>
       <td>Description</td>
       <td>status</td>
       </tr>";
       echo "<tr>";
       foreach($data as $item){
       echo "<td>".$item['users']['id']."</td>";
       echo "<td>".$item['users']['full_name']."</td>";
       echo "<td>".$item['users']['username']."</td>";
       echo "<td>".$item['users']['password']."</td>";
       echo "<td>".$item['users']['email']."</td>";
       echo "<td>".$item['users']['address']."</td>";
       echo "<td>".$item['users']['dob']."</td>";
       echo "<td>".$item['users']['phone']."</td>";
       echo "<td>".$item['users']['image']."</td>";
       echo "<td>".$item['users']['description']."</td>";
       echo "<td>".$item['users']['status']."</td>";
       echo "</tr>";
     }
     }
?>
</body>
</html>