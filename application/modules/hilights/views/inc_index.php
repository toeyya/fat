<div id="highlight">
	<div class="flexslider" style="width:421px;">
	  <ul class="slides">
	  	<?php foreach($result as $item): ?>
	  	<li  class="flex-active-slide">
	  		<a href="<?php echo $item['url'] ?>" target="_blank">
	  			<img src="uploads/hilight/<?php echo $item['image'] ?>" width="421px" height="250px"></a>
	  		<p class="flex-caption"><?php echo $item['title'] ?></p>
	  	</li>
	  	<?php endforeach; ?>
	  </ul>
	</div>

</div>
<script type="text/javascript">
  $(window).load(function() {
    $('.flexslider').flexslider({
    	controlNav: false,prevText: "",nextText: "",slideshow: true,slideshowSpeed: 3000});
  });
</script>
