<style>
#shelf .flex-direction-nav .flex-next{right:223px;background: url(../../../fat/media/img/arrowbook-right.png) no-repeat;width:21px; height:39px;}
#shelf .flex-direction-nav .flex-prev{left:223px;background: url(../../../fat/media/img/arrowbook-left.png)no-repeat;width:21px; height:39px;}
</style>
       <div id="books">
            <div class="tomatoes"></div>
            <div class="titleBook">สื่อสิ่งพิมพ์ :
                <ul>
                  <li><a href="#" class="active">โปสเตอร์</a></li>
                  <li><a href="#">หนังสือ</a></li>
                  <li><a href="#">คู่มือ</a></li>
                </ul>
          </div>
     			<br>
    		<div id="shelf" style="width:600px;padding-left:32px;padding:right:32px;">
			<div id="slider" >
                  <ul class="slides">
                    <li class="flex-active-slide"><a href="#"><img src="media/img/book1.jpg" width="90" height="128" border="0"></a></li>
                    <li><a href="#"><img src="media/img/book2.jpg" width="90" height="128" border="0"></a></li>
                    <li><a href="#"><img src="media/img/book3.jpg" width="90" height="128" border="0"></a></li>
                    <li><a href="#"><img src="media/img/book4.jpg" width="90" height="128" border="0"></a></li>
                    <li><a href="#"><img src="media/img/book5.jpg" width="90" height="128" border="0"></a></li>
                    <li><a href="#"><img src="media/img/book2.jpg" width="90" height="128" border="0"></a></li>
                    <li><a href="#"><img src="media/img/book2.jpg" width="90" height="128" border="0"></a></li>
                    <li><a href="#"><img src="media/img/book3.jpg" width="90" height="128" border="0"></a></li>
                    <li><a href="#"><img src="media/img/book4.jpg" width="90" height="128" border="0"></a></li>
                    <li><a href="#"><img src="media/img/book5.jpg" width="90" height="128" border="0"></a></li>
                    <li><a href="#"><img src="media/img/book2.jpg" width="90" height="128" border="0"></a></li>
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
