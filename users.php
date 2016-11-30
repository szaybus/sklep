<?php
require_once 'class/shop.class.php';
$shop = new Shop();
$employeesList = $shop->getEmployeesList();
echo '<table>';
foreach ($employeesList as $employee) {
  echo '<tr><td>'.$employee["id"].'</td><td>'.$employee["name"].'</td>
            <td>'.$employee["surname"].'</td></tr>';
  //echo $employee['id'].$employee['name'].$employee['surname'];
}
echo '</table>';
?>
