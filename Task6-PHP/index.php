<?php
$minutes=$_POST['minute'];
function trafficLight($minutes) {
  if($minutes%5>=1 && $minutes%5<=3 && $minutes<=60){
  	return "<span style='color: green;'>Green.</span>";
  } else if ($minutes>0 && $minutes<=60){
  	return "<span style='color: red;'>Red.</span>";
  } else if ($minutes<=0 || $minutes>60){
  	return "<span style='color: red;'>No signal. In an hour only 60 minutes. Enter a number from 1 to 60.</span>";
  }   
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Task6-PHP</title>
  </head>
  <body style="padding: 2%;">
  	<p>Please, enter a minute:</p>
    <form method="post" action="">
    <input type="number" name="minute"> 
    <button type='submit'  class="btn btn-primary">Done</button>   
    </form>    
	<?php echo "Now $minutes minutes and signal is ".trafficLight($minutes); ?>	   
  </body>
</html>

