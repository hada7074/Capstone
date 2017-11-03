<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>Capstone</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="includes/main.css"></link>

	<style>

		.navbar {
			margin-bottom: 50px;
			border-radius: 0;
		}
		


		footer {
			background-color: #f2f2f2;
			padding: 25px;
		}

		#ratingDiv {
			padding: 10px;
		}

		#myModal {
			top: 25%;
		}

	</style>

	<script type="text/javascript">
	
		$(window).on('load',function(){
			$('#myModal').modal('show');
		});


		function updateZip(){
			console.log( "Submit the following value to the backend: " + $("#zipInput").val() );
		}

	</script>

</head>


<body>

<?php include_once('includes/header.php'); ?>
<?php include_once('Classes/imageLoader.php'); ?>

<div class="container">

		<?php
					 $result = mysqli_query($db,
							"select r.*, i.image, v.text, avg(rating) as avg_rating, v.id as review_id
									from
								restaurant r
									join 
								image i on i.restaurant_id = r.id 
									left join
								review v on v.restaurant_id = r.id
								where (v.id is null or v.id in (select max(id) from review group by restaurant_id)) 
									group by r.id;");

			if ( $result ) {

				$resultCount = -1;
				$rowCount = 0;

				while( $row = mysqli_fetch_array( $result ) ) {

					$resultCount++;

					$rowId = $row['id'];

					if( $resultCount % 3 == 0 ){
						echo "<div class='row' name='row-".($rowCount++)."'>\n";
					}

					echo "<div class='col-sm-4'>\n";

						echo "<div class='panel panel-primary'>\n";

							echo "<div class='panel-body'>\n";
								echo "<img style='height: 300px; width:100%;' src='images/".$row['image']."' class='img-responisve' alt='image'>\n";
							echo "</div>\n";

							echo "<div class='panel-footer'> \n";

								echo "<table class='restaurantInfo'>\n";

									echo "<tr>\n";

										echo "<td colspan='2'>\n";
											echo "<h3>".$row['name']."</h3>\n";
										echo"</td>\n";

									echo "</tr>\n";

									echo "<tr>\n";

									$rating = number_format(round($row['avg_rating'], 1), 1);
									
									if(!$rating){
										$rating='0.0';
									}

										echo "<td>\n";
											echo "<h4>".$rating."</h4>\n";
										echo"</td>\n";

										echo "<td>\n";
											echo "<div id='rating-".$rowId."' class='ratingDiv'>\n";
												echo "<fieldset class='rating'>\n";
													echo "<input type='radio' id='rate5-".$rowId."' name='test-".$rowId."' value='5' /><label class='full' for='rate5-".$rowId."'></label>\n";
													echo "<input type='radio' id='rate4-".$rowId."' name='test-".$rowId."' value='4' /><label class='full' for='rate4-".$rowId."'></label>\n";
													echo "<input type='radio' id='rate3-".$rowId."' name='test-".$rowId."' value='3' /><label class='full' for='rate3-".$rowId."'></label>\n";
													echo "<input type='radio' id='rate2-".$rowId."' name='test-".$rowId."' value='2' /><label class='full' for='rate2-".$rowId."'></label>\n";
													echo "<input type='radio' id='rate1-".$rowId."' name='test-".$rowId."' value='1' /><label class='full' for='rate1-".$rowId."'></label>\n";
												echo "</fieldset>\n";
											echo "</div>\n";
										echo "</td>\n";

									echo "</tr>\n";

									echo "<tr>\n";

										echo "<td colspan='2'>\n";
											echo "<h4>".$row['description']."</h4>\n";
										echo "</td>\n";

									echo "</tr>\n";

								echo "</table>\n";

								echo "</div>\n";

							echo "</div>\n";

						echo "</div>\n";

					if( $resultCount % 3 == 2 ){
						echo "</div>\n";
					}
				}
			}
		?>

</div><br><br>




<div class="modal fade" id="myModal" role="dialog" data-backdrop="static">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					
					<h4 class="modal-title">Please enter zip code</h4>
				</div>
				<div class="modal-body">
					<input id = "zipInput"/>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" onclick="updateZip()" data-dismiss="modal">Submit</button>
				</div>
			</div>
		</div>
	</div>
</div>


</body>
</html>
