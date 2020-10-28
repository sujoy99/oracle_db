<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            overflow-x: hidden;
            background-color: green;
        }

        .box {
            display: flex;
            flex-flow: column;
            height: 100%;
        }

        .box .row {
            border: 1px dotted grey;
        }

        .box .row.header {
            flex: 0 1 auto;
            /* The above is shorthand for:
  flex-grow: 0,
  flex-shrink: 1,
  flex-basis: auto
  */
        }

        .box .row.content {
            flex: 1 1 auto;
        }

        .box .row.footer {
            flex: 0 1 80px;
            background-color: grey;
        }

        .center{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        input{
            display: block;
        }

        .login{
            height: 500px;
            width: 300px;
            background-color: yellowgreen;
        }
    </style>
</head>

<body>
    <div class="box">
        <!-- <div class="row header">
            <p><b>header</b>
                <br />
                <br />(sized to content)</p>
        </div> -->
        <div class="row content center ">
            <div class="login center">
                <div class="box1">
                    <input type="text" name="" id="">
                    <input type="text" name="" id="">
                    <input type="submit" name="" id="" value="Submit">
                </div>
            </div>
        </div>
        <div class="row footer center">
            <div class="title">
                <strong>Powered By </strong>
            </div>
            
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
