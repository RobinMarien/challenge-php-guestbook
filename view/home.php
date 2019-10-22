<?php


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guestbook</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1>My Guestbook</h1>
<h3>Please leave a message!</h3>

<form method="post">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" placeholder="Your title here!">
    <label for="content">Content:</label>
    <textarea id="content" name="content" placeholder="Your message here!"></textarea>
    <label for="author">Your Name:</label>
    <input type="text" id="author" name="author" placeholder="Your name here!">
    <button type="submit">Post</button>
</form>


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
