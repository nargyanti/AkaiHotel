<!DOCTYPE html>
<html>
<head>
    <title>Akai Hotel - Home</title>
    <link rel="shortcut icon" href="img/akai-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="src/style.css">
    <script src="src/library/jquery-3.5.1.js"></script>
    <script src="src/library/jquery-ui-1.12.1/jquery-ui.js"></script>
    <script>
        let i = 0;
        $(document).ready(function () {
            $('.slidertitle, #slider img').hide();
            showNextImage();
            setInterval('showNextImage()', 4000);
        });

        function showNextImage() {
            i++;
            $('#sliderImage' + i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
            $('#title' + i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
            if (i == 5) {
                i = 0;
            }
        };
    </script>
    <style>
        #slider {
            margin: 0 auto;
            padding: 10px 0;
            width: 500px;
            height: 333px;            
        }

        #slider img {
            width: 500px;
            height: 333px;            
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px;
            -moz-border-radius: 5px 5px 5px 5px;
        }

        img {
            float: left;
        }

        #caption {
            text-align: justify;
            padding: 0 100px;
        }

    </style>
</head>
<body>
    <header>
        <?php include 'src/components/header.php';?>
    </header>
    <main id="content">        
        <h2>Akai Hotel</h2>        
        <div id="slider">
            <img id="sliderImage1" src="img/hotel.jpg">               
            <img id="sliderImage2" src="img/lobby-hotel.jpg">                
            <img id="sliderImage3" src="img/standard-room.jpg">
            <img id="sliderImage4" src="img/superior-room.jpg">
            <img id="sliderImage5" src="img/deluxe-room.jpg">
        </div>
        <div id="caption">
            <p>Akai hotel is a 3 star hotel located in Malang, East Java. At Akai Hotel, there are 3 types of rooms, namely:</p>
            <ul>
                <li>Standard Room: Rp 300.000</li>
                <li>Superior Room: Rp 400.000</li>
                <li>Deluxe Room: Rp 500.000</li>
            </ul>
        </div>
    </main>
    <footer>
        <?php include 'src/components/footer.php';?>
    </footer> 
</body>
</html>