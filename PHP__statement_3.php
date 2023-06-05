<?php 
$title = 'PHP statement Exercise 3';

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
        <h1>PHP Statement Exercise 3</h1>
    </section>
        <!-- statement 3 -->
        <section class="my-5 py-5 bg-dark text-center">
            <form action="Exercise_3.php" class="d-flex justify-content-center" method="POST">
                <input type="text" class="form-control" style="width: 50%;" name="month" placeholder="Month">
                <input class="btn bg-primary mx-3" type="submit" value="Check"></input>
            </form>
            <div id="statement3" class="text-white mt-3"></div>
        </section>
 
</body>
</html
<?php
// Statement 3
if(($_POST['month'] != null)) {
    $monthName = $_POST['month'];
    $Days = 'Invalid Month';

    $monthList = [
        'January' => 31,
        'February' => 28,
        'March' => 31,
        'April' => 30,
        'May' => 31,
        'June' => 30,
        'July' => 31,
        'August' => 31,
        'September' => 30,
        'October' => 31,
        'November' => 30,
        'December' => 31,
    ];
    foreach($monthList as $month=>$days) {
        if($monthName === $month) {
            switch ($month) {
                default:
                    $Days = $days.' Days';
                    break;
            }
            break;
        }
    }
    ?>
    ?>
    <script>
        var month = document.getElementById("statement3");
        month.innerHTML = "<span class='badge bg-success'><?php echo $Days ?></span>";   
    </script>
    <?php
} else {
    ?>
    <script>
        document.getElementById("statement3").innerHTML = "<span class='badge bg-primary'>EMPTY</span>";  
    </script>
    <?php
}
?> 




