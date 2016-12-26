


<?php
$sql="SELECT * FROM food,drink where food.quality=drink.quality ";

include("connect.php");
$result=mysql_query($sql);
?>
<table align='center'  border="4" cellspacing="0" cellpadding="4" bgcolor='cccccc' bordercolor='blue'>
<tr><td colspan="20"><strong><center><font color="green">STOCK REPPORT</font></center></strong></td><tr>
</center>
<td align="center"   WIDTH='100px'><strong>Foodcode</strong></td>
<td align="center"   WIDTH='100px' ><strong>Food_Name</strong></td>
<td align="center"   WIDTH='100px' ><strong>Food_type</strong></td>
<td align="center"   WIDTH='150px' ><strong>Food_quantity</strong></td>
<td align="center"   WIDTH='100px' ><strong>Food_price</strong></td>
<td align="center"   WIDTH='150px'><strong>Food_productdate </strong></td>
<td align="center"   WIDTH='150px' ><strong>Food_expiredate</strong></td>
<td align="center"   WIDTH='100px'><strong>Drinkid </strong></td>
<td align="center"   WIDTH='100px'><strong>Drink_Name</strong></td>
<td align="center"   WIDTH='100px' ><strong>Drink_type</strong></td>
<td align="center"   WIDTH='150px' ><strong>Drink_quantity</strong></td>
<td align="center"   WIDTH='100px' ><strong>Drink_price</strong></td>
<td align="center"   WIDTH='150px' ><strong>Drink_productdate</strong></td>
<td align="center"   WIDTH='150px'><strong>Drink_expiredate</strong></td>
</tr>
<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td><? echo $rows['foodcode']; ?></td>
<td><? echo $rows['food_name']; ?></td>
<td><? echo $rows['food_type']; ?></td>
<td><? echo $rows['food_quantity']; ?></td>
<td><? echo $rows['food_price']; ?></td>
<td><? echo $rows['food_productdate']; ?></td>
<td><? echo $rows['food_expiredate']; ?></td>
<td><? echo $rows['drinkid']; ?></td>
<td><? echo $rows['drink_name']; ?></td>
<td><? echo $rows['drink_type']; ?></td>
<td><? echo $rows['drink_quantity']; ?></td>
<td><? echo $rows['drink_price']; ?></td>
<td><? echo $rows['drink_productdate']; ?></td>
<td><? echo $rows['drink_expiredate']; ?></td>
</tr>
<?php
}
?>

</table>
</td>
</tr>
</table>

<center><input type="button" value="print" onclick="window.print()"></center>