<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ajax POST request with jQuery and PHP</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div id="main">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Ajax POST request with jQuery and PHP</h1>
        </div>
      </div>
    </div>
    </div>

    <div id="table-data">
    <div class="container">
      <div class="row from">
        <div class="col-12 ">
        <form id="submit_form">
        <div class="mb-3">
          <label class="form-label text">First Name</label>
          <input type="text" name="fname" class="form-control" id="fname">
        </div>
        <div class="mb-3">
          <label class="form-label text">Last Name</label>
          <input type="text" name="lname" class="form-control" id="lname">
        </div>
        <input type="button" id="submit" value="Save" />
      </form>
      <div id="response"></div>
        </div>
      </div>
    </div>
    </div>
    <div class="footer">
      <h2>Developed By Sourav Gupta</h2>
    </div>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script>
    $(document).ready(function() {
      $("#submit").click(function() {
        var fname = $('#fname').val();
        var lname = $('#lname').val();

        if (fname == "" || lname == "") {
          $("#response").fadeIn();
          $("#response").html("All Fields are required.");
        } else {
          $.post(
            "save-form.php",
            $("#submit_form").serialize(),
            function(data) {
              if (data == 1) {
                $("#submit_form").trigger("reset");
                $("#response").fadeIn();
                $("#response").html("Data Successfully Saved.");
                setTimeout(function() {
                  $("#response").fadeOut();
                }, 5000);
              }
            }
          );

        }
      });

    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>