<script>
    // 16-1
    document.write("<h2>Example 16-1</h2>");
    displayItems("Dog", 'Cat', 'Pony', 'Hamster', 'Tortoise');

    function displayItems(v1, v2, v3, v4, v5) {
        document.write(v1 + '<br>');
        document.write(v2 + '<br>');
        document.write(v3 + '<br>');
        document.write(v4 + '<br>');
        document.write(v5 + '<br>');
    }

    // 16-2
    document.write("<h2>Example 16-2</h2>");
    let c = "Car";

    displayItems("Bananas", 32.3, c);

    function displayItems() {
        for (j = 0; j < displayItems.arguments.length; ++j) {
            document.write(displayItems.arguments[j] + "<br>");
        }
    }

    // 16-3
    document.write("<h2>Example 16-3</h2>");
    document.write(fixNames("the", "DALLAS", "CowBoys"));

    function fixNames() {
        var s = "";

        for (j = 0; j < fixNames.arguments.length; ++j) {
            s += fixNames.arguments[j].charAt(0).toUpperCase() + fixNames.arguments[j].substr(1).toLowerCase() + " ";
            return s.substr(0, s.length - 1);
        }
    }

    // 16-4
    document.write("<h2>Example 16-4</h2>");
    words = fixNames2("the", "DALLAS", "CowBoys");

    for (j = 0; j < words.length; ++j)
        document.write(words[j] + "<br>");

    function fixNames2() {
        var s = new Array();

        for (j = 0; j < fixNames2.arguments.length; ++j) {
            s[j] += fixNames2.arguments[j].charAt(0).toUpperCase() + fixNames2.arguments[j].substr(1).toLowerCase() + " ";
            return s;
        }
    }

    // 16-5
    document.write("<h2>Example 16-5</h2>");
    u1 = new User('a1', 'b1', 'c1');
    u1.showUser();

    function User(forename, username, password) {
        this.forename = forename;
        this.username = username;
        this.password = password;

        this.showUser = function() {
            document.write("Forename : " + this.forename + "<br>");
            document.write("Username : " + this.username + "<br>");
            document.write("Password : " + this.password + "<br>");
        }
    }

    // 16-6
    document.write("<h2>Example 16-6</h2>");
    u2 = new User2('a2', 'b2', 'c2');
    u2.showUser2();

    function User2(forename, username, password) {
        this.forename = forename;
        this.username = username;
        this.password = password;
        this.showUser2 = showUser2;
    }

    function showUser2() {
        document.write("Forename : " + this.forename + "<br>");
        document.write("Username : " + this.username + "<br>");
        document.write("Password : " + this.password + "<br>");
    }

    // 16-7
    document.write("<h2>Example 16-7</h2>");
    u3 = new User3('a3', 'b3', 'c3');
    u3.showUser();

    function User3(forename, username, password) {
        this.forename = forename;
        this.username = username;
        this.password = password;

        User3.prototype.showUser = function() {
            document.write("Forename : " + this.forename + "<br>");
            document.write("Username : " + this.username + "<br>");
            document.write("Password : " + this.password + "<br>");
        }
    }

    // 16-8
    document.write("<h2>Example 16-8</h2>");
    numbers = [];
    numbers.push("One");
    numbers.push("Two");
    numbers.push("Three");

    for (j = 0; j < numbers.length; ++j) {
        document.write("Element " + j + " = " + numbers[j] + "<br>");
    }

    // 16-9
    document.write("<h2>Example 16-9</h2>");
    balls = {
        "golf": "Golf balls, 6",
        "tennis": "Tennis balls, 3",
        "soccer": "Soccer ball, 1",
        "ping": "Ping Pong balls, 1 doz"
    }

    for (ball in balls) {
        document.write(ball + " = " + balls[ball] + "<br>")
    }

    // 16-10
    document.write("<h2>Example 16-10</h2>");
    checkerboard = Array(
        Array(' ', 'o', ' ', 'o', ' ', 'o', ' ', 'o'),
        Array('o', ' ', 'o', ' ', 'o', ' ', 'o', ' '),
        Array(' ', 'o', ' ', 'o', ' ', 'o', ' ', 'o'),
        Array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        Array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        Array(' ', 'O', ' ', 'O', ' ', 'O', ' ', 'O'),
        Array('O', ' ', 'O', ' ', 'O', ' ', 'O', ' '),
        Array(' ', 'O', ' ', 'O', ' ', 'O', ' ', 'O'),
    )
    document.write("<pre>");

    for (j = 0; j < 8; ++j) {
        for (k = 0; k < 8; ++k) {
            document.write(checkerboard[j][k] + " ");
        }
        document.write("<br>");
    }

    document.write("</pre>");

    // 16-11
    document.write("<h2>Example 16-11</h2>");
    pets = ["Cat", "Dog", "Rabbit", "Hamster"];
    pets.forEach(output);

    function output(element, index, array) {
        document.write("Element at index " + index + " has the value " + element + "<br>");
    }

    // 16-12
    document.write("<h2>Example 16-12</h2>");
    document.write(pets.join() + "<br>");
    document.write(pets.join(' ') + "<br>");
    document.write(pets.join(' : ') + "<br>");

    // 16-13
    document.write("<h2>Example 16-13</h2>");
    sports = ["Football", "Tennis", "Baseball"];
    document.write("Start = " + sports + "<br>")

    sports.push("Hockey");
    document.write("After Push = " + sports + "<br>")

    removed = sports.pop();
    document.write("After Pop = " + sports + "<br>");
    document.write("Removed = " + removed + "<br>");

    // 16-14
    document.write("<h2>Example 16-14</h2>");
    numbers = [];
    for (j = 1; j < 6; ++j) {
        if (j == 2 || j == 5) {
            document.write("Processing 'todo' #" + j + "<br>");
        } else {
            document.write("Putting off 'todo' #" + j + " until later<br>");
            numbers.push(j);
        }
    }

    document.write("<br>Finished processing the priority tasks.");
    document.write("<br>Commencing stored tasks, most recent first.<br><br>");

    document.write("Now processing 'todo' #" + numbers.pop() + "<br>");
    document.write("Now processing 'todo' #" + numbers.pop() + "<br>");
    document.write("Now processing 'todo' #" + numbers.pop() + "<br>");

    // 16-15
    document.write("<h2>Example 16-15</h2>");
    sports = ["Football", "Tennis", "Baseball", "Hockey"];
    sports.reverse();
    document.write(sports);

    // 16-16
    document.write("<h2>Example 16-16</h2>");
    sports = ["Football", "Tennis", "Baseball", "Hockey"];
    sports.sort();
    document.write(sports);

    sports.sort().reverse();
    document.write(sports);

    numbers = [7, 23, 6, 74];
    numbers.sort(function(a, b) {
        return a - b
    })
    document.write(numbers + "<br>")

    numbers = [7, 23, 6, 74];
    numbers.sort(function(a, b) {
        return b - a
    })
    document.write(numbers + "<br>")
</script>