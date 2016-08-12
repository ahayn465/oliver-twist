<?php include("header.html") ?>

<style type="text/css">
	body { background:url("img/wine_oliver_twist.jpg") no-repeat center center fixed; ; font: 14px Georgia, serif;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;
 	}
</style>

<section class="wine-list">
	<div class="row">
		<div class='wine-menu'>
				<ul class='wine-menu__tabs'>
					<li class='wine-menu__tab' id='red'><a class='wine-menu__selector active'>Red</a></li>
					<li class='wine-menu__tab' id='white'><a class='wine-menu__selector'>White</a></li>
					<li class='wine-menu__tab' id='sparkling'><a class='wine-menu__selector'>Sparkling</a></li>
					<li class='wine-menu__tab' id='rose'><a class='wine-menu__selector'>Rose</a></li>
				</ul>
			<div class="wine-menu__content">
				<div class='wine-menu__section wine-menu__section--active' id="wine-menu__section--red">
								<?php 

					$string = file_get_contents("wine.json");
					$menu = json_decode($string, true);

					$variety = "red";

					if($menu['red']){
						echo "<ul>";
						foreach($menu['red']['wine'] as $wine){
									echo "<li class='wine-menu__list'>";
										echo "<div class='item_info'>";
											echo "<h4 class='wine-name' >" .$wine['heading']."</h4>";
											echo "<p class='wine-description'>".$wine['description']."</p>";
												echo "<p class='wine-cost'>";
												if(isset($wine['cost-glass'])){
													echo "<span id='cost-glass'>glass: $" . $wine['cost-glass'] . "</span>";
												}	
												if(isset($wine['cost-half'])){
													echo "<span id='cost-half'>1/2: $" . $wine['cost-glass'] . "</span>";
												}
												if(isset($wine['cost-bottle'])){
													echo "<span id='cost-bottle'>bottle: $" . $wine['cost-bottle'] . "</span>";
												}
												echo "</p>";
										
										echo "</div>";
											}
										
									echo "</li>";
								echo "</ul>";
								}

					?>
				</div>
				<div class='wine-menu__section' id="wine-menu__section--white">
								<?php 

					$string = file_get_contents("wine.json");
					$menu = json_decode($string, true);

					$variety = "white";

					if($menu['white']){
						echo "<ul>";
						foreach($menu['white']['wine'] as $wine){
									echo "<li class='wine-menu__list'>";
										echo "<div class='item_info'>";
											echo "<h4 class='wine-name' >" .$wine['heading']."</h4>";
											echo "<p class='wine-description'>".$wine['description']."</p>";
												echo "<p class='wine-cost'>";
												if(isset($wine['cost-glass'])){
													echo "<span id='cost-glass'>glass: $" . $wine['cost-glass'] . "</span>";
												}	
												if(isset($wine['cost-half'])){
													echo "<span id='cost-half'>1/2: $" . $wine['cost-glass'] . "</span>";
												}
												if(isset($wine['cost-bottle'])){
													echo "<span id='cost-bottle'>bottle: $" . $wine['cost-bottle'] . "</span>";
												}
												echo "</p>";
										
										echo "</div>";
											}
										
									echo "</li>";
								echo "</ul>";
								}

					?>
				</div>
				<div class='wine-menu__section' id="wine-menu__section--sparkling">
								<?php 

					$string = file_get_contents("wine.json");
					$menu = json_decode($string, true);

					$variety = "sparkling";

					if($menu['sparkling']){
						echo "<ul>";
						foreach($menu['sparkling']['wine'] as $wine){
									echo "<li class='wine-menu__list'>";
										echo "<div class='item_info'>";
											echo "<h4 class='wine-name' >" .$wine['heading']."</h4>";
											echo "<p class='wine-description'>".$wine['description']."</p>";
												echo "<p class='wine-cost'>";
												if(isset($wine['cost-glass'])){
													echo "<span id='cost-glass'>glass: $" . $wine['cost-glass'] . "</span>";
												}	
												if(isset($wine['cost-half'])){
													echo "<span id='cost-half'>1/2: $" . $wine['cost-glass'] . "</span>";
												}
												if(isset($wine['cost-bottle'])){
													echo "<span id='cost-bottle'>bottle: $" . $wine['cost-bottle'] . "</span>";
												}
												echo "</p>";
										
										echo "</div>";
											}
										
									echo "</li>";
								
								}
								echo "</ul>";

					?>
				</div>
				<div class='wine-menu__section' id="wine-menu__section--rose">
								<?php 

					$string = file_get_contents("wine.json");
					$menu = json_decode($string, true);

					$variety = "rose";

					if($menu['rose']){
						echo "<ul>";
						foreach($menu['rose']['wine'] as $wine){
									echo "<li class='wine-menu__list'>";
										echo "<div class='item_info'>";
											echo "<h4 class='wine-name' >" .$wine['heading']."</h4>";
											echo "<p class='wine-description'>".$wine['description']."</p>";
												echo "<p class='wine-cost'>";
												if(isset($wine['cost-glass'])){
													echo "<span id='cost-glass'>glass: $" . $wine['cost-glass'] . "</span>";
												}	
												if(isset($wine['cost-half'])){
													echo "<span id='cost-half'>1/2: $" . $wine['cost-glass'] . "</span>";
												}
												if(isset($wine['cost-bottle'])){
													echo "<span id='cost-bottle'>bottle: $" . $wine['cost-bottle'] . "</span>";
												}
												echo "</p>";
										
										echo "</div>";
											}
										
									echo "</li>";
								
								}
								echo "</ul>";
							?>
					</div>
				</div>
			</div>	
		</div>
</section>



<?php include("footer.html") ?>