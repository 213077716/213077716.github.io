<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mpanwi</title>
	<link rel="stylesheet" type="text/css" href="lib/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="lib/js/style.js"></script>
</head>

<body>
	<div class="main-header">
		<div class="container">
			<header>
				<div id="logo">
					<img src="images/logo.png" title="Logo" height="50" width="80">
					<h3>MPANWI</h3>
					<form action="" metod="get" accept-charset="utf-8">
						<input type="text" placeholder="Search...">
						<button type="button"><i class="fa fa-search"></i></button>
					</form>
				</div>
				
				<nav>
					<ul>
						<li><a id="h" href="#" title="Home"></a></li>
						<li><a id="s" href="#" title="Service"></a></li>
						<li><a id="a" href="#" title="About"></a></li>
						<li><a id="c" href="#" title="Contact"></a></li>
					</ul>
				</nav>

				<div class="clearfix"></div>
			</header>
		</div><!--End container-->
	</div><!--End main-header-->
		
	

	<div class="main-content">
		<div class="container">
			<h3>Hello</h3>

			<p><?php 
					$three_days = 60*60*72;
					$date = "<form action='' method='POST'> <input type='datetime-local' value='$_POST[date]' name='date'>&nbsp;<input type='submit' value='Go' name='go'></form>";
					echo "Expiration Date ". $date; 
					if(isset($_POST['go'])){
						echo $date1 = $_POST['date'];
						
						echo "<br/>";
						echo "notification ".$notification_time = date('d-m-Y', strtotime($date1)-$three_days);
					


						// echo $diff = abs(strtotime($date1) - strtotime($notification_time));
						// echo "<br/>";
						// echo $year = floor($diff / (365*60*24));
						// echo $month = floor(($diff - $year * 365*60*60*24) / (365*60*60*24));
						// echo $day  = floor(($diff - $year * 365*60*60*24 - $month*30*60*24) / (60*60*24));
						$day = (date('d',strtotime($date1)) - date('d'));

						$j=$day >1 ? ' days': ' day'; 
					
						if($day <=3 && $day >=1){
							echo <<<html
								<div>
									<p id="p1"><a href='#'>1</a></p>
									<img id="img1" src="images/notification.png" width="80" height="80">
									<img id="img2" src="images/reminder.png" width="40" height="40">
								</div>


html;

							echo "Your Ad will be expired in ".$day.$j;
						
						} 
						elseif($day ==0){
							$hours = date('h',strtotime($date1)) - date('h');
							$minutes = (date('i',strtotime($date1))-date('i')) ;
							$info = isset($minutes) && $minutes > 0 ? 'and '.$minutes.' minutes': NULL;
							echo <<<html
								<div>
									<p id="p1"><a href='#'>1</a></p>
									<img id="img1" src="images/notification.png" width="80" height="80">
									<img id="img2" src="images/reminder.png" width="40" height="40">
								</div>
html;

							echo "Your Ad will be expired today in ".$hours." hours ".$info;
						}else echo "Today's date: ".date('d/m/Y');
					}
					

				?></p>
		</div>
	</div>
		
	<div class="container">
		<section class="other">
			<div id="box1">
				<h4>Box1</h4>
				<ul>
					<li>Thing1</li>
					<li>Thing2</li>
					<li>Thing3</li>
					<li>Thing4</li>
				</ul>
			</div>

			<div id="box2">
				<h4>Box2</h4>
				<p>
					is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
				</p>
			</div>

		</section>

		<footer>
			<p> All right are Reserved &copy; mpanwi.com</p>
		</footer>
	</div><!--End Container-->
</body>

</html>
