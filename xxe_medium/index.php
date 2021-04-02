<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>Search the Web</title>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<body>
    <div id="results"></div>
    <h2>Search the Web:</h2>
    <form name="input" action="/" method="get">
        <input type="text" value="" id="q" name="q" />
        <input type="submit" name="submit" value="Search" onclick="generateXML(event)"/>
        <script>

        function generateXML() {

            event.preventDefault();
            var q = document.getElementsByName("q")[0].value;
            var data = '<query>' + q + '</query>';

            $.ajax({
                type: 'POST',
                url: '/backend.php',
                dataType: 'xml',
                data: data,
                contentType: 'application/xml;',
                success: function (response) {
                    result = response.getElementsByTagName("result")[0].childNodes[0].nodeValue;
                    $("#results").html("<h2>Search Results:</h2><pre>" + result + "</pre>");
                },
                error: function (ex) {
                    alert("An unexpected error occurred!");
                }
              });
        }

        </script>
    </form>
</body>
</html>