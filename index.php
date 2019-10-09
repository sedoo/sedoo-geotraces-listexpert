<?php
/**
 * GEOTRACES Researchers Analytical Expertise Database (Read CSV File)
 * author : SEDOO, OMP Data services, Pierre VERT
 * version : 1.0.2
 * gitURI: https://github.com/sedoo/sedoo-geotraces-listexpert
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
        <th><a class="tooltipped" data-position="top" data-tooltip="Sort by First name">First name</a></th>
        <th><a class="tooltipped" data-position="top" data-tooltip="Sort by Surname">Surname</th>
        <th><a class="tooltipped" data-position="top" data-tooltip="Sort by Position">Position</th>
        <th><a class="tooltipped" data-position="top" data-tooltip="Sort by Institution">Institution</th>
        <th><a class="tooltipped" data-position="top" data-tooltip="Sort by Country">Country</th>
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
        if (array_key_exists (1, $data)){$firstname=$data[1];}
        if (array_key_exists (2, $data)){$surname=$data[2];}
        if (array_key_exists (3, $data)){$position=$data[3];}
        if (array_key_exists (4, $data)){$institution=$data[4];}
        if (array_key_exists (5, $data)){$country=$data[5];}
        if (array_key_exists (6, $data)){$continent=$data[6];}
        if (array_key_exists (7, $data)){$email=explode("@", $data[7]);}
        if (array_key_exists (8, $data)){$cvUrl=$data[8];}
        if (array_key_exists (9, $data)){$expertise=$data[9];}
        if (array_key_exists (10, $data)){$intercalibration=$data[10];}
        if (array_key_exists (11, $data)){$consent=$data[11];}
        if ($i > 0)
        {
            ?>
            <tr>
                <td><a class="waves-effect waves-light modal-trigger tooltipped"  data-position="right" data-tooltip="More about <?php echo $firstname;?>  <?php echo $surname;?>" href="#modal<?php echo $i;?>"><?php echo $firstname;?></a>
                    <div id="modal<?php echo $i;?>" class="modal">
                        <div class="modal-content">
                            <h3><?php echo $firstname;?> <?php echo $surname;?> <a href="<?php echo $cvUrl;?>" class="waves-effect waves-light btn" title="go to personnal website">
                            <i class="material-icons left">launch</i>Visit CV url</a><br>
                            <small>
                                <?php echo $email[0];?><span style="display:none">Dear bot, no email for you here</span>@<span style="display:none">and bad domain</span><?php echo $email[1];?>
                            </small>
                            </h3>
                            <p><?php echo $position;?> - <?php echo $institution;?></p>
                            <p><?php echo $country;?>, <?php echo $continent;?></p>
                            <?php if ($expertise !== "") {
                            ?>
                            <h4>Self-reported Expertise</h4>
                            <p><?php echo $expertise;?></p> 
                            <?php
                            }
                            ?>
                            <?php if ($intercalibration !== "") {
                            ?>
                            <h4>Participated in Intercalibration</h4>
                            <p><?php echo $intercalibration;?></p> 
                            <?php
                            }
                            ?>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
                        </div>
                    </div>
                </td>
                <td><?php echo $surname;?></td>
                <td><?php echo $position;?></td>
                <td><?php echo $institution;?></td>
                <td><?php echo $country;?></td>
                <td><?php echo $expertise;?></td>
                <td><?php echo $intercalibration;?></td>  
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