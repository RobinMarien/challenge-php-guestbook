<?php ?>

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
<body class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>My Guestbook</h1>
                <h3>Please leave a message!</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" placeholder="Your title here!">
                    <label for="content">Content:</label>
                    <textarea id="content" name="content" placeholder="Your message here!"></textarea>
                    <label for="author">Your Name:</label>
                    <input type="text" id="author" name="author" placeholder="Your name here!">
                    <label for="display">How many posts to display:</label>
                    <select name = "display">
                        <option>5</option>
                        <option>10</option>
                        <option>15</option>
                        <option>20</option>
                    </select>
                    <button type="submit">Post</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php
                if (isset($_POST['display'])){
                    for ($x = 0; $x <= $_POST['display']; $x++) {
                        echo "<div><h4>"
                            . $allPosts[$x]->getTitle()
                            . "</h4><p>"
                            . $allPosts[$x]->getDate()
                            . "</p><p>"
                            . $allPosts[$x]->getContent()
                            . "</p><p>"
                            . $allPosts[$x]->getAuthor()
                            . "</p></div>";
                    }
                }
                else {
                    for ($x = 0; $x <= 20; $x++) {
                        echo "<div><h4>"
                            . $allPosts[$x]->getTitle()
                            . "</h4><p>"
                            . $allPosts[$x]->getDate()
                            . "</p><p>"
                            . $allPosts[$x]->getContent()
                            . "</p><p>"
                            . $allPosts[$x]->getAuthor()
                            . "</p></div>";
                    }
                }

                ?>
            </div>
        </div>
    </div>

</body>
</html>
