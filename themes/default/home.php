<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<base href="<?php echo base_url(); ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $template['title'] ?></title>
	<?php include_once("_css.php");?>
	<script type="text/javascript" src="media/js/jquery-1.8.2.min.js"></script>
    <?php echo $template['metadata'] ?>
</head>
<body>
<div class="row" id="bg1-theme">
    <div class="container">
	<?php include('_header.php'); ?>
	<?php include('_menu.php'); ?>
<!-----------------------Start row1-------------------------------->
           <div id="row1">
<!--------------------------------------------------------------------------highlight-------------------------------------------------------------->
				<?php echo modules::run('hilights/index'); ?>
<!--------------------------------------------------------------------------BMI-------------------------------------------------------------->
				<?php echo modules::run('f_weight/bmi/index'); ?>
           </div>
<!-----------------------End row1-------------------------------->
           <div class="clearfix"> </div>
<!--------------------------------------------------------------------------ข่าวประชาสัมพันธ์-------------------------------------------------------------->
  		  <div id="news">
              <span class="title-news">ข่าวประชาสัมพันธ์</span>
              <div class="btn-viewAll"><a href="#">&nbsp;</a></div>
              <div class="line1"> </div>
              <div class="clearfix"> </div>

					<div class="col-md-6" id="boxnews">
                    	<a class="pull-left" href="#"><img src="img/pic-thump-1.png" width="152" height="118" class="pic-news"></a>
                    	<a href="#" class="linknews">
                        	<h4 class="list-group-item-heading" id="titlenews">สสส.จับมือ บ.คิธแอนด์คิน เดินหน้าสู่องค์กรไร้พุง</h4>
                    		<p class="list-group-item-text">กองทุนสนับสนุนการสร้างเสริมสุขภาพ (สสส.) ร่วมกับ บริษัท คิธแอนด์คิน คอมมิวนิเคชั่น แอนด์ คอนซัลแตนท์ จำกัด รณรงค์ให้ความรู้กับพนักงานในบริษัทฯ ขจัดต้นต่อ "ภาวะอ้วน ลงพุง" ตัวการก่อ 20 โรค...</p>
                        </a>
                    </div>

					<div class="col-md-6" id="boxnews">
                    	<a class="pull-left" href="#"><img src="img/pic-thump-2.png" width="152" height="118" class="pic-news"></a>
                    	<a href="#" class="linknews"><h4 class="list-group-item-heading" id="titlenews">'อ้วนลงพุง' ปัญหาใหญ่ไม่อาจมองข้าม</h4>
                    	<p class="list-group-item-text">พิธีลงนามบันทึกข้อตกลงความร่วมมือ (MOU) ระหว่างราชวิทยาลัยสูตินรีแพทย์แห่งประเทศไทย, ราชวิทยาลัยกุมารแพทย์แห่งประเทศไทยราชวิทยาลัยแพทย์เวชศาสตร์ครอบครัวแห่งประเทศไทย, สภาการพยาบาล..</p></a></div>

              		<div class="col-md-6" id="boxnews">
                    	<a class="pull-left" href="#"><img src="img/pic-thump-3.png" width="152" height="118" class="pic-news"></a>
                    	<a href="#" class="linknews">
                        	<h4 class="list-group-item-heading" id="titlenews">ทำไมอ้วนลงพุง จึงลดไม่ได้ด้วยการอดอาหาร และออกกำลังกาย</h4>
                    		<p class="list-group-item-text">หลายๆคนที่ลงพุง คงเคยตั้งคำถามนี้กับตัวเอง และหมดกำลังใจกับการลดน้ำหนัก เพราะไม่ว่าจะอดอาหารอย่างไร หรือออกกำลังกายวันละหลายชั่วโมง สัปดาห์ละ.</p>
                        </a>
                    </div>

					<div class="col-md-6" id="boxnews">
                    	<a class="pull-left" href="#"><img src="img/pic-thump-4.png" width="152" height="118" class="pic-news"></a>
                    	<a href="#" class="linknews"><h4 class="list-group-item-heading" id="titlenews">ทสื่อนอกตีข่าว "โรคอ้วนลงพุง" บั่นทอนภาพลักษณ์ "ตำรวจจราจรไทย"</h4>
                    	<p class="list-group-item-text">เอเอฟพี - สื่อต่างประเทศตีแผ่นโยบายของสำนักงานตำรวจแห่งชาติที่สนับสนุนให้ตำรวจจราจรในกรุงเทพมหานครหันมาออกกำลังกายลดไขมันรอบเอว </p></a>
                    </div>

				<div class="clearfix"> </div>
				<div class="line2"> </div>
	  </div>
 <!--------------------------------------------------------------------------สื่อ-------------------------------------------------------------->
		<?php echo modules::run('download/index'); ?>
<!-----------------------Start row2-------------------------------->
           <br>
           <div id="row2">
 <!--------------------------------------------------------------------------การวางแผนการกิน-------------------------------------------------------------->
            <div id="plan">
              <span class="title-news">การวางแผนการกิน</span>
              <div class="btn-viewAll"><a href="#">&nbsp;</a></div>
              <div class="line1"> </div>
              <div class="clearfix"> </div>
              <div class="col-md-6" id="boxnews">
                <a class="pull-left" href="#"><img src="img/pic-thump-5.png" width="152" height="118" class="pic-news"></a>
                <a href="#" class="linknews"><h4 class="list-group-item-heading" id="titlenews">การวางแผนกินอาหารสำหรับผู้ที่ต้องลดน้ำหนัก</h4>
                <p class="list-group-item-text">ร่างกายต้องการอาหาร เพื่อสร้างพลังงานให้ระบบกล้ามเนื้อ และระบบอวัยวะต่างๆ มีประสิทธิภาพในการทำงาน อาหารที่บริโภคจะเปลี่ยนแปลงเป็นคาร์โบไฮเดรต ไขมัน
และโปรตีนแล้วเกิดการเผาผลาญที่เซลล์กล้ามเนื้อกับ</p></a></div>
         	  <div class="col-md-6" id="boxnews">
                <a class="pull-left" href="#"><img src="img/pic-thump-6.png" width="152" height="118" class="pic-news"></a>
                <a href="#" class="linknews"><h4 class="list-group-item-heading" id="titlenews">อาหารสำหรับผู้ที่ต้องการควบคุมน้ำหนัก</h4>
                <p class="list-group-item-text">ประกาศกระทรวงสาธารณสุขฉบับที่ 121 พ.ศ. 2532 เรื่องอาหารสำหรับผู้ที่ต้องการควบคุมน้ำหนักโดยที่
เป็นการสมควรควบคุมคุณภาพหรือมาตรฐานของอาหารสําหรับผู้ที่ต้องการควบคุมน้ําหนัก</p></a></div>
          	 <div class="col-md-6" id="boxnews">
                <a class="pull-left" href="#"><img src="img/pic-thump-7.png" width="152" height="118" class="pic-news"></a>
                <a href="#" class="linknews"><h4 class="list-group-item-heading" id="titlenews">Diet Meal Plan วางแผนกินอาหาร 1,200 แคลอรี่
คุมหุ่นเป๊ะ</h4>
                <p class="list-group-item-text">จัดให้สาวๆที่อยากฟิตหุ่นเป๊ะโดยเน้นการกินวันละ1,200แคลอรี่เท่านั้นบอกเลยว่าสัดส่วนนี้เพียงพอต่อความต้อง
การของร่างกายในหนึ่งวันและยิ่งควบคุมการกินได้ดีเท่า</p></a></div>
          	 <div class="col-md-6" id="boxnews">
                <a class="pull-left" href="#"><img src="img/pic-thump-8.png" width="152" height="118" class="pic-news"></a>
                <a href="#" class="linknews"><h4 class="list-group-item-heading" id="titlenews">การวางแผนกินอาหารเพื่อทำการดีท็อกซ์</h4>
                <p class="list-group-item-text">วัตถุประสงค์ของการวางแผนกินอาหารมีไว้สำหรับ
ล้างพิษ(ดีท็อกซ์) ออกจากร่างกายของคุณ  ซึ่งหมาย
ถึงการขจัดสารพิษที่เป็นอันตรายออกจากร่างกายเพื่อให้ร่างกายทำงานได้อย่างดีที่สุดสารพิษในร่างกายสา</p></a></div>
		  <div class="clearfix"> </div> <div class="line3"> </div>
          </div>
 <!--------------------------------------------------------------------------ลดน้ำหนัก ลดรอบเอว-------------------------------------------------------------->

           <div id="weight">
              <span class="title-news">ลดน้ำหนัก ลดรอบเอว</span>
              <div class="btn-viewAll"><a href="#">&nbsp;</a></div>
              <div class="line1"> </div>
              <div class="clearfix"> </div>
              <div class="col-md-6" id="boxnews">
                <a class="pull-left" href="#"><img src="img/pic-thump-9.png" width="152" height="118" class="pic-news"></a>
                <a href="#" class="linknews"><h4 class="list-group-item-heading" id="titlenews">สูตรลดน้ำหนัก ลดรอบเอว ลดความอ้วน</h4>
                <p class="list-group-item-text">ร่างกายต้องการอาหาร เพื่อสร้างพลังงานให้ระบบกล้ามเนื้อ และระบบอวัยวะต่างๆ มีประสิทธิภาพในการทำงาน อาหารที่บริโภคจะเปลี่ยนแปลงเป็นคาร์โบไฮเดรต ไขมัน
และโปรตีนแล้วเกิดการเผาผลาญที่เซลล์กล้ามเนื้อกับ</p></a></div>
         	  <div class="col-md-6" id="boxnews">
                <a class="pull-left" href="#"><img src="img/pic-thump-10.png" width="152" height="118" class="pic-news"></a>
                <a href="#" class="linknews"><h4 class="list-group-item-heading" id="titlenews">10 ขั้นตอนรอบรู้เรื่อง ลดน้ำหนัก ลดรอบเอว</h4>
                <p class="list-group-item-text">เมตะบอลิก ซินโดรม (Metabolic syndrome) หรือโรคอ้วนลงพุง คือ กลุ่มของปัจจัยเสี่ยงประกอบด้วยโรคอ้วนลงพุง (ไขมันในช่องท้องมากเกิน) ระดับน้ำตาล
ในเลือดสูง ความดันโลหิตสูง และระดับไขมันในเลือด</p></a></div>
              <div class="col-md-6" id="boxnews">
                <a class="pull-left" href="#"><img src="img/pic-thump-11.png" width="152" height="118" class="pic-news"></a>
                <a href="#" class="linknews"><h4 class="list-group-item-heading" id="titlenews">คุณมีพุงแบบไหน? ตรวจสอบลักษณะพุงป่อง พร้อมวิธีลดพุงแบบต่างๆ ได้ที่นี่</h4>
                <p class="list-group-item-text">ผู้หญิงอย่างเรา หรือแม้แต่ผู้ชาย มักจะชอบบ่นเรื่องมีพุง พุงป่อง พุงโต กันเป็นประจำ และการที่เรามีพุงยื่นออกมา เป็นที่น่ารำคาญใจ มันมีสาเหตุมาจากอะไร</p></a></div>
              <div class="col-md-6" id="boxnews">
                <a class="pull-left" href="#"><img src="img/pic-thump-12.png" width="152" height="118" class="pic-news"></a>
                <a href="#" class="linknews"><h4 class="list-group-item-heading" id="titlenews">มีรอบเอวเกินขนาด หมายถึงอะไร ?</h4>
                <p class="list-group-item-text">รอบเอวของเราจะเล็กหรือจะใหญ่นั้น เกิดจากไขมันในช่องท้อง ผลการวิจัยพิสูจน์ได้ว่า เอวของคนเราที่เพิ่มขึ้นทุกๆ 5 เซนติเมตร นั้นมีโอกาสทำให้คนๆ นั้น
เสี่ยงเป็นโรคเบาหวานได้ถึง 3-5 เท่า และยังเป็นเหตุ</p></a></div>
		  		<div class="clearfix"> </div>  <div class="line3"> </div>
         	 </div>
 <!--------------------------------------------------------------------------การออกกำลังกาย-------------------------------------------------------------->

          <div id="weight">
              <span class="title-news">การออกกำลังกาย</span>
              <div class="btn-viewAll"><a href="#">&nbsp;</a></div>
              <div class="line1"> </div>
              <div class="clearfix"> </div>
              <div class="col-md-6" id="boxnews">
                <a class="pull-left" href="#"><img src="img/pic-thump-13.png" width="152" height="118" class="pic-news"></a>
                <a href="#" class="linknews"><h4 class="list-group-item-heading" id="titlenews">8 เทคนิคเด็ด ๆ ลดพุงให้แบนราบ</h4>
                <p class="list-group-item-text">ไม่มีสาว ๆ คนไหนอยากมีห่วงยางกองอยู่หน้าท้องหรอก แต่ทำยังไง้-ยังไง พุงน้อย ๆ ก็ยังโผล่ออกมาโดยไม่ได้
รับเชิญอยู่ดีใช่ไหม Lisa ขอเสนอทิปส์โดน ๆ ที่จะช่วย
ให้คุณโบกมือบ๊ายบายพุงยื่น ๆ ไปเลย</p></a></div>
          	  <div class="col-md-6" id="boxnews">
                <a class="pull-left" href="#"><img src="img/pic-thump-14.png" width="152" height="118" class="pic-news"></a>
                <a href="#" class="linknews"><h4 class="list-group-item-heading" id="titlenews">หลักในการออกกำลังกายเพื่อลดน้ำหนักและรอบพุง</h4>
                <p class="list-group-item-text">การเพิ่มกิจกรรมและการออกกำลังกายเป็นส่วนประกอบที่สำคัญในการลดน้ำหนักและรอบพุง การออกกำ
ลังกายที่ได้ประสิทธิภาพควรเป็นการออกกำลังกายแบบแอโรบิก (Aerobic exercise) อย่างต่อเนื่องเพราะ</p></a></div>
              <div class="col-md-6" id="boxnews">
                <a class="pull-left" href="#"><img src="img/pic-thump-15.png" width="152" height="118" class="pic-news"></a>
                <a href="#" class="linknews"><h4 class="list-group-item-heading" id="titlenews">ลดพุงง่ายๆ</h4>
                <p class="list-group-item-text">ลดพุงง่ายๆ คุณไม่จำเป็นต้องออกกำลังกายแบบไอโซเมตริกแบบบ้าพลัง วันละหลายๆ ชั่วโมงนะครับ นักวิทยาศาสตร์ชาวรัสเซียผู้หนึ่งกล่าวไว้ว่า แค่การออกกำลัง
กายแบบไอโซเมตริกที่ถูกต้องเพียง 10 นาที ได้ผล</p></a></div>
              <div class="col-md-6" id="boxnews">
                <a class="pull-left" href="#"><img src="img/pic-thump-16.png" width="152" height="118" class="pic-news"></a>
                <a href="#" class="linknews"><h4 class="list-group-item-heading" id="titlenews">กินเท่าไหร่ ใช้เท่านั้น</h4>
                <p class="list-group-item-text">ภาวะความสมดุลของพลังงาน คือความสมดุลระหว่างพลังงานเข้าจากากรบริโภคอาหารและพลังงานออกจากการที่มีกิจกรรมทางกาย ดังนั้นเราจะมีน้ำหนักเกิน
ก็เนื่องจากการใช้พลังงานน้อยกว่าพลังงานที่บริโภค..</p></a></div>
     	  		<div class="clearfix"> </div><div class="line3"> </div>
             </div>
 <!--------------------------------------------------------------------------Webboard-------------------------------------------------------------->
          <div id="banner-webboard"><a href="#"><img src="media/img/banner-webboard2.png" width="956" height="122" /></a></div><div class="clearfix"> </div>
 <!--------------------------------------------------------------------------Gallery------------------------------------------------------------->
		<?php echo modules::run('albums/index'); ?>
    </div>
<!-----------------------End row2-------------------------------->
	<div class="clearfix"> </div>

    </div>
<!-------End container----------->

<?php include_once('_footer.php'); ?>
</div>
</body>
<?php include("_script.php");?>
</html>