<?php 
	/***
	**	Get Ajax Information
	***/

	$id = strtolower($_POST["portfolio_id"]); 
	$path = "/wordpress/wp-content/themes/tomle";
	//echo $title;

	switch($id){
		case "gozolt":
		$arr = array(	        
			"id" => $id  = 
			array(
				"title" 		=> "GoZolt",
				"description" 	=> "<p>A startup company that has created the world's smallest, lightest laptop charger.</p>

				<p>GoZolt collaborated with the Evolve marketing team to create an e-commerce site built with Magento.</p>

				<p>Our responsibilities were mainly involved with Front End Development requiring frequent updates and consultation.</p>",
				"tags"			=> "<ul class=\"tags\">
            
						            <li>Responsive Web Design</li>
						            
						            <li>HTML</li>
						            
						            <li>CSS</li>
						            
						            <li>Jquery</li>
						            
						            <li>Magento</li>
						            
						            <li>Wordpress</li>
						            
						          </ul>",
				"date" 			=> "2015-2016", 
				"url" 			=> "www.gozolt.com", 
				"thumbnail_1" 			=> array("src" => $path . "/images/portfolio/project-gozolt-1.png", "height" => 468),
				)
			);
		break;
		case "fpdatasolutions":
		$arr = array(	        
			"id" => $id  = 
			array(
				"title" 		=> "Focal Point Data Solutions",
				"description" 	=> "<p>A service technology company providing data management, analytics and business intelligence solutions for hospital pharmacies.</p>

				<p>The client requested a Front End solution for a static website buildout. Design comps were provided and the site was delivered using the Jekyll static site generator.</p>",
				"tags"			=> "<ul class=\"tags\"> 
            
						            <li>Responsive Web Design</li>
						            
						            <li>HTML</li>
						            
						            <li>CSS</li>
						            
						            <li>Jquery</li>
						            
						            <li>Jekyll</li>
						            
						          </ul>",
				"date" 			=> "2015", 
				"url" 			=> "www.fpdatasolutions.com", 
				"thumbnail_1" 			=> array("src" => $path . "/images/portfolio/project-gozolt-1.png", "height" => 468),
				)
			);
		break;
		case "thedancesocks":
		$arr = array(	        
			"id" => $id  = 
			array(
				"title" 		=> "The Dance Socks",
				"description" 	=> "<p>A product that lets you dance using a sock that goes over your regular shoes.</p>

				<p>This was a client that was moving to the Magento e-commerce platform. They had us replicate their old responsive website using Magento's Responsive Web Design Theme.</p>",
				"tags"			=> "<ul class=\"tags\">
		    	
							    		<li>Responsive Web Design</li>
							    	
							    		<li>HTML</li>
							    	
							    		<li>CSS</li>
							    	
							    		<li>Magento</li>
							    	
							    </ul>",
				"date" 			=> "2014", 
				"url" 			=> "www.thedancesocks.com", 
				"thumbnail_1" 			=> array("src" => $path . "/images/portfolio/project-gozolt-1.png", "height" => 468),
				)
			);
		break;
	}



	echo json_encode($arr);

	?>