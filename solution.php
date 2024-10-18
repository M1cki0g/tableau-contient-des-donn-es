
    <?php
    $clients = array(
        "client 1" => array("nom 1" => "Lesfer", "ville 1" => "Casablanca", "age 1" => "35"),
        "client 2" => array("nom 2" => "Karimi", "ville 2" => "Rabat", "age 2" => "47"),
        "client 3" => array("nom 3" => "Nawi", "ville 3" => "Tours", "age 3" => "58")
    );

    function afficher($t)
    {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Client</th>";
        echo "<th>Nom</th>";
        echo "<th>Ville</th>";
        echo "<th>Age</th>";
        echo "</tr>";

        foreach ($t as $key => $val) {
            echo "<tr>";
            echo "<td>" . "$key" . "</td>";
            foreach ($val as $kk => $vv) {
                echo "<td>$vv</td>";
            }
            echo "</tr>";
        }
    }
    afficher($clients);

    echo "<tr>";
    echo "<td>client 7</td>";
    echo "<td>Zerktouni</td>";
    echo "<td>Casablanca</td>";
    echo "<td>24</td>";
    echo "</tr>";
    echo "</table>";
    ?>
