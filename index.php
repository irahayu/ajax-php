<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX PHP Function Call</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Call PHP Function via AJAX</h1>
    <button id="callFunction">Call PHP Function</button>
    <p id="response"></p>

    <script>
        $(document).ready(function () {
            $('#callFunction').click(function () {
                // Make the AJAX call
                $.ajax({
                    url: 'server.php', // PHP file handling the request
                    type: 'POST',
                    data: { action: 'greet', name: 'John' }, // Data sent to PHP
                    success: function (response) {
                        $('#response').text(response); // Display the response
                    },
                    error: function () {
                        $('#response').text('An error occurred.');
                    }
                });
            });
        });
    </script>
</body>
</html>
