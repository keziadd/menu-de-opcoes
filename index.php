<?php


echo "LAÇO FOR<br>";
for ($i=0; $i<=10; $i++) {
    echo $i;
}

echo "LAÇO WHILE<br>";
$i = 0;

while($i<=10) {
    echo $i;
    $i++;
}

echo "LAÇO DO WHILE<br>";
$i = 0;
do {
    echo $i;
    $i++;
} while($i<=10);

echo "DECISÃO<br>";
$i = 0;
if($i<10) {
    echo "Valor da variável I é " . $i . " e passou no IF";
}elseif($i == 10) {
    echo "Valor da variável I é " . $i . " e passou no ELSE IF";
}else{
    echo "Valor da variável I é " . $i . " e passou no ELSE";
}

?>