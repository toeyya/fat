<div id="highlight">
	<div class="flexslider" style="width:421px;">
	  <ul class="slides">
	  	<?php foreach($result as $item): ?>
	  	<li  class="flex-active-slide">
	  		<a href="<?php echo $item['url'] ?>"><img src="uploads/hilight/<?php echo $item['image'] ?>" width="421px" height="250px"></a>
	  		<p class="flex-caption"><?php echo $item['title'] ?></p>
	  	</li>
	  	<?php endforeach; ?>
	  </ul>
	</div>
<ul class="flex-direction-nav"><li><a class="flex-prev" href="#"></a></li><li><a class="flex-next" href="#"></a></li></ul>
</div>
<script type="text/javascript">
  $(window).load(function() {
    $('.flexslider').flexslider({
    	controlNav: false,prevText: "",nextText: "",slideshow: true,slideshowSpeed: 3000});
  });
</script>
