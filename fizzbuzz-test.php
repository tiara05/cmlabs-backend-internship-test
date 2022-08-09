<!DOCTYPE html>
<html>
<body>


    <?php  
        for($i = 1; $i <= 100; $i++) {  
            if (($i % 3 == 0) && ($i % 5 == 0))  
              echo "Angka ke-$i : fizzbuzz <br>";  
            else if (($i % 3) == 0)  
              echo "Angka ke-$i : fizz <br>";  
            else if (($i % 5) == 0)  
              echo "Angka ke-$i : buzz <br>";  
            else  
              echo "Angka ke-$i : $i <br>";  
        }  
    ?>  

</body>
</html>
