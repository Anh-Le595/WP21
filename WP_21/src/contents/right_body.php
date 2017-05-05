

<div id="right">
	<div class="row">
		<div class="col-md-12">
			<!-- Relationship -->

			<!-- image/bg2.png -->
			<div id="bxh-title"><h5>BẢNG XẾP HẠNG</h5></div>
				<!-- SOFTWARE -->
				

			<ul class="nav nav-tabs">
			    <li class="active"><a data-toggle="tab" href="#bxh1">Theo lượt tải</a></li>
			    <li><a data-toggle="tab" href="#bxh2">Theo đánh giá</a></li>
			</ul>
<?php 
$productDowns =  getRank_down($dbhandle);
?>
			<div class="tab-content">
			    <div id="bxh1" class="tab-pane fade in active bxh">
			    	<table>
                    <?php 
					for($i = 1; $i <=10 ;$i++){$product = mysqli_fetch_array($productDowns);
					?>
			    		<tr>
			    			<td><?php echo $i ?></td>
			    			<td><a href="?contents=view&&id=<?php echo $product['ID'] ?>"><?php echo $product['Name'] ?></a></td>
			    			<td><?php echo $product['NumberDownload'] ?></td>
			    		</tr>
			    	<?php } ?>
			    	</table>
                    
			    </div>
                
                
  <?php 
$productRates =  getRank_rate($dbhandle);
?>
			    <div id="bxh2" class="tab-pane fade bxh">
			    	<table>
                     <?php 
					for($i = 1; $i <=10 ;$i++){$product = mysqli_fetch_array($productRates);
					?>
			    		<tr>
			    			<td><?php echo $i ?></td>
			    			<td><a href="?contents=view&&id=<?php echo $product['ID'] ?>"><?php echo $product['Name'] ?></a></td>
			    			<td><?php echo $product['Rate'] ?></td>
			    		</tr>
			    		<?php } ?>
			    	</table>
			    </div>
		  	</div>
		</div>
	</div>
</div>
