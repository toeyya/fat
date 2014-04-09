<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<base href="<?php echo base_url(); ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $template['title'] ?></title>
	<?php include_once("_css.php");?>
    <?php echo $template['metadata'] ?>
</head>
<body>
<?php include_once("_header.php");?>
<div class="container">
		<div class="row">
					<!-- start: Main Menu -->
			<?php include('_menu.php'); ?>

			<noscript>
				&lt;div class="alert alert-block col-sm-10"&gt;
					&lt;h4 class="alert-heading"&gt;Warning!&lt;/h4&gt;
					&lt;p&gt;You need to have &lt;a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank"&gt;JavaScript&lt;/a&gt; enabled to use this site.&lt;/p&gt;
				&lt;/div&gt;
			</noscript>

			<div id="content" class="col-sm-10" style="min-height: 464px;">
			<!-- start: Content -->

			<div>
				<hr>
				<ul class="breadcrumb">
					<li><a href="submenu.html#">Home</a></li>
					<li><a href="submenu.html#">Dashboard</a></li>
				</ul>
				<hr>
			</div>

			<div class="row circleStats">

				<div class="col-md-2 col-sm-4">
                	<div class="circleStatsItem red">
						<i class="fa  fa-thumbs-up"></i>
						<span class="plus">+</span>
						<span class="percent">%</span>
                    	<div style="width:120px;display:inline;&quot;"><canvas width="120" height="120"></canvas><input type="text" value="58" class="orangeCircle" readonly="readonly" style="width: 60px; position: absolute; margin-top: 42.857142857142854px; margin-left: -90px; font-size: 30px; border: none; background-image: none; font-family: Arial; font-weight: bold; text-align: center; color: rgb(250, 88, 51); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>
                	</div>
					<div class="box-small-title">User satisfaction</div>
				</div><!--/col-->

				<div class="col-md-2 col-sm-4">
                	<div class="circleStatsItem blue">
                    	<i class="fa  fa-bullhorn"></i>
						<span class="plus">+</span>
						<span class="percent">%</span>
                    	<div style="width:120px;display:inline;&quot;"><canvas width="120" height="120"></canvas><input type="text" value="8" class="blueCircle" readonly="readonly" style="width: 60px; position: absolute; margin-top: 42.857142857142854px; margin-left: -90px; font-size: 30px; border: none; background-image: none; font-family: Arial; font-weight: bold; text-align: center; color: rgb(47, 171, 233); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>
                	</div>
					<div class="box-small-title">Popularity</div>
				</div><!--/col-->

				<div class="col-md-2 col-sm-4">
					<div class="circleStatsItem yellow">
                    	<i class="fa  fa-user"></i>
						<span class="plus">+</span>
						<span class="percent">%</span>
                    	<div style="width:120px;display:inline;&quot;"><canvas width="120" height="120"></canvas><input type="text" value="12" class="yellowCircle" readonly="readonly" style="width: 60px; position: absolute; margin-top: 42.857142857142854px; margin-left: -90px; font-size: 30px; border: none; background-image: none; font-family: Arial; font-weight: bold; text-align: center; color: rgb(231, 229, 114); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>
                	</div>
					<div class="box-small-title">New users</div>
				</div><!--/col-->

				<div class="col-md-2 col-sm-4">
					<div class="circleStatsItem pink">
                    	<i class="fa  fa-globe"></i>
						<span class="plus">+</span>
						<span class="percent">%</span>
                    	<div style="width:120px;display:inline;&quot;"><canvas width="120" height="120"></canvas><input type="text" value="23" class="pinkCircle" readonly="readonly" style="width: 60px; position: absolute; margin-top: 42.857142857142854px; margin-left: -90px; font-size: 30px; border: none; background-image: none; font-family: Arial; font-weight: bold; text-align: center; color: rgb(228, 43, 117); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>
                	</div>
					<div class="box-small-title">Visits</div>
				</div><!--/col-->

				<div class="col-md-2 col-sm-4">
                	<div class="circleStatsItem green">
                    	<i class="fa  fa-bar-chart-o"></i>
						<span class="plus">+</span>
						<span class="percent">%</span>
                    	<div style="width:120px;display:inline;&quot;"><canvas width="120" height="120"></canvas><input type="text" value="34" class="greenCircle" readonly="readonly" style="width: 60px; position: absolute; margin-top: 42.857142857142854px; margin-left: -90px; font-size: 30px; border: none; background-image: none; font-family: Arial; font-weight: bold; text-align: center; color: rgb(185, 230, 114); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>
                	</div>
					<div class="box-small-title">Income</div>
				</div><!--/col-->

				<div class="col-md-2 col-sm-4">
					<div class="circleStatsItem lightorange">
                    	<i class="fa  fa-shopping-cart"></i>
						<span class="plus">+</span>
						<span class="percent">%</span>
                    	<div style="width:120px;display:inline;&quot;"><canvas width="120" height="120"></canvas><input type="text" value="42" class="lightOrangeCircle" readonly="readonly" style="width: 60px; position: absolute; margin-top: 42.857142857142854px; margin-left: -90px; font-size: 30px; border: none; background-image: none; font-family: Arial; font-weight: bold; text-align: center; color: rgb(244, 167, 12); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>
                	</div>
					<div class="box-small-title">Sales</div>
				</div><!--/col-->

			</div><!--/row-->

			<hr>

			<div class="row">

				<div class="col-md-8 col-sm-12">
					<div class="box">
						<div class="box-header">
							<h2><i class="fa fa-signal"></i><span class="break"></span>Site Statistics</h2>
							<div class="box-icon">
								<a href="submenu.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
								<a href="submenu.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="submenu.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							<div id="stats-chart" class="center" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="993" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 993px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 283px; left: 56px; text-align: center;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 283px; left: 122px; text-align: center;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 283px; left: 188px; text-align: center;">6</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 283px; left: 254px; text-align: center;">8</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 283px; left: 317px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 283px; left: 383px; text-align: center;">12</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 283px; left: 449px; text-align: center;">14</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 283px; left: 515px; text-align: center;">16</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 283px; left: 581px; text-align: center;">18</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 283px; left: 647px; text-align: center;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 283px; left: 713px; text-align: center;">22</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 283px; left: 780px; text-align: center;">24</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 283px; left: 846px; text-align: center;">26</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 283px; left: 912px; text-align: center;">28</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 62px; top: 283px; left: 978px; text-align: center;">30</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 270px; left: 14px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 249px; left: 7px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 228px; left: 7px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 207px; left: 7px; text-align: right;">30</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 187px; left: 7px; text-align: right;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 166px; left: 7px; text-align: right;">50</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 145px; left: 7px; text-align: right;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 125px; left: 7px; text-align: right;">70</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 104px; left: 7px; text-align: right;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 83px; left: 7px; text-align: right;">90</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 63px; left: 0px; text-align: right;">100</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 42px; left: 0px; text-align: right;">110</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 21px; left: 0px; text-align: right;">120</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 0px; text-align: right;">130</div></div></div><canvas class="flot-overlay" width="993" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 993px; height: 300px;"></canvas><div class="legend"><div style="position: absolute; width: 77px; height: 38px; top: 14px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:14px;right:13px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(250,88,51);overflow:hidden"></div></div></td><td class="legendLabel">pageviews</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(47,171,233);overflow:hidden"></div></div></td><td class="legendLabel">visitors</td></tr></tbody></table></div></div>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-12">
					<div class="box">
						<div class="box-header">
							<h2><i class="fa fa-list"></i><span class="break"></span>Weekly Stat</h2>
							<div class="box-icon">
								<a href="submenu.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="submenu.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							<div class="sparkLineStats">

		                        <ul class="unstyled">
		                            <li>
										<span class="sparkLineStats1 "><canvas width="100" height="30" style="display: inline-block; width: 100px; height: 30px; vertical-align: top;"></canvas></span>
										Visits:
										<span class="number">356</span>
									</li>
		                            <li>
		                                <span class="sparkLineStats2"><canvas width="100" height="30" style="display: inline-block; width: 100px; height: 30px; vertical-align: top;"></canvas></span>
		                                Unique Visitors:
		                                <span class="number">252</span>
		                            </li>
		                            <li><span class="sparkLineStats3"><canvas width="100" height="30" style="display: inline-block; width: 100px; height: 30px; vertical-align: top;"></canvas></span>
		                                Pageviews:
		                                <span class="number">781</span>
		                            </li>
		                            <li><span class="sparkLineStats4"><canvas width="100" height="30" style="display: inline-block; width: 100px; height: 30px; vertical-align: top;"></canvas></span>
		                                Pages / Visit:
		                                <span class="number">2,19</span>
		                            </li>
		                            <li><span class="sparkLineStats5"><canvas width="100" height="30" style="display: inline-block; width: 100px; height: 30px; vertical-align: top;"></canvas></span>
		                                Avg. Visit Duration:
		                                <span class="number">00:02:58</span>
		                            </li>
		                            <li><span class="sparkLineStats6"><canvas width="100" height="30" style="display: inline-block; width: 100px; height: 30px; vertical-align: top;"></canvas></span>
		                                Bounce Rate: <span class="number">59,83%</span>
		                            </li>
		                            <li><span class="sparkLineStats7"><canvas width="100" height="30" style="display: inline-block; width: 100px; height: 30px; vertical-align: top;"></canvas></span>
		                                % New Visits:
		                                <span class="number">70,79%</span>
		                            </li>
		                            <li><span class="sparkLineStats8"><canvas width="100" height="30" style="display: inline-block; width: 100px; height: 30px; vertical-align: top;"></canvas></span>
		                                % Returning Visitor:
		                                <span class="number">29,21%</span>
		                            </li>

		                        </ul>

		                    </div><!-- End .sparkStats -->
						</div>
					</div>

				</div><!--/col-->

			</div><!--/row-->

			<hr>

			<div class="row">

				<div class="col-sm-2">
					<a class="quick-button">
						<i class="fa  fa-group"></i>
						<p>Users</p>
						<span class="notification">1.367</span>
					</a>
				</div><!--/col-->

				<div class="col-sm-2">
					<a class="quick-button">
						<i class="fa  fa-comments-o"></i>
						<p>Comments</p>
						<span class="notification green">167</span>
					</a>
				</div><!--/col-->

				<div class="col-sm-2">
					<a class="quick-button">
						<i class="fa  fa-shopping-cart"></i>
						<p>Orders</p>
					</a>
				</div><!--/col-->

				<div class="col-sm-2">
					<a class="quick-button">
						<i class="fa  fa-barcode"></i>
						<p>Products</p>
					</a>
				</div><!--/col-->

				<div class="col-sm-2">
					<a class="quick-button">
						<i class="fa  fa-envelope"></i>
						<p>Messages</p>
					</a>
				</div><!--/col-->

				<div class="col-sm-2">
					<a class="quick-button">
						<i class="fa  fa-calendar"></i>
						<p>Calendar</p>
						<span class="notification red">68</span>
					</a>
				</div><!--/col-->

			</div><!--/row-->

			<hr>

			<div class="row">

				<div class="col-md-4 col-sm-6">
					<div class="box">
						<div class="box-header">
							<h2><i class="fa fa-fire"></i><span class="break"></span>Server Load</h2>
							<div class="box-icon">
								<a href="submenu.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
								<a href="submenu.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="submenu.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							 <div id="serverload" style="height: 235px; padding: 0px; position: relative;"><canvas class="flot-base" width="470" height="235" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 470px; height: 235px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 218px; left: 14px; text-align: right;">0%</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 174px; left: 7px; text-align: right;">20%</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 131px; left: 7px; text-align: right;">40%</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 87px; left: 7px; text-align: right;">60%</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 44px; left: 7px; text-align: right;">80%</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 0px; text-align: right;">100%</div></div></div><canvas class="flot-overlay" width="470" height="235" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 470px; height: 235px;"></canvas></div>
						</div>
					</div>
				</div><!--/col-->

				<div class="col-md-4 col-sm-6">
					<div class="box span4" ontablet="span6" ondesktop="span4">
						<div class="box-header">
							<h2><i class="fa fa-tasks"></i><span class="break"></span>Tasks in Progress</h2>
							<div class="box-icon">
								<a href="submenu.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
								<a href="submenu.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="submenu.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							<div class="progressBarValue">
								<span>iOS App Development</span> <span class="progressCustomValueVal">20%</span>
								<div class="progressSlim progressCustomValue progressRed ui-progressbar ui-widget ui-widget-content ui-corner-all" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="1"><div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 20%;"></div></div>
							</div>
							<div class="progressBarValue">
								<span>Android App Development</span> <span class="progressCustomValueVal">40%</span>
								<div class="progressSlim progressCustomValue progressOrange ui-progressbar ui-widget ui-widget-content ui-corner-all" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="1"><div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 40%;"></div></div>
							</div>
							<div class="progressBarValue">
								<span>A/B Tests</span> <span class="progressCustomValueVal">60%</span>
								<div class="progressSlim progressCustomValue progressYellow ui-progressbar ui-widget ui-widget-content ui-corner-all" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="1"><div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 60%;"></div></div>
							</div>
							<div class="progressBarValue">
								<span>Server Load Tests</span> <span class="progressCustomValueVal">80%</span>
								<div class="progressSlim progressCustomValue progressGreen ui-progressbar ui-widget ui-widget-content ui-corner-all" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="1"><div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 80%;"></div></div>
							</div>
							<div class="progressBarValue">
								<span>Django Backend Development</span> <span class="progressCustomValueVal">100%</span>
								<div class="progressSlim progressCustomValue progressBlue ui-progressbar ui-widget ui-widget-content ui-corner-all" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="1"><div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 100%;"></div></div>
							</div>
						</div>
					</div>
				</div><!--/col-->

				<div class="col-md-4 col-sm-6">
					<div class="box">
						<div class="box-header">
							<h2><i class="fa fa-check"></i><span class="break"></span>To Do List</h2>
							<div class="box-icon">
								<a href="submenu.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
								<a href="submenu.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="submenu.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							<div class="todo">
								<ul class="todo-list">
									<li>
										Windows Phone 8 App <span class="label label-important">today</span>
															<span class="todo-actions">
																<a href="submenu.html#"><i class="fa fa-check"></i></a>
																<a href="submenu.html#" class="todo-remove"><i class="fa fa-times"></i></a>
															</span>
									</li>
									<li>New frontend layout <span class="label label-important">today</span>
														<span class="todo-actions">
															<a href="submenu.html#"><i class="fa fa-check"></i></a>
															<a href="submenu.html#" class="todo-remove"><i class="fa fa-times"></i></a>
														</span>
									</li>
									<li>Hire developers <span class="label label-warning">tommorow</span>
														<span class="todo-actions">
															<a href="submenu.html#"><i class="fa fa-check"></i></a>
															<a href="submenu.html#" class="todo-remove"><i class="fa fa-times"></i></a>
														</span>
									</li>
									<li>Windows Phone 8 App <span class="label label-warning">tommorow</span>
														<span class="todo-actions">
															<a href="submenu.html#"><i class="fa fa-check"></i></a>
															<a href="submenu.html#" class="todo-remove"><i class="fa fa-times"></i></a>
														</span>
									</li>
									<li>New frontend layout <span class="label label-success">this week</span>
														<span class="todo-actions">
															<a href="submenu.html#"><i class="fa fa-check"></i></a>
															<a href="submenu.html#" class="todo-remove"><i class="fa fa-times"></i></a>
														</span>
									</li>
									<li>Hire developers <span class="label label-success">this week</span>
														<span class="todo-actions">
															<a href="submenu.html#"><i class="fa fa-check"></i></a>
															<a href="submenu.html#" class="todo-remove"><i class="fa fa-times"></i></a>
														</span>
									</li>
									<li>New frontend layout <span class="label label-info">this month</span>
														<span class="todo-actions">
															<a href="submenu.html#"><i class="fa fa-check"></i></a>
															<a href="submenu.html#" class="todo-remove"><i class="fa fa-times"></i></a>
														</span>
									</li>
									<li>Hire developers <span class="label label-info">this month</span>
														<span class="todo-actions">
															<a href="submenu.html#"><i class="fa fa-check"></i></a>
															<a href="submenu.html#" class="todo-remove"><i class="fa fa-times"></i></a>
														</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div><!--/col-->

			</div><!--/row-->

			<hr>

			<div class="row">

				<div class="col-sm-1">
					<a class="quick-button-small span1">
						<i class="fa  fa-group"></i>
						<p>Users</p>
						<span class="notification">7</span>
					</a>
				</div><!--/col-->

				<div class="col-sm-1">
					<a class="quick-button-small span1">
						<i class="fa  fa-comments-o"></i>
						<p>Comments</p>
						<span class="notification green">4</span>
					</a>
				</div><!--/col-->

				<div class="col-sm-1">
					<a class="quick-button-small span1">
						<i class="fa  fa-shopping-cart"></i>
						<p>Orders</p>
					</a>
				</div><!--/col-->

				<div class="col-sm-1">
					<a class="quick-button-small span1">
						<i class="fa  fa-barcode"></i>
						<p>Products</p>
					</a>
				</div><!--/col-->

				<div class="col-sm-1">
					<a class="quick-button-small span1">
						<i class="fa  fa-envelope"></i>
						<p>Messages</p>
					</a>
				</div><!--/col-->

				<div class="col-sm-1">
					<a class="quick-button-small span1">
						<i class="fa  fa-calendar"></i>
						<p>Calendar</p>
						<span class="notification red">8</span>
					</a>
				</div><!--/col-->

				<div class="col-sm-1">
					<a class="quick-button-small span1 noMargin">
						<i class="fa  fa-bars"></i>
						<p>Projects</p>
					</a>
				</div><!--/col-->

				<div class="col-sm-1">
					<a class="quick-button-small span1">
						<i class="fa  fa-thumbs-up"></i>
						<p>Likes</p>
						<span class="notification green">+ 11</span>
					</a>
				</div><!--/col-->

				<div class="col-sm-1">
					<a class="quick-button-small span1">
						<i class="fa  fa-heart-o"></i>
						<p>Favorites</p>
					</a>
				</div><!--/col-->

				<div class="col-sm-1">
					<a class="quick-button-small span1">
						<i class="fa  fa-bullhorn"></i>
						<p>Notifications</p>
						<span class="notification yellow">7</span>
					</a>
				</div><!--/col-->

				<div class="col-sm-1">
					<a class="quick-button-small span1">
						<i class="fa  fa-cogs"></i>
						<p>Settings</p>
					</a>
				</div><!--/col-->

				<div class="col-sm-1">
					<a class="quick-button-small span1">
						<i class="fa  fa-dashboard"></i>
						<p>Dashboard</p>
					</a>
				</div><!--/col-->

			</div><!--/row-->

			<hr>

			<div class="row">

				<div class="col-md-8 col-sm-12">
					<div class="box">
						<div class="box-header">
							<h2><i class="fa fa-calendar"></i><span class="break"></span>Calendar</h2>
						</div>
						<div class="box-content">
							<div id="main_calendar" class="hidden-xs fc fc-ltr"><table class="fc-header" style="width:100%"><tbody><tr><td class="fc-header-left"><span class="fc-header-title"><h2>March 2014</h2></span></td><td class="fc-header-center"></td><td class="fc-header-right"><span class="fc-button fc-button-prev fc-state-default fc-corner-left" unselectable="on"><span class="fc-text-arrow">‹</span></span><span class="fc-button fc-button-next fc-state-default fc-corner-right" unselectable="on"><span class="fc-text-arrow">›</span></span><span class="fc-header-space"></span><span class="fc-button fc-button-today fc-state-default fc-corner-left fc-state-disabled" unselectable="on">today</span><span class="fc-button fc-button-month fc-state-default fc-state-active" unselectable="on">month</span><span class="fc-button fc-button-agendaWeek fc-state-default" unselectable="on">week</span><span class="fc-button fc-button-agendaDay fc-state-default fc-corner-right" unselectable="on">day</span></td></tr></tbody></table><div class="fc-content" style="position: relative;"><div class="fc-view fc-view-month fc-grid" style="position:relative" unselectable="on"><div class="fc-event-container" style="position:absolute;z-index:8;top:0;left:0"><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 849px; width: 140px; top: 64px;"><div class="fc-event-inner"><span class="fc-event-title">All Day Event</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-start" style="position: absolute; left: 708px; width: 283px; top: 44px;"><div class="fc-event-inner"><span class="fc-event-title">Long Event</span></div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-end" style="position: absolute; left: 1px; width: 279px; top: 164px;"><div class="fc-event-inner"><span class="fc-event-title">Long Event</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 3px; width: 136px; top: 184px;"><div class="fc-event-inner"><span class="fc-event-time">4p</span><span class="fc-event-title">Repeating Event</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 3px; width: 136px; top: 283px;"><div class="fc-event-inner"><span class="fc-event-time">4p</span><span class="fc-event-title">Repeating Event</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 426px; width: 136px; top: 164px;"><div class="fc-event-inner"><span class="fc-event-time">10:30a</span><span class="fc-event-title">Meeting</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 426px; width: 136px; top: 184px;"><div class="fc-event-inner"><span class="fc-event-time">12p</span><span class="fc-event-title">Lunch</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 567px; width: 136px; top: 164px;"><div class="fc-event-inner"><span class="fc-event-time">7p</span><span class="fc-event-title">Birthday Party</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><a href="http://google.com/" class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 708px; width: 281px; top: 521px;"><div class="fc-event-inner"><span class="fc-event-title">Click for Google</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></a></div><table class="fc-border-separate" style="width:100%" cellspacing="0"><thead><tr class="fc-first fc-last"><th class="fc-day-header fc-sun fc-widget-header fc-first" style="width: 141px;">Sun</th><th class="fc-day-header fc-mon fc-widget-header" style="width: 141px;">Mon</th><th class="fc-day-header fc-tue fc-widget-header" style="width: 141px;">Tue</th><th class="fc-day-header fc-wed fc-widget-header" style="width: 141px;">Wed</th><th class="fc-day-header fc-thu fc-widget-header" style="width: 141px;">Thu</th><th class="fc-day-header fc-fri fc-widget-header" style="width: 141px;">Fri</th><th class="fc-day-header fc-sat fc-widget-header fc-last">Sat</th></tr></thead><tbody><tr class="fc-week fc-first"><td class="fc-day fc-sun fc-widget-content fc-other-month fc-past fc-first" data-date="2014-02-23"><div style="min-height: 119px;"><div class="fc-day-number">23</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-other-month fc-past" data-date="2014-02-24"><div><div class="fc-day-number">24</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-other-month fc-past" data-date="2014-02-25"><div><div class="fc-day-number">25</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-other-month fc-past" data-date="2014-02-26"><div><div class="fc-day-number">26</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-other-month fc-past" data-date="2014-02-27"><div><div class="fc-day-number">27</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-other-month fc-past" data-date="2014-02-28"><div><div class="fc-day-number">28</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-past fc-last" data-date="2014-03-01"><div><div class="fc-day-number">1</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-past fc-first" data-date="2014-03-02"><div style="min-height: 118px;"><div class="fc-day-number">2</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-past" data-date="2014-03-03"><div><div class="fc-day-number">3</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-past" data-date="2014-03-04"><div><div class="fc-day-number">4</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-today fc-state-highlight" data-date="2014-03-05"><div><div class="fc-day-number">5</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-future" data-date="2014-03-06"><div><div class="fc-day-number">6</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-future" data-date="2014-03-07"><div><div class="fc-day-number">7</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-future fc-last" data-date="2014-03-08"><div><div class="fc-day-number">8</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-future fc-first" data-date="2014-03-09"><div style="min-height: 118px;"><div class="fc-day-number">9</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-future" data-date="2014-03-10"><div><div class="fc-day-number">10</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-future" data-date="2014-03-11"><div><div class="fc-day-number">11</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-future" data-date="2014-03-12"><div><div class="fc-day-number">12</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-future" data-date="2014-03-13"><div><div class="fc-day-number">13</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-future" data-date="2014-03-14"><div><div class="fc-day-number">14</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-future fc-last" data-date="2014-03-15"><div><div class="fc-day-number">15</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-future fc-first" data-date="2014-03-16"><div style="min-height: 118px;"><div class="fc-day-number">16</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-future" data-date="2014-03-17"><div><div class="fc-day-number">17</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-future" data-date="2014-03-18"><div><div class="fc-day-number">18</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-future" data-date="2014-03-19"><div><div class="fc-day-number">19</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-future" data-date="2014-03-20"><div><div class="fc-day-number">20</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-future" data-date="2014-03-21"><div><div class="fc-day-number">21</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-future fc-last" data-date="2014-03-22"><div><div class="fc-day-number">22</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-future fc-first" data-date="2014-03-23"><div style="min-height: 118px;"><div class="fc-day-number">23</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-future" data-date="2014-03-24"><div><div class="fc-day-number">24</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-future" data-date="2014-03-25"><div><div class="fc-day-number">25</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-future" data-date="2014-03-26"><div><div class="fc-day-number">26</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-future" data-date="2014-03-27"><div><div class="fc-day-number">27</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-future" data-date="2014-03-28"><div><div class="fc-day-number">28</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-future fc-last" data-date="2014-03-29"><div><div class="fc-day-number">29</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td></tr><tr class="fc-week fc-last"><td class="fc-day fc-sun fc-widget-content fc-future fc-first" data-date="2014-03-30"><div style="min-height: 117px;"><div class="fc-day-number">30</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-future" data-date="2014-03-31"><div><div class="fc-day-number">31</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-other-month fc-future" data-date="2014-04-01"><div><div class="fc-day-number">1</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-other-month fc-future" data-date="2014-04-02"><div><div class="fc-day-number">2</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-other-month fc-future" data-date="2014-04-03"><div><div class="fc-day-number">3</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-other-month fc-future" data-date="2014-04-04"><div><div class="fc-day-number">4</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-other-month fc-future fc-last" data-date="2014-04-05"><div><div class="fc-day-number">5</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td></tr></tbody></table></div></div></div>
							<div id="main_calendar_phone" class="hidden-sm hidden-md hidden-lg fc fc-ltr"><table class="fc-header" style="width:100%"><tbody><tr><td class="fc-header-left"><span class="fc-header-title"><h2>&nbsp;</h2></span></td><td class="fc-header-center"></td><td class="fc-header-right"><span class="fc-button fc-button-prev fc-state-default fc-corner-left" unselectable="on"><span class="fc-text-arrow">‹</span></span><span class="fc-button fc-button-next fc-state-default fc-corner-right" unselectable="on"><span class="fc-text-arrow">›</span></span><span class="fc-header-space"></span><span class="fc-button fc-button-today fc-state-default fc-corner-left" unselectable="on">today</span><span class="fc-button fc-button-month fc-state-default" unselectable="on">month</span><span class="fc-button fc-button-agendaWeek fc-state-default" unselectable="on">week</span><span class="fc-button fc-button-agendaDay fc-state-default fc-corner-right fc-state-active" unselectable="on">day</span></td></tr></tbody></table><div class="fc-content" style="position:relative"><div class="fc-view fc-view-agendaDay fc-agenda" style="position:relative" unselectable="on"></div></div></div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div><!--/col-->

				<div class="col-md-4 col-sm-12">
					<div class="box">
						<div class="box-header">
							<h2><i class="fa fa-list"></i><span class="break"></span>Support tickets</h2>
							<div class="box-icon">
								<a href="submenu.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="submenu.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							<ul class="tickets">
								<li class="ticket">
									<a href="submenu.html#">
										<span class="header">
											<span class="title">Server unavaible</span>
											<span class="number">[ #199278 ]</span>
										</span>
										<span class="content">
											<span class="avatar"><img src="assets/img/avatar6.jpg" alt="Avatar"></span>
											<span class="name">Ashley Tan</span>
											<span class="priority blue">[ Low priority ]</span>
											<span class="status">Status: <span class="green">[ Complete ]</span></span>
											<span class="date">Jul 25, 2012 11:09</span>
										</span>
									</a>
								</li>
							  	<li class="ticket">
									<a href="submenu.html#">
										<span class="header">
											<span class="title">Mobile App Problem</span>
											<span class="number">[ #199277 ]</span>
										</span>
										<span class="content">
											<span class="avatar"><img src="assets/img/avatar7.jpg" alt="Avatar"></span>
											<span class="name">Ann Kovalsky</span>
											<span class="priority yellow">[ Normal priority ]</span>
											<span class="status">Status: <span class="yellow">[ Pending ]</span></span>
											<span class="date">Jul 25, 2012 11:09</span>
										</span>
									</a>
								</li>
								<li class="ticket">
									<a href="submenu.html#">
										<span class="header">
											<span class="title">PayPal issue</span>
											<span class="number">[ #199276 ]</span>
										</span>
										<span class="content">
											<span class="avatar"><img src="assets/img/avatar8.jpg" alt="Avatar"></span>
											<span class="name">Chris Dan</span>
											<span class="priority red">[ High priority ]</span>
											<span class="status">Status: <span class="blue">[ In progress ]</span></span>
											<span class="date">Jul 25, 2012 11:09</span>
										</span>
									</a>
								</li>
								<li class="ticket">
									<a href="submenu.html#">
										<span class="header">
											<span class="title">IE7 problem</span>
											<span class="number">[ #199275 ]</span>
										</span>
										<span class="content">
											<span class="avatar"><img src="assets/img/avatar9.jpg" alt="Avatar"></span>
											<span class="name">John Grand</span>
											<span class="priority blue">[ Low priority ]</span>
											<span class="status">Status: <span class="red">[ Rejected ]</span></span>
											<span class="date">Jul 25, 2012 11:09</span>
										</span>
									</a>
								</li>
								<li class="ticket">
									<a href="submenu.html#">
										<span class="header">
											<span class="title">Server unavaible</span>
											<span class="number">[ #199274 ]</span>
										</span>
										<span class="content">
											<span class="avatar"><img src="assets/img/avatar2.jpg" alt="Avatar"></span>
											<span class="name">Agnes Young</span>
											<span class="priority blue">[ Low priority ]</span>
											<span class="status">Status: <span class="green">[ Complete ]</span></span>
											<span class="date">Jul 25, 2012 11:09</span>
										</span>
									</a>
								</li>
							  	<li class="ticket">
									<a href="submenu.html#">
										<span class="header">
											<span class="title">Mobile App Problem</span>
											<span class="number">[ #199273 ]</span>
										</span>
										<span class="content">
											<span class="avatar"><img src="assets/img/avatar3.jpg" alt="Avatar"></span>
											<span class="name">Melanie Brown</span>
											<span class="priority yellow">[ Normal priority ]</span>
											<span class="status">Status: <span class="yellow">[ Pending ]</span></span>
											<span class="date">Jul 25, 2012 11:09</span>
										</span>
									</a>
								</li>
								<li class="ticket">
									<a href="submenu.html#">
										<span class="header">
											<span class="title">PayPal issue</span>
											<span class="number">[ #199272 ]</span>
										</span>
										<span class="content">
											<span class="avatar"><img src="assets/img/avatar4.jpg" alt="Avatar"></span>
											<span class="name">Patricia Doyle</span>
											<span class="priority red">[ High priority ]</span>
											<span class="status">Status: <span class="blue">[ In progress ]</span></span>
											<span class="date">Jul 25, 2012 11:09</span>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div><!--/col-->

			</div><!--/row-->

			<hr>

			<div class="row">

				<div class="col-md-4 col-sm-6">
					<div class="box">
						<div class="box-header">
							<h2><i class="fa fa-list"></i><span class="break"></span>Weekly Stat</h2>
							<div class="box-icon">
								<a href="submenu.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="submenu.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							<ul class="dashboard-list">
								<li>
									<a href="submenu.html#">
										<i class="fa  fa-arrow-up green"></i>
										<span class="green">92</span>
										New Comments
									</a>
								</li>
							  <li>
								<a href="submenu.html#">
								  <i class="fa  fa-arrow-down red"></i>
								  <span class="red">15</span>
								  New Registrations
								</a>
							  </li>
							  <li>
								<a href="submenu.html#">
								  <i class="fa  fa-minus blue"></i>
								  <span class="blue">36</span>
								  New Articles
								</a>
							  </li>
							  <li>
								<a href="submenu.html#">
								  <i class="fa  fa-comment yellow"></i>
								  <span class="yellow">45</span>
								  User reviews
								</a>
							  </li>
							  <li>
								<a href="submenu.html#">
								  <i class="fa  fa-arrow-up green"></i>
								  <span class="green">112</span>
								  New Comments
								</a>
							  </li>
							  <li>
								<a href="submenu.html#">
								  <i class="fa  fa-arrow-down red"></i>
								  <span class="red">31</span>
								  New Registrations
								</a>
							  </li>
							  <li>
								<a href="submenu.html#">
								  <i class="fa  fa-minus blue"></i>
								  <span class="blue">93</span>
								  New Articles
								</a>
							  </li>
							  <li>
								<a href="submenu.html#">
								  <i class="fa  fa-comment yellow"></i>
								  <span class="yellow">254</span>
								  User reviews
								</a>
							  </li>
							</ul>
						</div>
					</div>
				</div><!--/col-->

				<div class="col-md-4 col-sm-6">
					<div class="box span4" ontablet="span6" ondesktop="span4">
						<div class="box-header">
							<h2><i class="fa fa-user"></i><span class="break"></span>Last Users</h2>
							<div class="box-icon">
								<a href="submenu.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="submenu.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							<ul class="dashboard-list">
								<li>
									<a href="submenu.html#">
										<img class="avatar" alt="Lucas" src="assets/img/avatar.jpg">
									</a>
									<strong>Name:</strong> <a href="submenu.html#">Łukasz Holeczek</a><br>
									<strong>Since:</strong> Jul 25, 2012 11:09<br>
									<strong>Status:</strong> <span class="label label-success">Approved</span>
								</li>
								<li>
									<a href="submenu.html#">
										<img class="avatar" alt="Bill" src="assets/img/avatar9.jpg">
									</a>
									<strong>Name:</strong> <a href="submenu.html#">Bill Cole</a><br>
									<strong>Since:</strong> Jul 25, 2012 11:09<br>
									<strong>Status:</strong> <span class="label label-warning">Pending</span>
								</li>
								<li>
									<a href="submenu.html#">
										<img class="avatar" alt="Jane" src="assets/img/avatar5.jpg">
									</a>
									<strong>Name:</strong> <a href="submenu.html#">Jane Sanchez</a><br>
									<strong>Since:</strong> Jul 25, 2012 11:09<br>
									<strong>Status:</strong> <span class="label label-important">Banned</span>
								</li>
								<li>
									<a href="submenu.html#">
										<img class="avatar" alt="Kate" src="assets/img/avatar6.jpg">
									</a>
									<strong>Name:</strong> <a href="submenu.html#">Kate Presley</a><br>
									<strong>Since:</strong> Jul 25, 2012 11:09<br>
									<strong>Status:</strong> <span class="label label-info">Updates</span>
								</li>
							</ul>
						</div>
					</div>
				</div><!--/col-->

				<div class="col-md-4 col-sm-12">
					<div class="box">
						<div class="box-header">
							<h2><i class="fa fa-comment"></i><span class="break"></span>Chats</h2>
							<div class="box-icon">
								<a href="submenu.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="submenu.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							<ul class="chat">
								<li class="left">
									<img class="avatar" alt="Lucas" src="assets/img/avatar.jpg">
									<span class="message"><span class="arrow"></span>
										<span class="from">Łukasz Holeczek</span>
										<span class="time">Jul 25, 2012 11:09</span>
										<span class="text">
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
										</span>
									</span>
								</li>
								<li class="right">
									<img class="avatar" alt="Lucas" src="assets/img/avatar.jpg">
									<span class="message"><span class="arrow"></span>
										<span class="from">Łukasz Holeczek</span>
										<span class="time">Jul 25, 2012 11:08</span>
										<span class="text">
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
										</span>
									</span>
								</li>
								<li class="left">
									<img class="avatar" alt="Lucas" src="assets/img/avatar.jpg">
									<span class="message"><span class="arrow"></span>
										<span class="from">Łukasz Holeczek</span>
										<span class="time">Jul 25, 2012 11:07</span>
										<span class="text">
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
										</span>
									</span>
								</li>
								<li class="right">
									<img class="avatar" alt="Lucas" src="assets/img/avatar.jpg">
									<span class="message"><span class="arrow"></span>
										<span class="from">Łukasz Holeczek</span>
										<span class="time">Jul 25, 2012 11:06</span>
										<span class="text">
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
										</span>
									</span>
								</li>
							</ul>
							<div class="chat-form">
								<textarea></textarea>
								<button class="btn btn-info">Send message</button>
							</div>
						</div>
					</div>
				</div><!--/col-->

			</div><!--/row-->


					<!-- end: Content -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->

			<div class="modal fade" id="myModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							<p>Here settings can be configured...</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

		<div class="clearfix"></div>

		<footer>
			<p>
				<span style="text-align:left;float:left">© 2013 creativeLabs. <a href="http://bootstrapmaster.com">Admin Templates</a> by BootstrapMaster</span>
				<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://bootstrapmaster.com/demo/perfectum/" alt="Bootstrap Admin Templates">Perfectum Dashboard</a></span>
			</p>
		</footer>

	</div>
<?php include "_script.php";?>
</body>
</html>