<?php

function Save($nom,$prenom,$ville,$tmp,$photo)
{
    $destination = "uploads/".$photo;

    $fs = fopen("students.txt", "a");

    $ligne = "$nom-$prenom-$ville-$destination";

    fwrite($fs, $ligne."\n");

    fclose($fs);

    move_uploaded_file($tmp, $destination);
}

function Display()
{
    $fs = fopen("students.txt", "r");

    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Prénom</th><th>Ville</th><th>Photo</th></tr>";

    while(!feof($fs)) {
        $ligne = fgets($fs);

        if($ligne != "") {
            $t = explode("-", trim($ligne));

            echo "<tr>";
            echo "<td>$t[0]</td>";
            echo "<td>$t[1]</td>";
            echo "<td>$t[2]</td>";
            echo "<td><img src='$t[3]' width='100'></td>";
            echo "</tr>";
        }
    }

    echo "</table>";

    fclose($fs);
}

function SearchByVille($ville)
{
    $fs = fopen("students.txt", "r");

    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Prénom</th><th>Ville</th><th>Photo</th></tr>";

    while(!feof($fs)) {
        $ligne = fgets($fs);

        if($ligne != "") {
            $t = explode("-", trim($ligne));

            if(strtolower($t[2]) == strtolower($ville)) {
                echo "<tr>";
                echo "<td>$t[0]</td>";
                echo "<td>$t[1]</td>";
                echo "<td>$t[2]</td>";
                echo "<td><img src='$t[3]' width='100'></td>";
                echo "</tr>";
            }
        }
    }

    echo "</table>";

    fclose($fs);
}
?>