<?php
echo("voer een nummer in ");
$nummer = readline();
$antwoord1 = $nummer % "2";
if ($antwoord1 == "0") {
    print("het nummer is even");
}
else {
    print("nummer is oneven");
}
?>