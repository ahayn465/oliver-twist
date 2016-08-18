<?php 
include("header.html") 

?>
<section class="main-content-section menu_categories">
	<div class="row">
		<div class="food-menu">
			<div class="menu-section">
				<div class="menu-section__header menu-section-soups"  href="#accordion-1">
					<a class="menu-section-title">Soups and Salads </a>
				</div>
				<div id="accordion-1" class="row menu-section-content">
					<h2 class="course_title center">Soups and Salads</h2>
					<hr class="style-seven"/>
					<h4 class="time-avail center">All Day Every Day</h4>
					<div class="small-12 large-6 columns">
						<div class="menu">
						<?php

							$string = file_get_contents("menu.json");
							$menu = json_decode($string, true);

							$course = "soupsalads";

							echo "<ul class='menu-section'>";
							foreach ($menu[$course]['menu_item'] as $item) {
								echo "<li>";
									echo "<div class='item_info'>";
										echo "<h4 class='dish-name' >" .$item['title']."</h4>";
										echo "<p class='item_desc'>".$item['description']."</p>";
										echo "<p class='price'>".$item['cost']."</p>";

										echo "<hr />";
									echo "</div>";
								echo "</li>";
							}
							echo "</ul>";
							?>
						</div>
					</div>
					<div class="small-12 large-6 columns">
						<div class="menu">
						<?php

							$string = file_get_contents("menu.json");
							$menu = json_decode($string, true);

							$course = "soupsalads";

							echo "<ul class='menu-section'>";
							foreach ($menu[$course]['menu_item2'] as $item) {
								echo "<li>";
									echo "<div class='item_info'>";
										echo "<h4 class='dish-name' >" .$item['title']."</h4>";
										echo "<p class='item_desc'>".$item['description']."</p>";
										echo "<p class='price'>".$item['cost']."</p>";

										echo "<hr />";
									echo "</div>";
								echo "</li>";
							}
							echo "</ul>";
							?>
						</div>
					</div>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->
			<div class="menu-section">
				<div class="menu-section__header menu-section-appys"  href="#accordion-2">
					<a class="menu-section-title">Appetizers</a>
				</div>
				<div id="accordion-2" class="row menu-section-content">
					<h2 class="course_title center">Appetizers</h2>
					<hr class="style-seven"/>
					<h4 class="time-avail center">All Day Every Day*</h4>
					<div class="small-12 large-6 columns">
						<div class="menu">
						<?php

							$string = file_get_contents("menu.json");
							$menu = json_decode($string, true);

							$course = "appetizers";

							echo "<ul class='menu-section'>";
							foreach ($menu[$course]['menu_item'] as $item) {
								echo "<li>";
									echo "<div class='item_info'>";
										echo "<h4 class='dish-name' >" .$item['title']."</h4>";
										echo "<p class='item_desc'>".$item['description']."</p>";
										echo "<p class='price'>".$item['cost']."</p>";

										echo "<hr />";
									echo "</div>";
								echo "</li>";
							}
							echo "</ul>";
							?>
						</div>
					</div>
					<div class="small-12 large-6 columns">
						<div class="menu">
						<?php

							$string = file_get_contents("menu.json");
							$menu = json_decode($string, true);

							$course = "appetizers";

							echo "<ul class='menu-section'>";
							foreach ($menu[$course]['menu_item2'] as $item) {
								echo "<li>";
									echo "<div class='item_info'>";
										echo "<h4 class='dish-name' >" .$item['title']."</h4>";
										echo "<p class='item_desc'>".$item['description']."</p>";
										echo "<p class='price'>".$item['cost']."</p>";

										echo "<hr />";
									echo "</div>";
								echo "</li>";
							}
							echo "</ul>";
							?>
						</div>

					</div>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->
			<div class="menu-section">
				<div class="menu-section__header menu-section-lunch"  href="#accordion-3">
					<a class="menu-section-title">Lunch</a>
				</div>
				<div id="accordion-3" class="row menu-section-content">
					<div class="menu_desc small-12 columns">
						<h2 class="course_title center pad underlined">Lunch</h2>
						<hr class="style-seven"/>
						<h4 class="time-avail center left">Daily 11am - 4:30pm</h4>
						<p class='menu_details'>All burgers, paninis, and tacos are served with your choice of sweet-potato fries, hand-cut fries, soup of the day or house salad (salad contains nuts). </p>
						<p class='menu_details'> Delicious Homemade Salad Dressings: Spicy Stone-ground Honey Mustard Vinagrette, Champagne Vinagrette, Asian Vinagrette, Butterminl Pepercorn Ranch, or Lemon Yoghurt. </p>
						<p class='menu_details'>Upgrade your side: Roasted Corn and Smoked Salmon Chowder $1, Grilled Romain $4, Grilled Greek $4.</p>
						<div class="small-12 large-6 columns">
							<div class="menu">

								<h2 class="course_title">Burgers</h2>
								<p>All burgers served on a kaiser bun with lettuce, tomato, raw onion and a pickle.</p>
								 <?php

								$string = file_get_contents("menu.json");
								$menu = json_decode($string, true);

								$course = "lunch";

								if($menu[$course]['add-ons']){
									echo "<ul class='menu-section'>";
									echo "<li id='burger-addons'>";
									echo "<div class='item_info sub_menu'>";
									echo "<h4 class='dish-name' >Burger Toppings</h4>";

									foreach ($menu[$course]['add-ons'] as $addon) {
										echo "<p class='item_desc sub'>" .$addon['item']."</p>";
										}
									echo "</div>";
									echo "</li>";
									echo "</ul";
								}

								echo "<ul class='menu-section'>";
								foreach ($menu[$course]['menu_item'] as $item) {
									echo "<li>";
										echo "<div class='item_info'>";
											echo "<h4 class='dish-name' >" .$item['title']."</h4>";
											echo "<p class='item_desc'>".$item['description']."</p>";
											echo "<p class='price'>".$item['cost']."</p>";
											echo "<hr />";
										echo "</div>";

									echo "</li>";
								}
								echo "</ul>";



								?>
								<h2 class="course_title">Pasta</h2>
								<?php

								$string = file_get_contents("menu.json");
								$menu = json_decode($string, true);

								$course = "pasta";

								echo "<ul class='menu-section'>";
								foreach ($menu[$course]['menu_item'] as $item) {
									echo "<li>";
										echo "<div class='item_info'>";
											echo "<h4 class='dish-name' >" .$item['title']."</h4>";
											echo "<p class='item_desc'>".$item['description']."</p>";
											echo "<h4 class='price'>".$item['cost']."</h4>";
											echo "<hr />";
										echo "</div>";

									echo "</li>";
								}
								echo "</ul>";
								?>
							</div>
						</div>
						<div class="small-12 large-6 columns">
							<div class="menu">

								<h2 class="course_title">Panini Press Sandwiches</h2>
								<p>Served on fresh Rosemary focaccia unless otherwise specified.</p>
								 <?php

								$string = file_get_contents("menu.json");
								$menu = json_decode($string, true);

								$course = "paninis";

								echo "<ul class='menu-section'>";
								foreach ($menu[$course]['menu_item'] as $item) {
									echo "<li>";
										echo "<div class='item_info'>";
											echo "<h4 class='dish-name' >" .$item['title']."</h4>";
											echo "<p class='item_desc'>".$item['description']."</p>";
											echo "<h4 class='price'>".$item['cost']."</h4>";
											echo "<hr />";
										echo "</div>";

									echo "</li>";
								}
								echo "</ul>";



								?>
							</div>
							<div class="menu">

								<h2 class="course_title">Tacos</h2>
								<p>Served on homemade flour tortillias. Gluten free corn tortillias available.</p>
								<?php

								$string = file_get_contents("menu.json");
								$menu = json_decode($string, true);

								$course = "tacos";

								echo "<ul class='menu-section'>";
								foreach ($menu[$course]['menu_item'] as $item) {
									echo "<li>";
										echo "<div class='item_info'>";
											echo "<h4 class='dish-name' >" .$item['title']."</h4>";
											echo "<p class='item_desc'>".$item['description']."</p>";
											echo "<h4 class='price'>".$item['cost-day']."</h4>";
											echo "<hr />";

										echo "</div>";
									echo "</li>";
								}
								echo "</ul>";
								?>

								<h2 class="course_title">Pizza</h2>
								<p>Served on a homemade thin crust. Gluten free crust available.</p>
								<?php

								$string = file_get_contents("menu.json");
								$menu = json_decode($string, true);

								$course = "pizza";



								echo "<ul class='menu-section'>";
								foreach ($menu[$course]['menu_item'] as $item) {
									echo "<li>";
										echo "<div class='item_info'>";
											echo "<h4 class='dish-name' >" .$item['title']."</h4>";
											echo "<p class='item_desc'>".$item['description']."</p>";
											echo "<h4 class='price'>".$item['cost']."</h4>";
											echo "<hr />";
										echo "</div>";


									echo "</li>";
								}
								echo "</ul>";

								if($menu[$course]['add-ons']){
									echo "<ul>";
									echo "<li>";
									echo "<div class='item_info sub_menu'>";
									echo "<h4 class='dish-name' >Pizza Toppings</h4>";

									foreach ($menu[$course]['add-ons'] as $addon) {
										echo "<p class='item_desc sub pizza'>" .$addon['item']."</p>";
										echo "<h4 class='price'>".$addon['cost']."</h4>";
										echo "<hr />";
										}
									echo "</div>";
									echo "</li>";
									echo "</ul";
								}



								?>
								</div>
						</div>
					</div>
				</div>
			</div><!--end .accordion-section-->
			<div class="menu-section">
				<div class="menu-section__header menu-section-dinner" href="#accordion-4">
					<a class="menu-section-title" >Dinner</a>
				</div>
				<div id="accordion-4" class="row menu-section-content">
						<div class="menu_desc small-12 columns">
							<h2 class="course_title center pad underlined">Dinner</h2>
							<hr class="style-seven"/>
							<h4 class="time-avail center">Daily 4:30pm - Close</h4>

							<div class="small-12 large-6 columns">
								<div class="menu">

									<h2 class="course_title">Entrées</h2>
									<p>Served with seasonal vegetables and your choice of Dutchess mashed potatoes or a wild rice pilaf.</p>
									 <?php

									$string = file_get_contents("menu.json");
									$menu = json_decode($string, true);

									$course = "dinner";

									echo "<ul class='menu-section'>";
									foreach ($menu[$course]['menu_item'] as $item) {
										echo "<li>";
											echo "<div class='item_info'>";
												echo "<h4 class='dish-name' >" .$item['title']."</h4>";
												echo "<p class='item_desc'>".$item['description']."</p>";
												echo "<h4 class='price'>".$item['cost']."</h4>";
												echo "<hr />";

											echo "</div>";

										echo "</li>";

									}
									echo "</ul>";



									?>

									<h2 class="course_title">Tacos</h2>
									<p>Served on homemade flour tortillias. Gluten free corn tortillias available.</p>
									<?php

									$string = file_get_contents("menu.json");
									$menu = json_decode($string, true);

									$course = "tacos";

									echo "<ul class='menu-section'>";
									foreach ($menu[$course]['menu_item'] as $item) {
										echo "<li>";
											echo "<div class='item_info'>";
												echo "<h4 class='dish-name' >" .$item['title']."</h4>";
												echo "<p class='item_desc'>".$item['description']."</p>";
												echo "<h4 class='price'>".$item['cost-night']."</h4>";
												echo "<hr />";
											echo "</div>";

										echo "</li>";
									}
									echo "</ul>";
									?>
								</div>
							</div>
							<div class="small-12 large-6 columns">
								<div class="menu">
									<h2 class="course_title">Pasta</h2>
									<p>Served with a slice of fresh Rosemarry focaccia.</p>
									<?php

									$string = file_get_contents("menu.json");
									$menu = json_decode($string, true);

									$course = "pasta";


									echo "<ul class='menu-section'>";
									foreach ($menu[$course]['menu_item'] as $item) {
										echo "<li>";
											echo "<div class='item_info'>";
												echo "<h4 class='dish-name' >" .$item['title']."</h4>";
												echo "<p class='item_desc'>".$item['description']."</p>";
												echo "<h4 class='price'>".$item['cost']."</h4>";
												echo "<hr />";
											echo "</div>";

										echo "</li>";
									}
									echo "</ul>";
									?>



									<h2 class="course_title">Pizza</h2>
									<p>Served on a homemade thin crust. Gluten free crust available.</p>
									<?php

									$string = file_get_contents("menu.json");
									$menu = json_decode($string, true);

									$course = "pizza";



									echo "<ul class='menu-section'>";
									foreach ($menu[$course]['menu_item'] as $item) {
										echo "<li>";
											echo "<div class='item_info'>";
												echo "<h4 class='dish-name' >" .$item['title']."</h4>";
												echo "<p class='item_desc'>".$item['description']."</p>";
												echo "<h4 class='price'>".$item['cost']."</h4>";
												echo "<hr />";
											echo "</div>";

										echo "</li>";
									}
									echo "</ul>";

										if($menu[$course]['add-ons']){
										echo "<ul>";
										echo "<li>";
										echo "<div class='item_info sub_menu'>";
										echo "<h4 class='dish-name' >Pizza Toppings</h4>";

										foreach ($menu[$course]['add-ons'] as $addon) {
											echo "<p class='item_desc sub pizza'>" .$addon['item']."</p>";
											echo "<h4 class='price'>".$addon['cost']."</h4>";
											echo "<hr />";
											}
										echo "</div>";
										echo "</li>";
										echo "</ul";
									}



									?>
									</div>
								</div>
						</div>
					</div>
				</div><!--end .accordion-section-content-->
			<div class="menu-section">
				<div class="menu-section__header menu-section-brunch" href="#accordion-5">
					<a class="menu-section-title" >Brunch</a>
				</div>
				<div id="accordion-5" class="row menu-section-content">
					<div class="menu_desc small-12 columns">

						<h2 class="course_title center pad underlined">Brunch</h2>
						<hr class="style-seven"/>
						<h4 class="time-avail center">Sundays 11am - 1pm</h4>
					<div class="small-12 large-6 columns">
								<div class="menu">
									 <?php

									$string = file_get_contents("menu.json");
									$menu = json_decode($string, true);

									$course = "brunch";
									echo "<ul class='menu-section'>";
									foreach($menu[$course]['menu-item'] as $item){
										echo "<li>";
										echo "<div class='item_info'>";
											echo "<h4 class='dish-name' >" .$item['title']."</h4>";
											echo "<p class='item_desc'>".$item['description']."</p>";
											if($item['cost']){
												echo "<h4 class='price'>".$item['cost']."</h4>";
												echo "<hr />";
											}


										echo "</div>";
										echo "</li>";
									}
									echo "</ul>";


									?>

								</div>
						</div>
								<div class="small-12 large-6 columns">
									<div class="menu">

										<?php

											$string = file_get_contents("menu.json");
											$menu = json_decode($string, true);

											$course = "brunch";
											echo "<ul class='menu-section'>";
											foreach($menu[$course]['menu-item2'] as $item){
												echo "<li>";
												echo "<div class='item_info'>";
													echo "<h4 class='dish-name' >" .$item['title']."</h4>";
													echo "<p class='item_desc'>".$item['description']."</p>";
													if($item['cost']){
														echo "<h4 class='price'>".$item['cost']."</h4>";
														echo "<hr />";
													}


												echo "</div>";
												echo "</li>";
											}
											echo "</ul>";
											if($menu[$course]['add-ons']){
												echo "<div class='item_info sub_menu brunch'>";
												echo "<ul>";
												echo "<li>";


												foreach ($menu[$course]['add-ons'] as $addon) {
													echo "<p class='item_desc sub '>" .$addon['item']." <span class='right'>".$addon['cost']."</span></p>";


													}

												echo "</li>";
												echo "</ul>";
												echo "</div>";
											}



										?>
									</div>
								</div>

								<div class="small-12 columns"><h2 class='course_title center pad underlined'>Brunch Sides</h2>
								<hr class="style-seven"/></div>


								<div class="small-12 medium-4 columns">
									<div class="menu left">
										<?php
										if($menu[$course]['brunch-add-ons']){
												echo "<div class='item_info sub_menu brunch-adds'>";

												echo "<ul class='menu-section'>";


												$count = 0;
												foreach ($menu[$course]['brunch-add-ons'] as $addon) {
													echo "<li>";


													echo "<p class='item_desc sub '>" .$addon['item']." <span class='right'>".$addon['cost']."</span></p>";

													$count ++ ;
													if($count == 4){
														echo "</li></ul>
														</div></div></div><div class='small-12 medium-4 columns'><div class='menu right'><div class='item_info sub_menu brunch-adds'>
														<ul class=''>";
													}
													echo "</li>";
													if($count == 8){
														echo "</li></ul>
														</div></div></div><div class='small-12 medium-4 columns'><div class='menu right'><div class='item_info sub_menu brunch-adds'>
														<ul class=''>";
													}
													echo "</li>";
													}


												echo "</ul>";
												echo "</div>";
											}
											?>

									</div>
								</div>
								<div class="small-12 columns"><h2 class='course_title center pad underlined'>Lunch Items</h2>
								<hr class="style-seven"/></div>

								<div class="small-12 large-6 columns">
									<div class="menu left">
								<?php
								echo "<h2 class='course_title'>Soups and Salads</h2>";

								$string = file_get_contents("menu.json");
								$menu = json_decode($string, true);

								$course = "soupsalads";

								echo "<ul class='menu-section'>";
								foreach ($menu[$course]['menu_item'] as $item) {
									echo "<li>";
										echo "<div class='item_info'>";
											echo "<h4 class='dish-name' >" .$item['title']."</h4>";
											echo "<p class='item_desc'>".$item['description']."</p>";
											echo "<h4 class='price'>".$item['cost']."</h4>";

											echo "<hr />";
										echo "</div>";
									echo "</li>";
								}

								foreach ($menu[$course]['menu_item2'] as $item) {
									echo "<li>";
										echo "<div class='item_info'>";
											echo "<h4 class='dish-name' >" .$item['title']."</h4>";
											echo "<p class='item_desc'>".$item['description']."</p>";
											echo "<h4 class='price'>".$item['cost']."</h4>";

											echo "<hr />";
										echo "</div>";
									echo "</li>";
								}
									echo '<h2 class="course_title">Panini Press Sandwiches</h2>';
									echo '<p>Served on fresh Rosemary focaccia unless otherwise specified.</p>';


									$string = file_get_contents("menu.json");
									$menu = json_decode($string, true);

									$course = "paninis";

									echo "<ul class='menu-section'>";
									foreach ($menu[$course]['menu_item'] as $item) {
										echo "<li>";
											echo "<div class='item_info'>";
												echo "<h4 class='dish-name' >" .$item['title']."</h4>";
												echo "<p class='item_desc'>".$item['description']."</p>";
												echo "<h4 class='price'>".$item['cost']."</h4>";
												echo "<hr />";
											echo "</div>";

										echo "</li>";
									}
									echo "<ul/>";




								echo "<ul/>";
								?>
									</div>
								</div>
								<div class="small-12 large-6 columns">
									<div class="menu left">
										<h2 class="course_title">Burgers</h2>
									<p>All burgers served on a kaiser bun with lettuce, tomato, raw onion and a pickle.</p>
									 <?php

									$string = file_get_contents("menu.json");
									$menu = json_decode($string, true);

									$course = "lunch";

									if($menu[$course]['add-ons']){
										echo "<ul class='menu-section'>";
										echo "<li>";
										echo "<div class='item_info sub_menu burgs'>";
										echo "<h4 class='dish-name' >Burger Toppings</h4>";

										foreach ($menu[$course]['add-ons'] as $addon) {
											echo "<p class='item_desc sub'>" .$addon['item']."</p>";
											}
										echo "</div>";
										echo "</li>";
										echo "</ul";
									}

									echo "<ul class='menu-section'>";
									foreach ($menu[$course]['menu_item'] as $item) {
										echo "<li>";
											echo "<div class='item_info'>";
												echo "<h4 class='dish-name' >" .$item['title']."</h4>";
												echo "<p class='item_desc'>".$item['description']."</p>";
												echo "<h4 class='price'>".$item['cost']."</h4>";
												echo "<hr />";
											echo "</div>";

										echo "</li>";
									}
									echo "<ul/>";
									?>
									</div>
								</div>
					</div>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->
		</div><!--end .accordion-->
		</div>
	</div>
</section>

					<script>
			$(document).ready(function() {

			 
			    $('.menu-section__header').click(function(e) {
			    	console.log(this);
			    
			    	e.preventDefault();
			        // Grab current anchor value
			        var currentAttrValue = $(this).attr('href');

			        console.log(currentAttrValue);
			      

			        if($(e.target).is('.active')) {
			        	$(e.target).removeClass('active');
			            $(currentAttrValue).slideUp(300).removeClass('open');
			        }else {
			            // Add active class to section title
			            $(this).addClass('active');
			            // Open up the hidden content panel
			            $(currentAttrValue).slideDown(300).addClass('open');
			        }
			 
			        
			    });
			});
			</script>

	<?php include("footer.html") ?>
