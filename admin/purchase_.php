<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Purchase</title>
    <?php include "../assets/header.php"; ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<body>
    <h1>Purchase</h1>
    <form action="purchase_prs.php" method="post">
    <label for="med_name">Medicine Name:</label>
    <input type="text" name="med_name" id="med_name">
    <label for="price">Price:</label>
    <input type="number" name="price">
    <label for="purch_date">Date:</label>
    <input type="date" name="purch_date" id="purch_date">
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" id="quantity">
    <input type="submit" name="submit" value="submit">
    </form>
    <script>
$(function() {
    $( "#med_name" ).autocomplete({
        source: 'suggest.php'
    });
});
    </script>
</body>
</html>