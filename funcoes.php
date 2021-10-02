<?php
function funcao() {
    for($t = 0; $t <= 10; $t++) {
        echo $t;
        echo '<br/>';
    }

    echo "<hr/>";

}
funcao();

for($f = 0; $f < 10; $f++) {
    funcao();
}