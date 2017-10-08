<?php
	include ('connection.php');
    $arr = explode("=", $_COOKIE['active-cart']);
    foreach ($arr as $elem)
    {
	   $sqli_query = "SELECT * FROM albums WHERE name='$elem'";
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
        	       </span>  
    		      </div>";
    	    }
        }
    }
?>