     	  <div id="Breadcrumbs">
          	<ol id="path-breadcrumb">
              <li><a href="home">หน้าแรก</a></li>
              <li class="active"><?php echo $category['name'] ?></li>
            </ol>
          </div>

<div class="titleBlank"><?php echo $category['name'] ?><div class="line5"> </div> </div>
<div class="contentBlank">
	<?php echo @$contents[0]['detail']?>
</div>