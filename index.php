<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Tracker</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="header">
            <h3>Ip Tracker</h3>
            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                 </svg>
                 <div id="info">
                    This is an ip tracker
                 </div>
            </span>
        </div>
        <div class="body">
            <div class="search">
                <input type="text" id="searchbar" value="197.210.227.86" placeholder="Type in the IP Address and click enter">
            </div>
            <div id="searchcontent">

            </div>
        </div>
       
    </div>
</body>
<script src="assets/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    $("#searchbar").keypress(function(event) {
      if (event.which === 13) { // Enter key pressed
        event.preventDefault(); // Prevent form submission

        var searchData = $(this).val();

        $.ajax({
          url: "tracker.php",
          type: "POST",
          data: {searchData: searchData},
          success: function(response) {
            $("#searchcontent").html(response);
          },
          error: function() {
            alert("An error occurred while processing the request.");
          }
        });
      }
    });
  });
</script>
</html>