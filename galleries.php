
<div id="hotel">
	<div id="hotel-fachade">
		<ul>
			<?php foreach(glob('./img/hotel/fachade/*.*') as $filename){ ?>
     			<?php list($width, $height) = getimagesize($filename); ?>
			<li><a class="fancybox" rel="hotel-fachade" href="<?php echo $filename; ?>"><img src="<?php echo $filename; ?>" style="height: <?php echo $height; ?>px; width: <?php echo $width; ?>px"></a></li>
			<?php } ?>
		</ul>
	</div>
	<div id="hotel-leisure">
		<ul>
			<?php foreach(glob('./img/hotel/leisure/*.*') as $filename){ ?>
     			<?php list($width, $height) = getimagesize($filename); ?>
			<li><a class="fancybox" rel="hotel-fachade" href="<?php echo $filename; ?>"><img src="<?php echo $filename; ?>" style="height: <?php echo $height; ?>px; width: <?php echo $width; ?>px"></a></li>
			<?php } ?>
		</ul>
	</div>
	<div id="hotel-rooms">
		<ul>
			<?php foreach(glob('./img/rooms/*.*') as $filename){ ?>
     			<?php list($width, $height) = getimagesize($filename); ?>
			<li><a class="fancybox" rel="hotel-fachade" href="<?php echo $filename; ?>"><img src="<?php echo $filename; ?>" style="height: <?php echo $height; ?>px; width: <?php echo $width; ?>px"></a></li>
			<?php } ?>
		    
		</ul>
	</div>
	<div id="hotel-bar">
		<ul>
			<?php foreach(glob('./img/hotel/bar/*.*') as $filename){ ?>
     			<?php list($width, $height) = getimagesize($filename); ?>
			<li><a class="fancybox" rel="hotel-fachade" href="<?php echo $filename; ?>"><img src="<?php echo $filename; ?>" style="height: <?php echo $height; ?>px; width: <?php echo $width; ?>px"></a></li>
			<?php } ?>
		</ul>
	</div>
	<div id="hotel-patio">
		<ul>
			<?php foreach(glob('./img/hotel/patio/*.*') as $filename){ ?>
     			<?php list($width, $height) = getimagesize($filename); ?>
			<li><a class="fancybox" rel="hotel-fachade" href="<?php echo $filename; ?>"><img src="<?php echo $filename; ?>" style="height: <?php echo $height; ?>px; width: <?php echo $width; ?>px"></a></li>
			<?php } ?>
		</ul>
	</div>
	<div id="hotel-terrace">
		<ul>
			<?php foreach(glob('./img/hotel/terrace/*.*') as $filename){ ?>
     			<?php list($width, $height) = getimagesize($filename); ?>
			<li><a class="fancybox" rel="hotel-fachade" href="<?php echo $filename; ?>"><img src="<?php echo $filename; ?>" style="height: <?php echo $height; ?>px; width: <?php echo $width; ?>px"></a></li>
			<?php } ?>
		</ul>
	</div>
</div>

<div id="rooms">
	<ul></ul>

</div>