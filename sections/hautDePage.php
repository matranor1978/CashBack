
	<!-- /////////////////////////////////////////Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>

				</button>
				<div class="navbar-brand">
					<img src="images/logo.png" class="hidden-xs" alt="">
					<h3 class="visible-xs">Cash Back</h3>
				</div>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul id="menu-demo2">
					<?php

                    $menuHTML = "";

                    foreach ($menu as $element) {

                        // création d'un élément de liste pour chaque page
                        $menuHTML = $menuHTML . '<li';

                        if($section == $element->getSection()) {

                            $menuHTML = $menuHTML . ' class="ici"';

                        }

                        // création du lien
                        $menuHTML = $menuHTML . '><a href="index.php?section=' . $element->getSection() . 
                                                '" title="' . $element->getTitre() . '">' . $element->getTitre() . '</a>';

                        $menuHTML = $menuHTML . '</li>';

                    }

                    echo($menuHTML);
                ?>
				</ul>
			</div>
			<div>
				<?php  if (isset($_SESSION['login']))echo $_SESSION['login']; ?>
				<?php  if (isset($_SESSION['economies']))echo $_SESSION['economies']; ?>
			</div>
		</div>
	</nav>
	
	<header id="intro">
		  
	</header>
	<!-- Header -->
	
	