

<div id="sidebar">
	<div class="menu"><h5>HỆ ĐIỀU HÀNH</h5></div>
	<div class="item"><a href="?contents=product&&pass=Window">Window</a></div>
	<div class="item"><a href="?contents=product&&pass=Mac OS">Mac OS</a></div>
	<div class="item"><a href="?contents=product&&pass=Android">Android</a></div>
	<div class="item"><a href="?contents=product&&pass=iOS">IOS</a></div>

	<div class="menu"><h5>CHỨC NĂNG</h5></div>
	<?php 
	$categories = showCategory($dbhandle);
	while ($category = mysqli_fetch_array($categories)) {
	?>


	<div class="item"><a href="?contents=product&&pass=<?php echo $category['Name'] ?>"><?php echo $category['Name'] ?></a></div>
	

	<?php
	}
	?> 
	
</div>
