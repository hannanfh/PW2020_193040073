<?php

for ($i =1; $i <=10; $i++) {
if ($i <=4 || $i == 6){
    echo "Angkot No. $i Beroperasi dengan Baik!!. <br>";
} else if($i == 8) {
    echo "Angkot No. $i sedang Lembur! <br>";
} else if($i == 10 || $i == 5) {
    echo "Angkot No. $i sedang Lembur! <br>";
} else {
    echo "Angkot No. $i sedang tidak beroperasi! <br>";
}
}


?>