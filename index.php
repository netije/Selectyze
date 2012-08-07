
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Selectyze Demonstration : jquery plugin | Make your own select lists with jQuery : MyjQueryPlugins.com</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/Selectyze.jquery.css" type="text/css" />

	<style type="text/css">
		.intro {
			padding: 10px;
			background-color: #222;
			color: #AFAFAF;
			width: 250px;
		}
		
		.clr {
			height:0;
			width:0;
			clear:both;
		}
		
		.contain_select label {
			float: left;
display: block;
margin-right: 5px;
margin-top: 25px;
		}
	</style>
</head>

<body id="demopage">




<div id="main">


	
	<div id="left_col">

		<h1>Selectyze demonstration</h1>
		<?php
		if(isset($_POST['btValide']))
		{
			echo '<div class="phpresponse">';
			echo 'Datas received :<br />';
			echo '#1 -> '.$_POST['style1'].'<br />';
			echo '#2 -> '.$_POST['style2'].'<br />';
			echo '#3 -> '.$_POST['style3'].'<br />';
			echo '#4 -> '.$_POST['style4'].'<br />';
			echo '#5 -> '.$_POST['style5'].'<br />';
			echo '</div>';
		}
		?>
		<form method="post" action="">
			<fieldset>
				
				<div class="contain_select">
					<p class="intro first">#1 -> $('.selectyze1').Selectyze({<br />theme : <span>'skype'</span>,<br />effectOpen : <span>'fade'</span><br />});</p>
					<label>State</label>
					<select name="style1" class="selectyze1">
						<option>- -</option>
						<optgroup label="States : optgroup detected !">
							<option value="Alabama" <?php if(isset($_POST['style1']) && $_POST['style1'] == 'Alabama') echo 'selected="selected"';?>>Alabama</option>
							<option value="Alaska" <?php if(isset($_POST['style1']) && $_POST['style1'] == 'Alaska') echo 'selected="selected"';?>>Alaska</option>
							<option value="Arizona" <?php if(isset($_POST['style1']) && $_POST['style1'] == 'Arizona') echo 'selected="selected"';?>>Arizona</option>
							<option value="Arkansas" <?php if(isset($_POST['style1']) && $_POST['style1'] == 'Arkansas') echo 'selected="selected"';?>>Arkansas</option>
							<option value="California" <?php if(isset($_POST['style1']) && $_POST['style1'] == 'California') echo 'selected="selected"';?>>California</option>
						</optgroup>
						
						<optgroup label="States : optgroup detected !">
							<option value="Alabama" <?php if(isset($_POST['style1']) && $_POST['style1'] == 'Alabama') echo 'selected="selected"';?>>Alabama</option>
							<option value="Alaska" <?php if(isset($_POST['style1']) && $_POST['style1'] == 'Alaska') echo 'selected="selected"';?>>Alaska</option>
							<option value="Arizona" <?php if(isset($_POST['style1']) && $_POST['style1'] == 'Arizona') echo 'selected="selected"';?>>Arizona</option>
							<option value="Arkansas" <?php if(isset($_POST['style1']) && $_POST['style1'] == 'Arkansas') echo 'selected="selected"';?>>Arkansas</option>
							<option value="California" <?php if(isset($_POST['style1']) && $_POST['style1'] == 'California') echo 'selected="selected"';?>>California</option>
						</optgroup>
							
					</select>
					<div class="clr"></div>
				</div>
				
				
				
					
				<div class="contain_select">
					<p class="intro">#2 -> $('.selectyze2').Selectyze({<br />theme : <span>'mac'</span>,<br />effectClose,<span>'fade'</span><br />});</p>
					<label>State</label>
					<select name="style2" class="selectyze2">
						<option>- -</option>
						<optgroup label="States">
							<option value="Alabama" <?php if(isset($_POST['style2']) && $_POST['style2'] == 'Alabama') echo 'selected="selected"';?>>Alabama</option>
							<option value="Alaska" <?php if(isset($_POST['style2']) && $_POST['style2'] == 'Alaska') echo 'selected="selected"';?>>Alaska</option>
							<option value="Arizona" <?php if(isset($_POST['style2']) && $_POST['style2'] == 'Arizona') echo 'selected="selected"';?>>Arizona</option>
							<option value="Arkansas" <?php if(isset($_POST['style2']) && $_POST['style2'] == 'Arkansas') echo 'selected="selected"';?>>Arkansas</option>
							<option value="California" <?php if(isset($_POST['style2']) && $_POST['style2'] == 'California') echo 'selected="selected"';?>>California</option>
						</optgroup>
					</select>
					<div class="clr"></div>
				</div>
				<div class="clr"></div>
				
				<div class="contain_select">
					<p class="intro">#3 -> $('.selectyze3').Selectyze({<br />theme : <span>'grey'</span>,<br />effectOpen : <span>'fade'</span>,<br />effectClose : <span>'fade'</span><br />});</p>
					<label>State</label>
					<select name="style3" class="selectyze3">
						<option>- -</option>
						<optgroup label="States">
							<option value="Alabama" <?php if(isset($_POST['style3']) && $_POST['style3'] == 'Alabama') echo 'selected="selected"';?>>Alabama</option>
							<option value="Alaska" <?php if(isset($_POST['style3']) && $_POST['style3'] == 'Alaska') echo 'selected="selected"';?>>Alaska</option>
							<option value="Arizona" <?php if(isset($_POST['style3']) && $_POST['style3'] == 'Arizona') echo 'selected="selected"';?>>Arizona</option>
							<option value="Arkansas" <?php if(isset($_POST['style3']) && $_POST['style3'] == 'Arkansas') echo 'selected="selected"';?>>Arkansas</option>
							<option value="California" <?php if(isset($_POST['style3']) && $_POST['style3'] == 'California') echo 'selected="selected"';?>>California</option>
						</optgroup>
					</select>
					<div class="clr"></div>
				</div>
				
				<div class="contain_select">
					<p class="intro">#4 -> $('.selectyze4').Selectyze({ theme : <span>'firefox'</span>});</p>
					<label>State</label>
					<select name="style4" class="selectyze4">
						<option>- -</option>
						<optgroup label="States">
							<option value="Alabama" <?php if(isset($_POST['style4']) && $_POST['style4'] == 'Alabama') echo 'selected="selected"';?>>Alabama</option>
							<option value="Alaska" <?php if(isset($_POST['style4']) && $_POST['style4'] == 'Alaska') echo 'selected="selected"';?>>Alaska</option>
							<option value="Arizona" <?php if(isset($_POST['style4']) && $_POST['style4'] == 'Arizona') echo 'selected="selected"';?>>Arizona</option>
							<option value="Arkansas" <?php if(isset($_POST['style4']) && $_POST['style4'] == 'Arkansas') echo 'selected="selected"';?>>Arkansas</option>
							<option value="California" <?php if(isset($_POST['style4']) && $_POST['style4'] == 'California') echo 'selected="selected"';?>>California</option>
						</optgroup>
					</select>
					<div class="clr"></div>
				</div>		
				<div class="clr"></div>
				
				<div class="contain_select">
					<p class="intro">#5 -> $('.selectyze5').Selectyze({ theme : <span>'css3'</span>});</p>
					<label>State</label>
					<select name="style5" class="selectyze5">
						<option>- -</option>
						<optgroup label="States">
							<option value="Alabama" <?php if(isset($_POST['style5']) && $_POST['style5'] == 'Alabama') echo 'selected="selected"';?>>Alabama</option>
							<option value="Alaska" <?php if(isset($_POST['style5']) && $_POST['style5'] == 'Alaska') echo 'selected="selected"';?>>Alaska</option>
							<option value="Arizona" <?php if(isset($_POST['style5']) && $_POST['style5'] == 'Arizona') echo 'selected="selected"';?>>Arizona</option>
							<option value="Arkansas" <?php if(isset($_POST['style5']) && $_POST['style5'] == 'Arkansas') echo 'selected="selected"';?>>Arkansas</option>
							<option value="California" <?php if(isset($_POST['style5']) && $_POST['style5'] == 'California') echo 'selected="selected"';?>>California</option>
						</optgroup>
					</select>
					<div class="clr"></div>
				</div>
				
				<div class="contain_select">
					Imagine all the theme you can make !<br />
					No limit, only CSS &amp; images !
				</div>
				<div class="clr"></div>
				<input type="submit" value="SUBMIT MY SELECT LISTS !" name="btValide" class="submit" />
			</fieldset>
		</form>

	</div>
		
	

		
	<div class="clr"></div>

</div>
	
	


	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery/Selectyze.jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.selectyze1').Selectyze({
				theme : 'skype',
				effectOpen : 'fade'
			});
			
			$('.selectyze2').Selectyze({
				theme : 'mac',
				effectClose:'fade'
			});
			
			$('.selectyze3').Selectyze({
				theme : 'grey',
				effectOpen : 'fade',
				effectClose : 'fade'
			});	
			
			$('.selectyze4').Selectyze({
				theme : 'firefox'
			});
			
			$('.selectyze5').Selectyze({
				theme : 'css3'
			});
			
		});
	</script>
</body>
</html>
