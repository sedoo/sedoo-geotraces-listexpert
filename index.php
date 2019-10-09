<?php
/**
 * GEOTRACES Researchers Analytical Expertise Database (Read CSV File)
 * author : SEDOO, OMP Data services, Pierre VERT
 * version : 1.0.0
 * gitURI: 
 * 
 */

include ("parametres.php");
$titlePage="GEOTRACES Researchers Analytical Expertise Database";
include("header.php");
//open CSV
$file=fopen($fileExpertise, "r");

?>

<blockquote>
<strong>Legend:</strong> <br>
A - Aerosol; D - Dissolved (colloids included); P - Particulate; T - Total; TD - Total Dissolved; Sed - Sediment; Spe - Speciation; conc - Concentrations; iso - Isotopes 

</blockquote>

<table class="responsive-table striped sortable">
    <thead>
        <th>First name</th>
        <th>Surname</th>
        <th>Position</th>
        <th>Institution</th>
        <th>Country</th>
        <th>Self-reported Expertise</th>
        <th>Participated in Intercalibration</th>
    </thead>
    <tbody>

    <?php
    $i=0;
    while(!feof($file)) 
    {
        $ligne=fgets($file, 10000);
        $data=explode(";",$ligne);
        if (array_key_exists (1, $data)){$field1=$data[1];}
        if (array_key_exists (2, $data)){$field2=$data[2];}
        if (array_key_exists (3, $data)){$field3=$data[3];}
        if (array_key_exists (4, $data)){$field4=$data[4];}
        if (array_key_exists (5, $data)){$field5=$data[5];}
        if (array_key_exists (6, $data)){$field6=$data[6];}
        if (array_key_exists (7, $data)){$field7=explode("@", $data[7]);}
        if (array_key_exists (8, $data)){$field8=$data[8];}
        if (array_key_exists (9, $data)){$field9=$data[9];}
        if (array_key_exists (10, $data)){$field10=$data[10];}
        if (array_key_exists (11, $data)){$field11=$data[11];}
        if ($i > 0)
        {
            ?>
            <tr>
                <td><?php echo $field1;?></td>
                <td><?php echo $field2;?></td>
                <td><?php echo $field3;?></td>
                <td><?php echo $field4;?></td>
                <td><?php echo $field5;?></td>
                <td><?php echo $field9;?></td>
                <td><?php echo $field10;?></td>  
            </tr>
            <?php
        }
        $i++;
    }
    fclose($file);

    ?>
    </tbody>
</table>
</body>
</html>