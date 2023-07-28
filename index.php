<!DOCTYPE html>
<html>
<head>
    <meta name="google-site-verification" content="QmuqAQVEJ4Yq7qUCaHYHKyrRqpIY6bqAFzbJEMNQsiQ" /> 
    <title>Simple HTML Document with Head Variable</title>
    <!-- Define a custom variable in the head section -->
    <script>
        var myCustomVariable = "Hello, I'm a variable in the head section!";
    </script>
</head>
<body>
    <h1>Simple HTML Document with Head Variable</h1>
    <p>This is a simple HTML document that contains a variable declared in the head section.</p>

    <!-- Access the variable in the body -->
    <script>
        document.write("<p>" + myCustomVariable + "</p>");
    </script>
</body>
</html>
