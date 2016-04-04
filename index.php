<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kisphp.net</title>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<style>
body {
    padding-top: 60px;
}
.jumbotron h1 {
    font-size: 40px;
}
</style>
<body>

<div class="container">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="jumbotron" id="counter">
                <h1>Redirect in <span id="timer" class="text-info">10</span> seconds to <a href="http://www.kisphp.com">www.kisphp.com</a></h1>
            </div>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script>

    function timer() {
        var value = $('#timer').html();
        var newValue = parseInt(value) - 1;

        $('#timer').html(newValue);
        if (newValue < 3) {
            $('#timer').addClass('text-danger');
        }
        if (newValue == 0) {
            window.location = 'http://www.kisphp.com';
            return false;
        }

        setTimeout("timer()", 1000);
    }

    $(function(){
        timer();
    });
</script>
</body>
</html>
