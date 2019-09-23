<?php
//require_once('bdd.php');


// $sql = "SELECT id, title, start, end, color FROM events ";

// $req = $bdd->prepare($sql);
// $req->execute();

// $events = $req->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo admin_asset_url('');?>calender/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- FullCalendar -->
	<link href='<?php echo admin_asset_url('');?>calender/css/fullcalendar.css' rel='stylesheet' />


    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
	#calendar {
		max-width: 800px;
	}
	.col-centered{
		float: none;
		margin: 0 auto;
	}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Free Calendar</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Menu</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>FullCalendar BS3 PHP MySQL</h1>
                <p class="lead">Complete with pre-defined file paths that you won't have to change!</p>
                <div id="calendar" class="col-centered">
                </div>
            </div>
			
        </div>
        <!-- /.row -->
		
		<!-- Modal -->
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="addEvent.php">
			
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Event</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Title</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color">
						  <option value="">Choose</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
						  <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
						  <option style="color:#000;" value="#000">&#9724; Black</option>
						  
						</select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Start date</label>
					<div class="col-sm-10">
					  <input type="text" name="start" class="form-control" id="start" readonly>
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-2 control-label">End date</label>
					<div class="col-sm-10">
					  <input type="text" name="end" class="form-control" id="end" readonly>
					</div>
				  </div>
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
		
		
		
		<!-- Modal -->
		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="editEventTitle.php">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Event</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Title</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color">
						  <option value="">Choose</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
						  <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
						  <option style="color:#000;" value="#000">&#9724; Black</option>
						  
						</select>
					</div>
				  </div>
				    <div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
						  <div class="checkbox">
							<label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label>
						  </div>
						</div>
					</div>
				  
				  <input type="hidden" name="id" class="form-control" id="id">
				
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="<?php echo admin_asset_url('');?>calender/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo admin_asset_url('');?>calender/js/bootstrap.min.js"></script>
	
	<!-- FullCalendar -->
	<script src='<?php echo admin_asset_url('');?>calender/js/moment.min.js'></script>
	<script src='<?php echo admin_asset_url('');?>calender/js/fullcalendar.min.js'></script>
	
	<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			defaultDate: '2016-01-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				
				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit').modal('show');
				});
			},
			eventDrop: function(event, delta, revertFunc) { // si changement de position

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

				edit(event);

			},
			events: [
							{
					id: '1',
					title: 'All Day Event',
					start: '2016-01-01',
					end: '0000-00-00',
					color: '#40E0D0',
				},
							{
					id: '2',
					title: 'Long Event',
					start: '2016-01-07',
					end: '2016-01-10',
					color: '#FF0000',
				},
							{
					id: '3',
					title: 'Repeating Event',
					start: '2016-01-09 16:00:00',
					end: '0000-00-00',
					color: '#0071c5',
				},
							{
					id: '4',
					title: 'Conference test',
					start: '2016-01-03',
					end: '2016-01-04',
					color: '#40E0D0',
				},
							{
					id: '5',
					title: 'Meeting',
					start: '2016-01-12 10:30:00',
					end: '2016-01-12 12:30:00',
					color: '#000',
				},
							{
					id: '6',
					title: 'Lunch',
					start: '2016-01-12 12:00:00',
					end: '0000-00-00',
					color: '#0071c5',
				},
							{
					id: '7',
					title: 'Happy Hour',
					start: '2016-01-12 17:30:00',
					end: '0000-00-00',
					color: '#0071c5',
				},
							{
					id: '8',
					title: 'Dinner',
					start: '2016-01-12 20:00:00',
					end: '0000-00-00',
					color: '#0071c5',
				},
							{
					id: '9',
					title: 'Birthday Party',
					start: '2016-01-14 07:00:00',
					end: '2016-01-14 07:00:00',
					color: '#FFD700',
				},
							{
					id: '10',
					title: 'Double click to change',
					start: '2016-01-27',
					end: '2016-01-27',
					color: '#008000',
				},
							{
					id: '15',
					title: 'test',
					start: '2016-01-31',
					end: '2016-02-01',
					color: '#0071c5',
				},
							{
					id: '16',
					title: '',
					start: '2016-01-31',
					end: '2016-02-01',
					color: '#40E0D0',
				},
							{
					id: '17',
					title: 'test2',
					start: '2016-02-01',
					end: '2016-02-02',
					color: '',
				},
							{
					id: '18',
					title: 'test',
					start: '2016-02-05',
					end: '2016-02-06',
					color: '',
				},
							{
					id: '19',
					title: 'dfsds',
					start: '2016-01-31',
					end: '2016-02-01',
					color: '',
				},
						]
		});
		
		// function edit(event){
		// 	start = event.start.format('YYYY-MM-DD HH:mm:ss');
		// 	if(event.end){
		// 		end = event.end.format('YYYY-MM-DD HH:mm:ss');
		// 	}else{
		// 		end = start;
		// 	}
			
		// 	id =  event.id;
			
		// 	Event = [];
		// 	Event[0] = id;
		// 	Event[1] = start;
		// 	Event[2] = end;
			
		// 	$.ajax({
		// 	 url: 'editEventDate.php',
		// 	 type: "POST",
		// 	 data: {Event:Event},
		// 	 success: function(rep) {
		// 			if(rep == 'OK'){
		// 				alert('Saved');
		// 			}else{
		// 				alert('Could not be saved. try again.'); 
		// 			}
		// 		}
		// 	});
		// }
		
	});

</script>


</body>

</html>
