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

        h2 {
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
        <h2>Form Pengisian Bilangan</h2><br>
        <form action="exponentnumber" method="get">
            @csrf
            <div class="row mt-4">
                <div class="col-2">
                    <label>Bilangan pokok</label>
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col-9">
                    <input type="number" class="form-control" name="bilanganpokok" required>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-2">
                    <label>Bilangan pangkat</label>
                </div>
                <div class="col-1">
                    :</div>
                <div class="col-9">
                    <input type="number" class="form-control" name="bilanganpangkat" required>
                </div>
            </div>
            <br>
            <div class="button mt-3 text-center">
                <button class="btn-primary submit mr-3" type="submit">Hitung</button>
                <button class="btn-danger reset" type="reset">Reset</button>
            </div>
        </form>
    </div>
</body>

</html>
