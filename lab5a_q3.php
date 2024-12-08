<!DOCTYPE html> 
<html lang="en"> 
<head> <title> LAB5A_Q3 </title></head>
<body> 
    <?php 
    // Function to generate multiplication table 
    function multiplication($multiplier) { 
        $results = []; 
        for ($i = 1; $i <= 12; $i++) { 
            $results[] = [ 
                'no' => $i, 
                'multiplier' => $multiplier, 
                'answer' => $i * $multiplier 
            ]; 
        } 
        return $results; 
    } 
 
    $multiplier = 2;  
    $table = multiplication($multiplier); 
    ?> 
 
    <table border = '1'> 
            <tr> 
                <th>No</th> 
                <th>Multiplier</th> 
                <th>Answer</th> 
            </tr> 
            <?php foreach ($table as $row): ?> 
            <tr> 
                <td><?php echo $row['no']; ?></td> 
                <td><?php echo $row['multiplier']; ?></td> 
                <td><?php echo $row['answer']; ?></td> 
            </tr> 
            <?php endforeach; ?> 
    </table> 
</body> 
</html>