<!DOCTYPE html>
<html>

<head>
<title>Praktikum Jquery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
    $("#btn1").click(function(){
        $("#test1").html(function(i, origText){
            return "Exercise : <br>" + origText + "<br> Answer : <br> Not only English, there (" + (i+1) + ") <b>are</b>  several Indonesian words that are the same but have different meanings and pronunciations. One of them (" + (i+2) + ") <b>is</b> ‘mental’. Mental (" + (i+3) + ") <b>has</b> a meaning related to human mind and nature in bahasa. While mental(v) bounce off means to be thrown or thrown away. So how do you read and say that mental word ?";
        });
    });
    $("#btn2").click(function(){
        $("#test2").html(function(i, origText){
            return "Exercise : <br>" + origText + "<br> Answer : <br> (" + (i+1) + ") <b>In</b> early 2021, Seventeen will hold an online concert (" + (i+2) + ") <b>on</b> January 23 online. Seventeen is a famous Korean idol group singer who debuted in 2015 under Pledis Entertainment. Seventeen has 13 members, three of the seventeen (" + (i+3) + ") <b>members</b> are foreign nationals. Tickets can be purchased from a Weverse store.";
        });
    });
    });
  </script>
  <style>
    body {
        margin-top: 40px;
        margin-left: 50px;
        margin-bottom: 40px;
        margin-right: 50px;
        background-color: #eee6ff;
    }
    h1 {
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        color: #0066cc;
        text-align: center;
    }
    h5 (
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    )
  </style>
</head>

<body>
    <h1>English Learning</h1>

    <p>
            Let's learn about English material <br>
            Fill in the following blanks with the correct answer !!
    </p>

    <div class="container-fluid">
        <div class="row">

          <div class="col" style="background-color:lavender;">
            <h5> Example 1</h5>
            <p id="test1">
                Not only English, there <b>(1) it/its/is/are</b>> several Indonesian words that are the same but have different meanings and pronunciations.
                One of them <b>(2) are/like/is/as</b> ‘mental’. Mental <b>(3) have/has/is/as</b> a meaning related to human mind and nature in bahasa.
                While mental(v) bounce off means to be thrown or thrown away. So how do you read and say that mental word ?
            </p>
            <button id="btn1">Show Answer</button>
          </div>

          <div class="col" style="background-color:lavender;">
            <h5> Example 2</h5>
            <p id="test2">
                <b>(1) At/In/Or/When</b> early 2021, Seventeen will hold an online concert <b>(2) at/in/is/on</b> January 23 online. Seventeen is a famous Korean idol
                group singer who debuted in 2015 under Pledis Entertainment. Seventeen has 13 members, three of the seventeen <b>(3) member/members/were/are</b>
                are foreign nationals. Tickets can be purchased from a Weverse store.
            </p>
            <button id="btn2">Show Answer</button>
          </div>
        </div>
    </div>

    <br>

    <div class="container-fluid">
        <div class="row">

            <div class="col">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRD6kJ7KQauWyga93fNiWeEyF7ccM9Nnfb1XQUYA43CrfI1DBWt4n6BznAnbqKYmQbyn1I&usqp=CAU" alt="Easy English">
            </div>

            <div class="col">
              <h2>English Learning</h2>
              <p>
                Learn English easily with us. <br>
                Hopefully the knowledge we provide is useful for you.
              </p>
            </div>

            <div class="col">

            </div>

            <div class="col">

            </div>

            <div class="col">

            </div>

        </div>
    </div>

</body>
</html>
