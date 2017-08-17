<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <title> Bmi Calculate</title>
    </head>
    <body>
        <div class="col-md-4 bodyBmi">
            <h3> Your Height (Metric): </h3>
            <input type="text" id="height" name="height" class="form-control" aria-label="height">
            <br>
            <h3>  Your Weight: (kilograms) </h3>
            <input type="text" id="weight" name="weight" class="form-control" aria-label="weight">
            <br>
            <a  id="succes" onclick="myFunction" class="btn btn-success">Success</a>
        </div>


        <script>
            window.onload = function () {
                document.getElementById("succes").onclick = function () {
                    document.getElementById('height');
                    var height = document.getElementById("height").value;
                    var weight = document.getElementById("weight").value;
                if(weight > 0 && height > 0){
                     var finalBmi = weight/(height/100*height/100);
                    if (finalBmi < 18.5) {
                       alert("That you are too thin.")
                        $('#height').val('');
                        $('#weight').val('');
                    }
                    if (finalBmi > 18.5 && finalBmi < 25) {
                       alert("That you are healthy.")
                        $('#height').val('');
                        $('#weight').val('');

                    }
                    if (finalBmi > 25) {
                        alert( "That you have overweight.")
                        $('#height').val('');
                        $('#weight').val('');
                    }
                }
                else
                {
                        alert("Please Fill in everything correctly")
                }
                }
            }
        </script>
    </body>
</html>