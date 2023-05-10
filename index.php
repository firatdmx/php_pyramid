<html>
<body>
    <h1>

    <?php 
    
    function ucgen($sayi) {
        $n = 0;
        while ($n <= $sayi) {
            for ($i=0; $i <= $n; $i++) {
                echo "0 ";
            }
            echo "<br>";
            $n++;
        }
    }

    ucgen(15);

    ?>

    </h1>
</body>
</html>