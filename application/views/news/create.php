<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style type="text/css">
	
body{
    background-color: #ddd;
    font-size: 18px;
    font-family: Arial, Helvetica, sans-serif;
    margin: 50px;
}
	
</style>


<body>

<?= validation_errors(); ?>

<?= form_open('news/create');?>

<label>Judul</label>
<input type="text" name="title"><br>

<label>Text</label>
<textarea name="text" rows="8" cols="40"></textarea>

<input type="submit" name="submit" value="Posting">

<?= form_close(); ?>


</body>
</html>
