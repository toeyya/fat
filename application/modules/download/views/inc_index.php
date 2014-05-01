<style>
.shelf{width:600px;padding-left:32px;padding-right:32px;}
.shelf .flex-direction-nav .flex-next{right:186px;background: url(../../../fat/media/img/arrowbook-right.png) no-repeat;width:21px; height:39px;}
.shelf .flex-direction-nav .flex-prev{left:186px;background: url(../../../fat/media/img/arrowbook-left.png)no-repeat;width:21px; height:39px;}
.nav-tabs{border:0}
ul.slides li{width:120px;}
</style>
       <div id="books">
            <div class="tomatoes"></div>
            <div class="titleBook">สื่อสิ่งพิมพ์ :
				<ul class="nav nav-tabs" id="myTab1">
	                <?php foreach($type as $key =>$t): ?>
	                  <li><a  href="#tab<?php echo $t['id'] ?>" class="<?php if($key==0){ echo "active";} ?>" class="link"><?php echo $t['name'] ?></a></li>
	                  <?php endforeach; ?>
				</ul>
          	</div>


    		<div class="tab-content">
    		<?php foreach($type as $key=>$tp){ ?>
			<div class="tab-pane <?php if($key==0){ echo "active";} ?>" id="tab<?php echo $tp['id'] ?>">
					<div class="shelf">
	 					<div class="slider">
	                  		<ul class="slides">
	                  	<?php
	                  	$download = $this->db->GetArray("select * from f_download_detail where active='1' and type_id =  ".$tp['id']." order by id desc");
	                  	foreach($download as $key =>$item): ?>
		                    <li class="<?php if($key==0){ echo 'flex-active-slide';} ?>">
								<?php $link="javascript:void";
									if(!empty($item['files'])){
										$link = "download/download_file/".$item['type_id']."/".$item['id'];
									}
								?>

		                    	<a href="<?php echo $link ?>">
		                    	<img src="uploads/download/<?php echo $item['type_id'] ?>/<?php echo $item['image'] ?>" width="90" height="128" border="0">
		                    	</a>
		                    </li>
	                    <?php endforeach; ?>
	                  	</ul>
	    			</div><!-- slider-->
	    				<?php if(!empty($download)): ?>
	    				<div class="btn-moreBooks"><a href="download/view_all/<?php echo $tp['id'] ?>"></a></div>
	    				<?php endif; ?>
				</div><!--shelf -->

   		 	</div><!-- tab-pane-->
   		   <?php } ?>
   		 </div><!-- tab-content-->
      </div><!-- book -->
<script type="text/javascript">
$(window).load(function() {
	$('#myTab1 a').click(function(e){
		e.preventDefault();
		$(this).tab('show');
		var tab = $(this).attr('href');
		$(tab+' .slider').flexslider({
    		animation: "slide",move:1,itemWidth: 120,itemMargin:50,minItems: 3,maxItems: 5,controlNav: false,prevText: "",nextText: ""
  		});
	});
  $('#tab1 .slider').flexslider({
    animation: "slide",move:1,itemWidth: 120,itemMargin:50,minItems: 3,maxItems: 5,controlNav: false,prevText: "",nextText: ""
  });

});
</script>
