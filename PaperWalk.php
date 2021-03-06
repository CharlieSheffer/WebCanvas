<?php

session_start();

	echo <<<_END
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>TechRoanoke Canvass Web App</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/TR_CanvassApp_Common.css" rel="stylesheet">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
@media (max-width: 767px) {
	.table-container{
		width: 340px;
		height: 500px;
		overflow: scroll;
	}
}
</style>
</head>
<body>
_END;

//Bring in the nav bar
include 'NavBar.php';
	echo <<<_END
	<!--User Input Modal -->
	<div class='modal' id='mdlUserInput' tabindex='-1' role='dialog'
		aria-labelledby='myModalLabel' aria-hidden='true'>
		<div class='modal-dialog'>
			<div class='modal-content'>
				<div class='modal-header'>

					<h4 class='modal-title' id='lblModalTitle'>Modal Title</h4>
				</div>
				<div class='modal-body'>
					<div id='divHtmlSpace'>
					<p>Lorem ipsum stuff about cabbage </p>
					</div>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<div id='divNonPrintItems'>
		<div class='container main-window'>
			<h3>Paper-Walk List</h3>
			<div class="alert alert-danger alert-dismissible text-center visible-xs" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				The Paper-Walk page is not very effective on anything smaller than a tablet.
			</div>
			<form id='frmDirection' onchange='funcSortTable()'>
				<div class="radio">
				  <label>
					<input type="radio" name="rdbDirection" id="rdbDirection1" value="High2Low" checked>
					I am walking from high street numbers to low
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="rdbDirection" id="rdbDirection2" value="Low2High">
					I am walking from low street numbers to high
				  </label>
				</div>
			</form>
			<div class='TR-Separator'></div>
			<form id='frmOddEven' onchange='funcSortTable()'>
				<div class="radio">
				  <label>
					<input type="radio" name="rdbOddEven" id="rdbOddEven1" value="Both" checked>
					I will hit houses on both sides of the street as I walk
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="rdbOddEven" id="rdbOddEven2" value="OddEven">
					I want to walk down one side of the street, then come back down the other (sort by odd/even street numbers)
				  </label>
				</div>
			</form>
			<div id='div2ndSeperator' class='TR-Separator hidden'></div>
			<form id='frmOddEvenSequence' onchange='funcSortTable()' class='hidden'>
				<div class="radio">
				  <label>
					<input type="radio" name="rdbOddEvenSequence" id="rdbOddEvenSequence1" value="Odd" checked>
					I will hit odd numbered houses first
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="rdbOddEvenSequence" id="rdbOddEvenSequence2" value="Even">
					I will hit even numbered houses first
				  </label>
				</div>
			</form>
		</div><!-- Close Main Div -->
	</div><!--Close non-print view -->
	<div class='container center-block' style='width: 340px; margin-bottom: 10px;'>
		<button id='btnPrint' class="btn btn-default" type="button" onclick='funcPrintTable()' style='width: 100px; margin-top:10px;'>Print</button>
		<button id='btnRecord' class="btn btn-default" type="button" onclick='funcEditTable()' style='width: 100px; margin-top:10px;'>Record</button>
		<button class="btn btn-default" type="button" onclick='funcNotYet()' style='width: 100px; margin-top:10px;'>Add Column</button>
	</div>
	
	<div class='table-container' id='divWalkList'></div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src='js/TempDataSource.js'></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/BasicFunctions.js"></script>
    <script src="js/PaperWalk.js"></script>
	<script src="js/TR_CanvassApp_Common.js"></script>
<script>
	$(document).ready(function() {
		$('.nav>li').removeClass('active');
		$('a[href="PaperWalk.php"]').parent().addClass('active');
	});
	funcSortTable();
</script>

		
  </body>
</html>
_END;
?>