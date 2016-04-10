<?php
	// Fichier utilisé uniquement dans CV/index.php pour le moment
	// Gestion des constantes
	if($_SERVER["HTTP_HOST"] == "192.168.0.19" OR $_SERVER["HTTP_HOST"] == "192.168.0.20")
	{
		define("HTTP_HOST_PATH", $_SERVER["HTTP_HOST"]."/portfolio"); // Tablette Xperia Z2 en local
	}
	
	elseif($_SERVER["HTTP_HOST"] == "nicolasmura.fr" OR $_SERVER["HTTP_HOST"] == "www.nicolasmura.fr"
		OR $_SERVER["HTTP_HOST"] == "nicolasmura.com" OR $_SERVER["HTTP_HOST"] == "www.nicolasmura.com")
	{
		define("HTTP_HOST_PATH", $_SERVER["HTTP_HOST"]); // Site distant sur OVH		
	}
	
	else
	{
		define("HTTP_HOST_PATH", "portfolio.local"); // localhost Nico
	}
?>