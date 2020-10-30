<!DOCTYPE html>
<html>
    <head>
        <title>Akai Hotel - Price Check</title>
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
            <h2>Price Check</h2>
            <form method="POST">
                <label for="floor">Floor</label><br>
                <input type="number" name="floor" id="floor"><br>
                <label for="type">Type</label><br>
                <select name="type" id="type">
                    <option value="standard">Standard</option>
                    <option value="superior">Superior</option>
                    <option value="deluxe">Deluxe</option>                    
                </select><br>
                <label for="membership">Membership</label><br>
                <select name="membership" id="type">
                    <option value="non-member">Non-member</option>
                    <option value="member">Member</option>                    
                </select><br>
                <label for="days">Day(s)</label><br>
                <input type="number" name="days" id="days"><br>
                <br>
                <input type="submit" value="Check" class="button" onclick=priceValidation()>                                
            </form>            
        </main>

        <footer>
            <?php include 'src/components/footer.php';?>
        </footer>
        <script>
            function priceValidation() {
                let floor = document.getElementById("floor");                
                let type = document.getElementById("type");
                let membership = document.getElementById("membership");
                let days = document.getElementById("days");

                console.log(type)                
                
                if (floor.value > 0 && days.value > 0) {
                    $('form').attr('action', 'price-display.php')
                } else {
                    alert("Data can't be empty!")
                } 
            }
        </script>
    </body>
</html>