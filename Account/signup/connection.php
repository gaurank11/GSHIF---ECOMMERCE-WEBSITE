<?php

$username = "root";
$passward = "";
$server = 'localhost';
$database = 'g-shif';

$connection = mysqli_connect($server,$username,$passward,$database);

if($connection){
    ?>
    </script>
    alert('Connection Successful')
</script>
    <?php
}
?>