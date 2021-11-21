<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src=”js/bootstrap.min.js”></script>
    <script>
        $(document).on('click', 'input[type="checkbox"]', function() {
        $('input[type="checkbox"]').not(this).prop('checked', false);
        });

        function myFunction() {
            alert("The form was submitted");
        }
    </script>
    <style>
        body {
            margin: 20px 50px 20px 50px;
            background-image: url("https://buat.web.id/wp-content/uploads/2020/08/bubble-animated-background.svg");
            color: white;
        }
        aside {
            float: left;
            width: 25%;
            height: 800px;
            padding: 20px;
        }
        h1 {
            font-family: cursive;
        }
        h3 {
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        h5 {
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-1">
                    <img src="https://i.pinimg.com/originals/14/06/72/14067212787e8175babca51a1031bf7a.jpg" alt="Logo World Traveler" class="rouned-circle" width="80px" height="80px">
                </div>
                <div class="col-8">
                    <h1>World Traveler</h1>
                    <h5>Welcome to our WorldTraveler.com !!</h5>
                </div>
                <div class="col-3">

                </div>
            </div>
        </div>
    </header>
    <section>
        <aside>
            <p>World Traveler is a large community of people who love to travel around the world. With our community, you will have an amazing and unforgettable experience.</p>
            <br>
            <p>Are you interested in joining us??</p>
            <p>Please fill out the registration form below and look forward to an amazing journey with us.</p>
            <img src="https://singapore-s3.123ish.com/images/5739/amp_standard_webp?1549200591" alt="Keindahan alam" width="300px" height="250px">
        </aside>
        <article>
            <h3>Registration Form</h3>
            <br>
            <div class="container">
                <form id="form_registration" action="https://zedemy.com/" onsubmit="return myFunction()">
                    <div class="row">
                        <div class="col-2">
                            <label for="user_id">User Id :</label>
                        </div>
                        <div class="col-10">
                            <input type="text" class="form-control form-control-sm" placeholder="Enter a user id" name="user_id" required minlength="5" maxlength="12">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="password">Password :</label>
                        </div>
                        <div class="col-10">
                            <input type="password" class="form-control form-control-sm" placeholder="Enter a password" name="password" required minlength="7" maxlength="12">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="name">Name :</label>
                        </div>
                        <div class="col-10">
                            <input type="text" class="form-control form-control-sm" placeholder="Enter your name" name="name" required pattern="[A-Za-z]{1,}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="address">Address :</label>
                        </div>
                        <div class="col-10">
                            <input type="text" class="form-control form-control-sm" placeholder="Enter your address" name="address">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="country">Country :</label>
                        </div>
                        <div class="col-10">
                            <select class="form-control form-control-sm" required>
                                <option value="">Please select a country</option>
                                <option value="1">Indonesia</option>
                                <option value="2">France</option>
                                <option value="3">Spain</option>
                                <option value="4">United States</option>
                                <option value="5">China</option>
                                <option value="6">Italy</option>
                                <option value="7">Turkey</option>
                                <option value="8">Mexico</option>
                                <option value="9">Germany</option>
                                <option value="10">South Korea</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="zip_code">Zip Code :</label>
                        </div>
                        <div class="col-10">
                            <input type="number" class="form-control form-control-sm" placeholder="Enter your zip code" name="zip_code" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="email">Email :</label>
                        </div>
                        <div class="col-10">
                            <input type="email" class="form-control form-control-sm" placeholder="Enter your email" name="email" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="sex">Sex :</label>
                        </div>
                        <div class="col-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="sex1" name="sex" value="male" required>
                                  <label class="custom-control-label" for="sex1">Male</label>
                                <input type="radio" class="custom-control-input" id="sex2" name="sex" value="female" required>
                                  <label class="custom-control-label" for="sex2">Female</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="language">Language :</label>
                        </div>
                        <div class="col-10">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="language1" name="language" value="english">
                                  <label class="custom-control-label" for="language1">English</label>
                                <input type="checkbox" class="custom-control-input" id="language2" name="language" value="non-english">
                                  <label class="custom-control-label" for="language2">Non English</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="about">About :</label>
                        </div>
                        <div class="col-10">
                            <textarea class="form-control" rows="5" id="about" name="about"></textarea>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </article>
    </section>
</body>
</html>
