<!DOCTYPE html>
<html>
    <head>
        <title>Akai Hotel - Price Display</title>
        <link rel="shortcut icon" href="img/akai-logo.png" type="image/x-icon">
        <link rel="stylesheet" href="src/style.css">
        <script src="src/library/jquery-3.5.1.js"></script>
        <script src="src/library/jquery-ui-1.12.1/jquery-ui.js"></script>
    </head>

    <body>
        <header>
            <?php include 'src/components/header.php';?>
        </header>

        <main id="content">
            <h2>Price Display</h2>
            <?php
            $floor = $_POST["floor"];
            $type = $_POST["type"];
            $membership = $_POST["membership"];
            $days = $_POST["days"];
            
            if ($floor >= 5) {
                $floor = 50000 * ($floor - 5);
            } else {
                $floor = 0;
            }            
        
            if ($type == "standard") {
                $type = 300000;
            } else if ($type == "superior") {
                $type = 400000;
            } else if ($type == "deluxe") {
                $type = 500000;
            }
        
            $total = ($type + $floor) * $days;

            if ($membership == "non-member") {
                $membership = 0;
            } else if ($membership = "member") {
                $membership = $total * 0.1;
            }

            $total = $total - $membership - (($days - 1) * 20000);        
            ?>

            <p>Based floor: Rp <?php echo $floor;?></p><br>
            <p>Based type: Rp <?php echo $type;?></p><br>
            <p>Membership: Rp <?php echo $membership;?></p><br>
            <p>Day(s): <?php echo $days;?> day(s)</p><br>
            <p><b>TOTAL: Rp <?php echo $total;?></b></p><br>
        </main>

        <footer>
            <?php include 'src/components/footer.php';?>
        </footer>        
    </body>

</html>