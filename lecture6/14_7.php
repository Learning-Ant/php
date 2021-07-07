<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link Test</title>
</head>

<body>
    <a id="mylink" href="http://mysite.com">Click me</a><br>
    <script>
        // 14-7
        document.write("<h2>Example 14-7</h2>");
        // url = document.links.mylink.href;
        // document.write('The URL is ' + url);
        document.write('The URL is ' + $('mylink').href);

        // 14-8
        document.write("<h2>Example 14-8</h2>");

        function $(id) {
            return document.getElementById(id);
        }
    </script>
</body>

</html>