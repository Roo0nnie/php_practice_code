<?php 
$title = 'PHP statement Exercise 1';

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
        <h1>PHP Statement Exercise 1</h1>
    </section>
    <!-- statement 1 -->
    <section class="my-5 py-5 bg-dark text-center">
        <form action="Exercise_1.php" class="d-flex justify-content-center" method="POST">
            <input type="text" class="form-control" style="width: 50%;" name="word" id="word" value="">
            <input class="btn bg-primary mx-3" type="submit" value="Check"></input>
        </form>
        <div id="statement1" class="text-white mt-3"></div>
    </section>

</body>
</html>
<?php

// Statement 1
    $word = $_POST['word'];
if(strlen($word) > 5) {
?>
<script>
    var checkWord = document.getElementById("statement1");
    checkWord.innerHTML = "String <span class='badge bg-danger'><?php echo $word ?></span> has more than 5 letters";   
</script>
<?php
} 
else if((strlen($word) < 5) && (strlen($word) != 0)){
    ?>
    <script>
        var checkWord = document.getElementById("statement1");
        checkWord.innerHTML = "String <span class='badge bg-success'><?php echo $word ?></span> does not have more than 5 letters";   
    </script>
    <?php
} else {
    ?>
    <script>
        var checkWord = document.getElementById("statement1");
        checkWord.innerHTML = "<span class='badge bg-primary'>EMPTY</span>";   
    </script>
    <?php
}
?>





 
   











