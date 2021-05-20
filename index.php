




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container my-3 form-container">
        <form enctype="multipart/form-data" action="/form/handler.php" method="POST" class="userform">
            <div class="heading">
                <H3>
                    <pre>Register your self </H3>
            </div>
           
            <div id="name">
                <input type="text" id="fname" name="first_name" placeholder="Name" autocomplete="off">
                <b><span class="error"></span></b>
            </div>
            <div id="">
                <input type="text" id="lname" name="last_Name" placeholder="Last_Name" autocomplete="off">
                <b><span class="error"></span></b>
            </div>

            <div>
                <input type="email" id="email" name="email" placeholder="Email">
                <b><span class="error"> </span></b>
            </div>
            <div>
                <input type="number" id="number" name="mobile" placeholder="Mobile_Number">
            </div>
            <div>
                <input type="password" id="pass"  name="password" placeholder="Password" autocomplete="off"
                    title="password">
                <b><span class="error"> </span></b>
            </div>
            <div>
                <input type="password" id="cpass"  name="cpassword" placeholder="confirm_Password" autocomplete="off"
                    title="password">
                <b><span class="error"> </span></b>
            </div>
            <div class="title">
                
            </div>
            <div>
            <pre>Language</pre>
            </div>
            <div class="btn-group " role="group" aria-label="Basic checkbox toggle button group">

                <input type="checkbox" class="" id="btncheck2" name="language[]" autocomplete="off" value="English">
                <label class="boxlabel" for="btncheck2">English</label>

                <input type="checkbox" class="" id="btncheck3" name="language[]" autocomplete="off" value="Hindi">
                <label class="boxlabel" for="btncheck3">Hindi</label>

                <input type="checkbox" class="" id="btncheck4" name="language[]" autocomplete="off" value="Punjabi">
                <label class="boxlabel" for="btncheck4">Punjabi</label>

                <input type="checkbox" class="" id="btncheck5" name="language[]" autocomplete="off" value="Bengali">
                <label class="boxlabel" for="btncheck5">Bengali</label>
                <span class="error"></span>
            </div>
            <pre>Gender</pre>
            <div>
                <input type="radio" class="" id="" name="radio" autocomplete="off" value="Male">
                <label class="boxlabel" for="btncheck2">Male</label>

                <input type="radio" class="" id="r" name="radio" autocomplete="off" value="Female">
                <label class="boxlabel" for="btncheck2">Female</label>
            </div>
            <div>
                <input type="file" id="file" name="file" value="upload">
                <!-- multiple accept=".jpg, .png" -->
            </div>

            <div>
                <button class="btn btn-primary my-2 border-radius-15px" name="submit" type="submit">Submit</button>
            </div>
        </form>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
</body>

</html>