<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php 
		echo $this->Html->charset('UTF-8');
		echo $this->Html->meta('icon');
		echo $this->Html->meta('robots', null, array('name' => 'robots', 'content' => 'index, follow') ,false);
		echo $this->Html->meta('description','ชมรมสมาธิ มหาวิทยาลัยเทคโนโลยีสุรนารี');
		echo $this->Html->meta('keywords','ชมรมสมาธิ,ชมรมสมาธิ มทส., มทส., ชมรมสมาธิ มหาวิทยาลัยเทคโนโลยีสุรนารี, มหาวิทยาลัยเทคโนโลยีสุรนารี, 	SUT, SUT Meditation Club, Suranaree University of Technology');
		echo $this->Html->meta('author', null, array('name' => 'author', 'content' => 'Chatchai Boonlai') ,false);
		echo $this->Html->meta('CONTACT_ADDR', null, array('name' => 'CONTACT_ADDR', 'content' => 'master_msw3@hotmail.com') ,false);
		echo $this->Html->meta('generator', null, array('name' => 'generator', 'content' => 'CakePHP 2.2.2') ,false);
	?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		/**** CSS *****/
		echo $this->Html->css('StyleSheet');
		echo $this->Html->css('template');
		
		
		/***** JS *****/
		echo $this->Html->script('jquery/jquery-1.8.1');
		echo $this->Html->script('common');
		
	?>
</head>
<body>

	<div id="main_wrapper">
		<div id="header">
			<ul class="arrange">
				<li id="header_1"></li>
				<li id="header_2"></li>
				<li id="header_3"></li>
				<li id="header_4"></li>
			</ul>
		</div>
		<br/><br/><br/><br/><br/>
		<?php echo $content_for_layout ?>
		<br/><br/><br/><br/>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/>

	</div>
	<div id="footer">
		<div id="bottom">
			<ul>
				<li>ชมรมสมาธิ มหาวิทยาลัยเทคโนโลยีสุรนารี</li>
				<li>อาคารบริการหอพักนักศึกษา 7-8 ชั้น 2 (ธรรมนิเวศ)</li>
			</ul>
		</div>	
		<ul class="arrange">
			<li id="footer_1"></li>
			<li id="footer_2"></li>
			<li id="footer_3"></li>
			<li id="footer_4"></li>		
		</ul>
		
	</div>


		
<!-- 	<div id="copyright">Copyright &copy; 2012 <a href="http://apycom.com/">Apycom jQuery Menus</a></div> -->
</body>
</html>
