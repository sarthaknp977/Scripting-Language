<!-- 26. Write a PHP script to display a student mark-sheet in a table. Store the data in a PHP multidimensional array. -->
<?php

$studentRecords = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subjects = ['web_tech', 'dbms', 'economics', 'dsa', 'account'];
    $scores = [];
    foreach ($subjects as $subject) {
        $scores[$subject] = $_POST[$subject];
    }
    
    $total = array_sum($scores);
    $result = ($total >= 200) ? "Pass" : "Fail";
    
    $studentRecords[] = array_merge(
        ['name' => $_POST['name'], 'roll' => $_POST['roll'], 'total' => $total, 'result' => $result],
        $scores
    );
    
}
?>

    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        input::placeholder {
    font-size: 9px;
}

    </style>

<h1>Enter Student Marks</h1>

<?php
$subjects = [
    'web_tech' => 'Web Tech II',
    'dbms' => 'DBMS',
    'economics' => 'Economics',
    'dsa' => 'DSA',
    'account' => 'Account'
];
?>

<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Enter name" required><br><br>

    <label for="roll">Roll No:</label>
    <input type="text" id="roll" name="roll" placeholder="Enter roll no" required><br><br>

    <?php foreach ($subjects as $field => $label): ?>
        <label for="<?= $field ?>"><?= $label ?>:</label>
        <input type="number" id="<?= $field ?>" placeholder="Enter marks in <?php echo $field ?> " name="<?= $field ?>" required><br><br>
    <?php endforeach; ?>

    <button type="submit">Submit</button>
</form>


<hr>

<h2>Student Marks Table</h2>


<table border="1">
    <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Roll</th>
        <th>Web Tech II</th>
        <th>DBMS</th>
        <th>Economics</th>
        <th>DSA</th>
        <th>Account</th>
        <th>Total</th>
        <th>Result</th>
    </tr>

    <?php
    if (!empty($studentRecords)) {
        $sn = 1;
        foreach ($studentRecords as $student) {
            echo "<tr>
                    <td>{$sn}</td>
                    <td>{$student['name']}</td>
                    <td>{$student['roll']}</td>
                    <td>{$student['web_tech']}</td>
                    <td>{$student['dbms']}</td>
                    <td>{$student['economics']}</td>
                    <td>{$student['dsa']}</td>
                    <td>{$student['account']}</td>
                    <td>{$student['total']}</td>
                    <td>{$student['result']}</td>
                  </tr>";
            $sn++;
        }
    } else {
        echo "<tr><td colspan='10'>No records found</td></tr>";
    }
    ?>
</table>
