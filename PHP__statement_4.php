<?php 
$title = 'PHP statement Exercise 4';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title><?php echo $title ?></title>
</head>
<body class="text-bg-dark">
    <section class="text-center mt-4">
        <h1>PHP Statement Exercise 4</h1>
    </section>
        <!-- statement 4 -->
        <section class="my-5 py-5 bg-dark text-center">
        <?php
    
        $studentInfo = '[{"name":"John Garg","age":"15","school":"Ahlcon Public school"},
        {"name":"Smith Soy","age":"16","school":"St. Marie school"},
        {"name":"Charle Rena","age":"16","school":"St. Columba school"}]';

        StudentsList($studentInfo)
            ?>
   
        </section>
 
</body>
</html
<?php
// Statement 4

function StudentsList($studentInfo)
{
    $studentlist = json_decode($studentInfo,true);
    echo "<table class='table text-white'>
    <tr><th class='text-white'>Name</th><th class='text-white'>Age</th><th class='text-white'>School</th></tr>";
    foreach ($studentlist as $student) {
        echo "<tr >";
        echo "<td>" . $student['name'] . "</td>";
        echo "<td>" . $student['age'] . "</td>";
        echo "<td>" . $student['school'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?> 




