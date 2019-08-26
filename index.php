
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
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/jumbotron-narrow/">

    <title>WEATHERAPP</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <![endif]-->
</head>

<body style="background-color: dodgerblue">

<div class="container">
    <div class="header clearfix">

        <h3 class="text-muted" style="font-family: cursive; color: blue;">Weatherapp</h3>
    </div>

    <div class="jumbotron">
        <h2>Search your city</h2>
        <form class="form-horizontal" method="get" action="get.php">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="exampleInputEmail3">City</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" autocomplete="off" name="city" placeholder="write your city">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="exampleInputPassword3">Country</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" autocomplete="off" name="country" placeholder="write your country">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
            </div>
        </form>
    </div>


    <footer class="footer">
        <p>&copy; Md Ariful Islam</p>
    </footer>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

</body>
</html>

