<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <div class="row">
        <?php
        if (!empty($_SESSION['errors'])):?>

            <div class="panel panel-danger">
                <ul>
                <?php foreach ($_SESSION['errors'] as $error): ?>
                    <li><?=$error?></li>
                <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>
    </div>
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-12 form-group">
            <form action="/addMessage.php" method="post">
                <label for="subject">Subject</label>
                <input type="text" name="subject" class="form-control">
                <label for="content">Content</label>
                <textarea name="content" id="" cols="30" rows="10" class="form-control">

                </textarea>
                <input type="submit" value="Send message" class="form-control btn btn-success">
            </form>
        </div>

    </div>

    <hr>

    <div class="row">
        <?php $messages = Message::getAll() ?>
        <?php if(is_array($messages)):?>
            <ul>
            <?php foreach ($messages as $message): ?>
                <li><?=$message?></li>
            <?php endforeach?>
            </ul>
        <?php endif?>
    </div>

    <footer>
        <p>&copy; 2016 Company, Inc.</p>
    </footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>
