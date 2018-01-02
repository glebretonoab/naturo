<?php
    $page = ( isset($_REQUEST['page']) ) ? $_REQUEST['page'] : "home";
?>

<div class="menu">
	<ul>
		<li>
			<a id="menu1" href="quandconsulter.html" class="link <?php echo ( $page == 'home') ? 'hover' : ''; ?>">
            	<span class="arrow"></span>Quand consulter ?
            </a>
        </li>
        <li>
            <a id="menu2" href="quisuisje.html" class="link <?php echo ( $page == 'quisuisje') ? 'hover' : ''; ?>">
                <span class="arrow"></span>Qui suis-je ?
            </a>
        </li>
		<li>
			<a id="menu3" href="mademarche.html" class="link <?php echo ( $page == 'mademarche') ? 'hover' : ''; ?>">
            	<span class="arrow"></span>Ma démarche
            </a>
        </li>
        <li>
            <a id="menu4" class="link <?php echo ( ($page == 'hygienealimentaire') || ($page == 'hygienecorporelle') || ($page == 'hygienepsychique') ) ? 'hover' : ''; ?>">
                <span class="arrow"></span>Hygiènisme
            </a>
            <ul id="ss_menu4" class="ssmenu">
                <li>
                    <a href="hygienealimentaire.html" class="link">
                        <span class="arrow"></span>Hygiène alimentaire
                    </a>
                </li>
                <li>
                    <a href="hygienecorporelle.html" class="link">
                        <span class="arrow"></span>Hygiène corporelle
                    </a>
                </li>
                <li>
                    <a href="hygienepsychique.html" class="link">
                        <span class="arrow"></span>Hygiène psychique
                    </a>
                </li>
            </ul>
        </li>
        <li>
			<a id="menu5" href="techniquessecondaires.html" class="link <?php echo ( $page == 'techniquessecondaires') ? 'hover' : ''; ?>">
            	<span class="arrow"></span>Techniques secondaires
            </a>
        </li>
        <li>
            <a id="menu6" href="horairestarifs.html" class="link <?php echo ( $page == 'horairestarifs') ? 'hover' : ''; ?>">
                <span class="arrow"></span>Horaires et tarifs
            </a>
        </li>
        <li>
			<a id="menu7" href="contact.html" class="link <?php echo ( $page == 'contact') ? 'hover' : ''; ?>">
            	<span class="arrow"></span>Me contacter
            </a>
        </li>
	</ul>
</div>