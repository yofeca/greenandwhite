<div class="container col-md-10 col-md-offset-2">
	<?php
		$pages = array(
			array(
				"title" => "Home",
				"link" => base_url('page/home'),
			),
			array(
				"title" => "Yearbook Registration",
				"link" => base_url('page/yearbook_registration'),
			),
			array(
				"title" => "Photo Packages",
				"link" => base_url('page/photo_packages'),
			),
			array(
				"title" => "Pictorial Scheduling",
				"link" => base_url('page/pictorial_scheduling'),
			),
			array(
				"title" => "Online Verification",
				"link" => base_url('page/online_verification'),
			),
			array(
				"title" => "Photo & Yearbook Distribution",
				"link" => base_url('page/photo_yearbook_distribution'),
			),
			array(
				"title" => "About Us",
				"link" => base_url('page/about_us'),
			),
			array(
				"title" => "FAQ",
				"link" => base_url('page/faq'),
			),
			array(
				"title" => "Sponsors",
				"link" => base_url('page/sponsors')
			)
		);
		
		$k = $_GET['k'];
		
		$result = array();
		$i = 0;
		/* Pattern with OR
		$terms = explode(' ', $k);
		
		$pattern = '';
		$i = 0;
		
		foreach($terms as $t)
		{
			$i++;
			if($i == 1)
				$pattern = $t;
			else
				$pattern = $pattern . '|' . $t;
		}
		
		$pattern = '"' .$pattern.'"';
		*/
		if($k)
		{
			foreach($pages as $p){
				$pc = file_get_contents($p['link']);
				$pc = strip_tags($pc);
				
				if(preg_match('/'.$k.'/i',$pc,$matches,PREG_OFFSET_CAPTURE))
				{
					$result[$i] = "<a href='".$p['link']."'/><h4>".$p['title']."</h4></a>";
					$i++;
				}
			}
		}
		if($result)
		{
			echo '<h3>Search for "'.$k. '" result to:</h3><br/>';
			foreach($result as $r){
				echo $r;
			}
		}
		else
		{
			$k = '_blank_';
			echo '<h3>Search for '.$k.' returned empty result.</h3>';
		}
	?>
</div>