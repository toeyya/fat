<style>
#shelf .flex-direction-nav .flex-next{right:186px;background: url(../../../fat/media/img/arrowbook-right.png) no-repeat;width:21px; height:39px;}
#shelf .flex-direction-nav .flex-prev{left:186px;background: url(../../../fat/media/img/arrowbook-left.png)no-repeat;width:21px; height:39px;}
</style>
       <div id="books">
            <div class="tomatoes"></div>
            <div class="titleBook">สื่อสิ่งพิมพ์ :
                <ul>
                <?php foreach($type as $key =>$t): ?>
                  <li><a href="download/index/<?php echo $t['id'] ?>" class="<?php if($key==0){ echo "active";} ?>"><?php echo $t['name'] ?></a></li>
                  <?php endforeach; ?>
                </ul>
          </div>
     			<br>
    		<div id="shelf" style="width:600px;padding-left:32px;padding:right:32px;">
			<div id="slider" >
                  <ul class="slides">
                  	<?php foreach($result as $key =>$item): ?>
                    <li class="<?php if($key==0){ echo 'flex-active-slide';} ?>">
                    	<a href="uploads/download/<?php echo $type_id ?>/file/<?php echo $item['files'] ?>">
                    	<img src="uploads/download/<?php echo $type_id ?>/<?php echo $item['image'] ?>" width="90" height="128" border="0">
                    	</a>
                    </li>

                    <?php endforeach; ?>
                  </ul>
			</div>
   		  </div>
   		  <div class="btn-moreBooks"><a href="#">&nbsp;</a></div>
      </div>
<script type="text/javascript">
$(window).load(function() {
  $('#slider').flexslider({
    slideshow: false,animation: "slide",animationLoop: false,itemWidth: 120,itemMargin:60,minItems: 3,maxItems: 5,reverse: false,controlNav: false,prevText: "",nextText: "",slideshowSpeed: 3000,
  });
});
</script>
