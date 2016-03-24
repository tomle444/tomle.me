<?php 
	/***
	**	Get Ajax Information
	***/

	$id = strtolower($_POST["portfolio_id"]); 
	$path = "/wordpress/wp-content/themes/tomle";

	switch($id){
		case "gozolt":
		$arr = array(	        
			"id" => $id  = 
			array(
				"id"			=> $id,
				"title" 		=> "GoZolt",
				"description" 	=> "<p>A startup company that has created the world's smallest, lightest laptop charger.</p>

				<p>GoZolt collaborated with a local marketing team to create an e-commerce site built with Magento.</p>

				<p>My responsibilities were mainly involved with Front End Development requiring frequent updates and consultation.</p>",
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
				"thumbnail_1" 			=> array("src" => $path . "/images/portfolio/project-". $id ."-1.png", "height" => 468),
				)
			);
		break;
		case "fpdatasolutions":
		$arr = array(	        
			"id" => $id  = 
			array(
				"id"			=> $id,
				"title" 		=> "Focal Point Data Solutions",
				"description" 	=> "<p>A service technology company providing data management, analytics and business intelligence solutions for hospital pharmacies.</p>

				<p>The client requested a Front End solution for a static website buildout. Design mockups were provided by the client and the site was delivered using the Jekyll static site generator.</p>",
				"tags"			=> "<ul class=\"tags\"> 
            
						            <li>Responsive Web Design</li>
						            
						            <li>HTML</li>
						            
						            <li>CSS</li>
						            
						            <li>Jquery</li>
						            
						            <li>Jekyll</li>
						            
						          </ul>",
				"date" 			=> "2015", 
				"url" 			=> "www.fpdatasolutions.com", 
				"thumbnail_1" 			=> array("src" => $path . "/images/portfolio/project-". $id ."-1.png", "height" => 468),
				)
			);
		break;
		case "thedancesocks":
		$arr = array(	        
			"id" => $id  = 
			array(
				"id"			=> $id,
				"title" 		=> "The Dance Socks",
				"description" 	=> "<p>A product that lets you dance using a sock that goes over your regular shoes.</p>

				<p>This was a client that was moving to the Magento e-commerce platform. I was able to replicate their previous responsive ecommerce website using a customized Magento Responsive Web Design Theme.</p>",
				"tags"			=> "<ul class=\"tags\">
		    	
							    		<li>Responsive Web Design</li>
							    	
							    		<li>HTML</li>
							    	
							    		<li>CSS</li>
							    	
							    		<li>Magento</li>
							    	
							    </ul>",
				"date" 			=> "2014", 
				"url" 			=> "www.thedancesocks.com", 
				"thumbnail_1" 			=> array("src" => $path . "/images/portfolio/project-". $id ."-1.png", "height" => 468),
				)
			);
		break;
		case "bsasi":
		$arr = array(	        
			"id" => $id  = 
			array(
				"id"			=> $id,
				"title" 		=> "Bay State Alarm Security Integrators",
				"description" 	=> "<p>BSA Security Integrators is a provider in professional security solutions for their customers ranging from small commercial systems to major industries.</p>

				<p>The client was in need of a newer ecommerce website design and they provided a rough wireframe and company logo from which I was able to create a Photoshop mockup. Then I was tasked in using the mockup and implementing it into a fully custom designed Magento theme.</p>",
				"tags"			=> "<ul class=\"tags\">							    		
							    	
							    		<li>HTML</li>
							    	
							    		<li>CSS</li>
							    	
							    		<li>Magento</li>

							    		<li>Photoshop</li>
							    	
							    </ul>",
				"date" 			=> "2012", 
				"url" 			=> "www.bsasi.com", 
				"thumbnail_1" 			=> array("src" => $path . "/images/portfolio/project-". $id ."-1.png", "height" => 468),
				)
			);
		break;
		case "tribalhollywood":
		$arr = array(	        
			"id" => $id  = 
			array(
				"id"			=> $id,
				"title" 		=> "Tribal Hollywood",
				"description" 	=> "<p>Tribal Hollywood is a Men's Jewelry store based out of Los Angeles, California. They specialize in selling designer men's jewelry and accessories.</p>

				<p>A longtime client of ours, Tribal Hollywood had a distinct look and feel that they wanted to maintain. Their emphasis was on targeting the night club, rockstar, trendy, party-goers that frequent the night life scene that is found the in Hollywood area.</p>
				<p>Working closely with the client, I was responsible for creating a set of wireframes and then a set of highly detailed Photoshop mockups which was then implemented into a Magento theme by another development team. I also created the original category images and graphic imagery.</p>",
				"tags"			=> "<ul class=\"tags\">							    		
							    	
							    		<li>UI/UX Design</li>

							    		<li>Graphic Design</li>

							    		<li>Photoshop</li>
							    	
							    </ul>",
				"date" 			=> "2012", 
				"url" 			=> "www.tribalhollywood.com", 
				"thumbnail_1" 			=> array("src" => $path . "/images/portfolio/project-" . $id . "-1.png", "height" => 468),
				)
			);
		break;
	}



	echo json_encode($arr);

	?>