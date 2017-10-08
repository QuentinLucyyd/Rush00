<?php
	include ('connection.php');
	$sqli_query = "SELECT * FROM albums";
	$results = mysqli_query($con, $sqli_query);
	if (mysqli_num_rows($results) > 0)
            	{
            		while ($row = mysqli_fetch_assoc($results))
            		{
            			echo "<div class=\"box\">  
        				<img id=\"image-3\" src=\"".$row["album-cover"]."\"/>  
        				<span class=\"caption fade-caption\">  
        				<h3>".$row["name"]."</h3>  
        				<p>Artist: ".$row["artist"]."</p>
        				<p>Release Date: ".$row["release-date"]."</p>
        				<p>Tracks: ".$row["tracks"]."</p>
        				<p>Label: ".$row["label"]."</p>
        				<center><a href=\"index.php?product=".$row['name']."\" class=\"cart-link\"><h3>Add to Cart</h3></a></center>
        				</span>  
    					</div>";
    				}
    			}
?>