<!-- 25. Write a PHP script to display the following array in an HTML table:
$info = [
  'name' => 'Ram Bahadur',
  'address' => 'Lalitpur',
  'email' => 'info@ram.com',
  'phone' => 98454545,
  'website' => 'www.ram.com'
]; -->



<?php
$info = [
  'name' => 'Ram Bahadur',
  'address' => 'Lalitpur',
  'email' => 'info@ram.com',
  'phone' => 98454545,
  'website' => 'www.ram.com'
];
?>





<style>
  table {
    width: 50%;
    border-collapse: collapse;
    margin: 20px auto;
  }

  table,
  th,
  td {
    border: 1px solid black;
  }

  th,
  td {
    padding: 10px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }
</style>



<h2>User Information</h2>

<table>
  <tr>
    <th>Field</th>
    <th>Value</th>
  </tr>

  <?php foreach ($info as $key => $value): ?>
    <tr>
      <td><?php echo $key; ?></td>
      <td><?php echo $value; ?></td>
    </tr>
  <?php endforeach; ?>

</table>