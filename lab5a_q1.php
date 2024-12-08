<!DOCTYPE html>
<html lang="en">
<head>
<title>LAB5A_Q1</title>
</head>
<body>
    <?php
    // Define variables with your details
    $name = "Nur Haifa Yashani binti Hayazee";
    $matricNumber = "AI220032";
    $course = "Bachelor of Computer Science";
    $yearOfStudy = "3nd Year";
    $address = "No 4, Jln Tiga Taman Seri Sejahtera, 02700, Simpang Empat, Perlis";
    ?>
    <table border="1">
        <tr>
            <th>Detail</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>