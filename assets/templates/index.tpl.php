<html>

<title>Hello world!</title>

<body>

<h1>Hello World!</h1>

<?php foreach ($news as $item) { ?>
    <h3><?php echo $item->title; ?></h3>
    <p><?php echo $item->content; ?></p>
    <p><?php echo '<a href="/article.php?id=' . $item->id . '">' . $item->title . '</a>'; ?></p>
<?php } ?>

</body>

</html>