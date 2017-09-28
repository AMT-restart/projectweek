<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/calendar/index.php/calendars/edit_event" method="POST">
		<input type="hidden" name="id" value="<?= $id ?>">
		<input type="text" name="title" placeholder="title" value="<?= $title ?>">
		<input type="datetime-local" name="start" placeholder="event start" value="<?= $start?>">
		<input type="datetime-local" name="end" placeholder="event end" value="<?= $end?>">
		<input type="text" name="description" placeholder="description" value="<?= $description?>">
		<input type="submit" value="edit event">
	</form>
</body>
</html>