<?php 
$title = 'PHP statement Exercise 2';

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
        <h1>PHP Statement Exercise 2</h1>
    </section>
    <!-- Statement 2 -->
    <section class="my-5 py-5 bg-success text-center">
        <form action="Exercise_2.php"  method="POST">
        <div class="d-flex justify-content-center">  
            <label class="form-control bg-primary" style="width: 20%;">Deal 1</label>
            <label class="form-control  mx-4 bg-danger" style="width: 20%;">Deal 2</label>
            </div>
            <div class="d-flex justify-content-center mt-2">  
            <input type="text" class="form-control" style="width: 20%;" name="quantity1" placeholder="Quantity 1">
            <input type="text" class="form-control mx-4" style="width: 20%;" name="quantity2" placeholder="Quantity 2">
            </div>

            <div class="d-flex justify-content-center mt-4">
            <input type="text" class="form-control" style="width: 20%;" name="price1" placeholder="Price 1">
            <input type="text" class="form-control mx-4" style="width: 20%;" name="price2" placeholder="Price 2">
            </div>
       
            <input class="btn bg-primary mt-4" style="width:40%" type="submit" value="Check"></input>
        </form>
        <div id="statement2" class="text-white mt-3"></div>
    </section>
 
</body>
</html>

<?php 
// Statement 2
$quantity1 = $_POST['quantity1'];
$price1= $_POST['price1'];
$quantity2 = $_POST['quantity2'];
$price2= $_POST['price2'];

$deal1 = $quantity1 / $price1;
$deal2 = $quantity2 / $price2;



if($deal1 > $deal2) {
?>
<script>
    var deal = document.getElementById("statement2");
    deal.innerHTML = "Best deal is <span class='badge bg-danger'>Deal 1</span>";   
</script>
<?php
} 
else if($deal1 < $deal2) {
    ?>
    <script>
        var deal = document.getElementById("statement2");
        deal.innerHTML = "Best deal is <span class='badge bg-dark'>Deal 2</span>"; 
    </script>
    <?php
} else {
    ?>
    <script>
        var deal = document.getElementById("statement2");
        deal.innerHTML = "Both <span class='badge bg-dark'>Deals</span> are the best"; 
    </script>
    <?php
}
?>






 
   











