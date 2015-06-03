<!DOCTYPE html>
<html>
<head>
    <title>Todo</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>
<body>
<?php
	$db = new mysqli('localhost', 'todo', 'Rev82_y1', 'todo');
	
?>
<h1 align="center" style="margin:20px auto">Todo</h1>
<div class="jquery-script-clear"></div>
</div>
    <div class="container">
        <div class="col-lg-12">
            <section class="col-md-4">
                <div class="panel panel-danger ">
                    <div class="panel-heading">
                        <form class="form-group" id="newTaskForm">
                            <div class="input-group" style="margin-bottom:-40px;">
                                <div class="input-group-addon" id="saveNewItem"><a href="">Add</a></div>
                                <input class="form-control" type="text" id="newItemInput" placeholder="New Todo">
                            </div>
                        </form>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group" id='newList'>
							<?php
								$new = $db->query('SELECT text FROM todos WHERE status = 1');
								while($text = $new->fetch_assoc()) {
									echo '<li class="list-group-item"><span class="badge"><a href="#"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a></span>'.implode('; ', $text).'</li>';
								}
							?>
						</ul>
                    </div>
                </div>
            </section>
            <section class="col-md-4">
                <div class="panel panel-warning ">
                    <div class="panel-heading">
                        In Progress
                    </div>
                    <div class="panel-body">
                        <ul class="list-group" id="currentList">
						<?php
							$new = $db->query('SELECT text FROM todos WHERE status = 2');
							while($text = $new->fetch_assoc()) {
								echo '<li class="list-group-item"><span class="badge"><a href="#"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a></span>'.implode('; ', $text).'</li>';
							}
						?>
						</ul>
                    </div>
                </div>
            </section>
            <section class="col-md-4">
                <div class="panel panel-success ">
                    <div class="panel-heading">
                        Archived
                    </div>
                    <div class="panel-body">
                        <ul class="list-group" id="archivedList">
						<?php
							$new = $db->query('SELECT text FROM todos WHERE status = 3');
							while($text = $new->fetch_assoc()) {
								echo '<li class="list-group-item"><span class="badge"><a href="#"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a></span>'.implode('; ', $text).'</li>';
							}
						?>
						</ul>
                    </div>
                </div>
            </section>
      </div>

</div>
</body>
</html>