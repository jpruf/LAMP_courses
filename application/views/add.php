<html>
<head>
	<title>Add a student</title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<style>
	.container
	{
		padding: 10px;
	}
</style>
<body>

	<div class="container">
		<h2>Add a new course</h2>
		<form method="post" role="form" action="/courses/add">
			<div class="form-group">
				<label for="name" class="control-label">Name</label>
				<input type="text" class="form-control" name="name">
			</div>
			<div class="form-group">
				<label for="description" class="control-label">Description</label>
				<input type="textarea" class="form-control" name="description">
			</div>
			<input type="submit" value="Add" class="btn btn-default" name="add">
		</form>
		<h2>Courses</h2>
		<table class="table table-striped table-bordered ">
			<tr>
				<th>Course Name</th>
				<th>Description</th>
				<th>Date Added</th>
				<th>Actions</th>
			</tr>
			<?php foreach ($courses as $course){ ?>
				<tr>
					<td><?= $course['name'] ?></td>
					<td><?= $course['description'] ?></td>
					<td><?= $course['created_at'] ?></td>
					<td><a href="/destroy/<?= $course['id'] ?>">remove</a></td>
				</tr>
			<?php } ?>
		</table>
	</div>

</body>
</html>