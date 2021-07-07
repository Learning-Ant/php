<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>

<body>
    <script type="text/javascript">
        // 14-2
        document.write("<h2>Example 14-2</h2>");
        document.write("Hello World<br>");

        // 14-3
        document.write("<h2>Example 14-3</h2>");
        n = '838102050';
        document.write("n = " + n + ', and is a ' + typeof n + '<br>');

        n = 12345 * 67890;
        document.write("n = " + n + ', and is a ' + typeof n + '<br>');

        n = '838102050';
        document.write("n = " + n + ', and is a ' + typeof n + '<br>');

        // 14-4
        document.write("<h2>Example 14-4</h2>");

        function product(a, b) {
            return a * b;
        }

        // 14-5
        document.write("<h2>Example 14-5</h2>");

        function test() {
            a = 123
            var b = 456
            if (a == 123) var c = 789
        }
        test();
        // 14-6
        document.write("<h2>Example 14-6</h2>");
        if (typeof a != 'undefined') document.write('a = "' + a + '"<br>')
        if (typeof b != 'undefined') document.write('b = "' + b + '"<br>')
        if (typeof c != 'undefined') document.write('c = "' + c + '"<br>')
    </script>
    <noscript>
        Your browser doesn't support or has disabled Javascript
    </noscript>
</body>

</html>