<?php ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guestbook</title>
</head>
<body>
<h1>My Guestbook</h1>
<h3>Please leave a message!</h3>


<?php foreach($allPosts AS $post):?>

    <div>
        <h4><?php echo $post->getTitle()?></h4>
        <p><?php echo $post->getDate()?></p>
        <p><?php echo $post->getContent()?></p>
        <p><?php echo $post->getAuthor()?></p>

    </div>

<?php endforeach; ?>


</body>
</html>
