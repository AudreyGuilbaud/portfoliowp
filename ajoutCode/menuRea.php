<style>
ul.menuReaPrincip {
    list-style-type:none;
    text-align: center; 
    margin-top : 30px;
}

li.menuReaPrincip {
    display:inline-block;
    width:5%;
}

ul li.menuReaPrincip a {
    display:block;
    float:left;   
    width : 100%;
    text-decoration:none;
    text-align:center;
    padding:5px;
}

ul li.menuReaPrincip a:hover {
    text-decoration:none; 

}

.marge {
    margin-top : -100px;
}

</style>

<div class="divLong blanc">
<div class="divCentre">
<?php
$url = $_SERVER['REQUEST_URI'] ;
if (strpos($url, 'stages') !== false) { ?>
    <ul class="menuReaPrincip">
        <li class="menuReaPrincip"><a href="index.php/realisations/situations-professionnelles"><img src="<?php echo bloginfo('url') ;?>/wp-content/uploads/2016/05/ppe-Copie-1-e1464394786715.jpeg"></a></li>
        <li class="menuReaPrincip"><a href="index.php/realisations/travaux-pratiques"><img src="<?php echo bloginfo('url') ;?>/wp-content/uploads/2016/05/tp-Copie-Copie-1-e1464395864454.jpeg"></a></li>
        <li class="menuReaPrincip"><a href="index.php/realisations/projets-personnels"><img src="<?php echo bloginfo('url') ;?>/wp-content/uploads/2016/05/projets-personnels-Copie-1-e1464395848814.jpeg"></a></li>
    </ul> <?php
}
if (strpos($url, 'situations-professionnelles') !== false) { ?>
    <ul class="menuRea">
        <li class="menuReaPrincip"><a href="index.php/realisations/stages"><img src="<?php echo bloginfo('url') ;?>/wp-content/uploads/2016/05/stages-Copie-1-e1464395834803.jpeg"></a></li>
        <li class="menuReaPrincip"><a href="index.php/realisations/travaux-pratiques"><img src="<?php echo bloginfo('url') ;?>/wp-content/uploads/2016/05/tp-Copie-Copie-1-e1464395864454.jpeg"></a></li>
        <li class="menuReaPrincip"><a href="index.php/realisations/projets-personnels"><img src="<?php echo bloginfo('url') ;?>/wp-content/uploads/2016/05/projets-personnels-Copie-1-e1464395848814.jpeg"></a></li>
    </ul> <?php
}
if (strpos($url, 'travaux-pratiques') !== false) { ?>
    <ul class="menuRea">
        <li class="menuReaPrincip"><a href="index.php/realisations/stages"><img src="<?php echo bloginfo('url') ;?>/wp-content/uploads/2016/05/stages-Copie-1-e1464395834803.jpeg"></a></li>
        <li class="menuReaPrincip"><a href="index.php/realisations/situations-professionnelles"><img src="<?php echo bloginfo('url') ;?>/wp-content/uploads/2016/05/ppe-Copie-1-e1464394786715.jpeg"></a></li>
        <li class="menuReaPrincip"><a href="index.php/realisations/projets-personnels"><img src="<?php echo bloginfo('url') ;?>/wp-content/uploads/2016/05/projets-personnels-Copie-1-e1464395848814.jpeg"></a></li>
    </ul> <?php
}
if (strpos($url, 'projets-personnels') !== false) { ?>
    <ul class="menuRea">
        <li class="menuReaPrincip"><a href="index.php/realisations/stages"><img src="<?php echo bloginfo('url') ;?>/wp-content/uploads/2016/05/stages-Copie-1-e1464395834803.jpeg"></a></li>
        <li class="menuReaPrincip"><a href="index.php/realisations/situations-professionnelles"><img src="<?php echo bloginfo('url') ;?>/wp-content/uploads/2016/05/ppe-Copie-1-e1464394786715.jpeg"></a></li>
        <li class="menuReaPrincip"><a href="index.php/realisations/travaux-pratiques"><img src="<?php echo bloginfo('url') ;?>/wp-content/uploads/2016/05/tp-Copie-Copie-1-e1464395864454.jpeg"></a></li>
    </ul> <?php
}
?>
</div>
</div>


