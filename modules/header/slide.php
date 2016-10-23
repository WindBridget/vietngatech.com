<div id="banner">
	<?php
	$str = "SELECT * FROM tbl_slides";
	$result = mysql_query($str);
	?>
		
    
    	<div style="overflow:hidden; width:950px; "> 
                <div class="pix_diapo">
				<?php
				while ($rows = mysql_fetch_array($result)){
				?>
                    <div data-thumb="<?php echo $rows['photo'];?>">
                        <img src="<?php echo $rows['photo'];?>" alt="<?php echo $rows['title'];?>" title="" alt="" rel="<h3><?php echo $rows['title'];?></h3><?php echo $rows['sumary'];?>"/>
                        
                    </div>
                <?php
				}
				?>    
                    
                    
               </div><!-- #pix_diapo -->          
        </div>	
</div>