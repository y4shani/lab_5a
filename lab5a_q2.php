<?php
$students = [
    [ 
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21
    ],
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20
    ],
    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22
    ]
];
?>

<!DOCTYPE html>
<html>
<head> 
    <title>LAB5A_Q2</title>
</head>
<body>
    <table border = '1'>
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= htmlspecialchars($student['name']) ?></td>
                    <td><?= htmlspecialchars($student['program']) ?></td>
                    <td><?= htmlspecialchars($student['age']) ?></td>
                </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>
