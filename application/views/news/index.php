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

<?php 
foreach ($news as $news_item) { ?>

<h1><a href="<?= site_url('news/'.$news_item['slug']);?>"><?= $news_item['title'];?></a></h1>
<p><?= $news_item['text'];?></p>
<a href="<?= site_url('news/update/'.$news_item['id']);?>">edit</a>
<a href="<?= site_url('news/delete/'.$news_item['id']);?>">hapus</a>
<?php }?>

</body>
</html>
