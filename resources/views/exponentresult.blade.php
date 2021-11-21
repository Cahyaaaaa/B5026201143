<!DOCTYPE html>
<html>

<head>
    <title>Bilangan Pangkat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            margin: 100px;
            background-image: url("https://images.pexels.com/photos/1831234/pexels-photo-1831234.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
            background-size: cover;
        }

        p {
            text-align: left;
        }

        h3 {
            text-align: center;
            font-family: cursive;
        }

        .container {
            background-color: lightsalmon;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        label {
            width: 400px;
            text-align: left;
            margin-right: 20px;
            font-size: 20px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .submit,
        .reset {
            width: 300px
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Hasil Perhitungan Bilangan Pangkat</h3>
            <div class="row mt-3">
                <div class="col-2">
                    <label>Bilangan pokok</label>
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col-9">
                    <?php echo $_GET["bilanganpokok"] ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2">
                    <label>Bilangan pangkat</label>
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col-9">
                    <?php echo $_GET["bilanganpangkat"] ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2">
                    <label>Hasil pangkat</label>
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col-9">
                    <?php
                    function pangkat ($a, $b) {
                        $bil = $a;
                        for ($i=0;$i<($b-1);$i++)
                        {
                        $bil = $bil * $a;
                        }
                        return $bil;
                    }
                    echo pangkat($_GET["bilanganpokok"], $_GET["bilanganpangkat"]);
                    ?>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
