<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Margarita's CV</title>
    <!-- Import main styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 10]>
    <link rel="stylesheet" href="assets/css/ie.css">
    <![endif]-->
</head>
<body background="assets/img/poly.jpg">

    <header class = "page-header text-center"><h1>GUESTBOOK</h1></header>
    <div class ="container">
        <form action = '#' method="post">
            <div class="form-group col-md-6">
                <font color="white">  <label for="name">Name</label></font>
                <div class="input-group">
                    <div class="input-group-addon"></div>
                    <input type="text" class="form-control" name ="name" id="name" placeholder="Name" required>
                </div>
            </div>
            <div class="form-group col-md-6">
                <font color="white"><label for="email">Email address</label></font>
                <div class="input-group">
                    <div class="input-group-addon"></div>
                    <input type="email" class="form-control" name = "email" id="email" placeholder="example@email.com">
                </div>
            </div>
            <div class="form-group col-md-12">
                <font color="white"> <label for="message-text" class="control-label"> Massage</label></font>
                <textarea class="form-control" rows="5" id="message-text" name = "massage" placeholder="Your massage" required></textarea>
            </div>
            <div class = "submit">
                <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

        <div class = "data">
            <?php
                foreach ($savedMassages as $id => $record) {?>
                        <div class = "data">
                            <p class = "time text-lead text-primary"><?php echo $record->time; ?></p>
                            <p class = "massage text-justify"><?php echo $record->massage; ?></p>
                        </div>
            <?php } ?>
        </div>

        <div class="tab-content">
            <div class="tab-pane" id="<?php ?>"></div>
        </div>

        <nav>
            <ul class = "pagination">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class = "active"><a href="#0">1</a></li>
                <li><a href="#1">2</a></li>
                <li><a href="#2">3</a></li>
                <li><a href="#3">4</a></li>
                <li><a href="#4">5</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</body>
</html>