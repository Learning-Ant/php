<script>
    // 15-1
    document.write("<h2>Example 15-1</h2>");
    document.write("a : " + (42 > 3) + "<br>");
    document.write("b : " + (91 < 4) + "<br>");
    document.write("c : " + (8 == 2) + "<br>");
    document.write("d : " + (4 < 17) + "<br>");
    // 15-2
    document.write("<h2>Example 15-2</h2>");
    myname = "Peter";
    myage = 24;
    document.write("a : " + 42 + "<br>");
    document.write("b : " + "Hi" + "<br>");
    document.write("c : " + true + "<br>");
    document.write("d : " + myname + "<br>");
    document.write("e : " + myage + "<br>");

    // 15-3
    document.write("<h2>Example 15-3</h2>");
    day_number = 127;
    days_to_newyear = 366 - day_number;
    if (days_to_newyear < 30) document.write("It's nearly New Year");
    else document.write("It's a long time to go");

    // 15-4
    document.write("<h2>Example 15-4</h2>");
    month = "July";
    if (month == "October") document.write("It's the Fall");

    // 15-5
    document.write("<h2>Example 15-5</h2>");
    a = 3.1415927;
    b = "3.1415927";
    if (a == b) document.write("1")
    if (a === b) document.write("2")

    // 15-6
    document.write("<h2>Example 15-6</h2>");
    a = 7;
    b = 11;
    if (a > b) document.write("a is greater than b<br>");
    if (a < b) document.write("a is less than b<br>");
    if (a >= b) document.write("a is greater than or equal to b<br>");
    if (a <= b) document.write("a is less than or equal to b<br>");

    // 15-7
    document.write("<h2>Example 15-7</h2>");
    a = 1;
    b = 0;
    document.write((a && b) + "<br>");
    document.write((a || b) + "<br>");
    document.write((!b) + "<br>");

    // 15-8
    document.write("<h2>Example 15-8</h2>");
    finished = 1;
    if (finished == 1 || getnext() == 1) done = 1

    // 15-9
    document.write("<h2>Example 15-9</h2>");
    // gn = getnext();
    if (finished == 1 || gn == 1) done = 1

    // 15-10
    document.write("<h2>Example 15-10</h2>");
    string = "The quick brown fox jumps over the lazy dog";
    with(string) {
        document.write("The string is " + length + " characters<br>");
        document.write("In upper case it's : " + toUpperCase());
    }

    // 15-11
    document.write("<h2>Example 15-11</h2>");
    onerror = errorHandler;
    document.write("Welcome to this website");

    function errorHandler(message, url, line) {
        out = "Sorry, an error wass encountered.\n\n";
        out += "Error : " + message + "\n";
        out += "URL : " + url + "\n";
        out += "Line : " + line + "\n";
        out += "Click OK to continue.\n\n";
        alert(out);
        return true;
    }

    // 15-12
    document.write("<h2>Example 15-12</h2>");
    try {
        request = new XMLHttpRequest();
    } catch (err) {
        // err handling
    } finally {
        alert("The 'try' clause was encountered");
    }

    // 15-13
    document.write("<h2>Example 15-13</h2>");
    page = 'Home';
    if (page == "Home") document.write("You selected Home");
    else if (page == "About") document.write("You selected About");
    else if (page == "News") document.write("You selected News");
    else if (page == "Login") document.write("You selected Login");
    else if (page == "Links") document.write("You selected Links");

    // 15-14&15
    document.write("<h2>Example 15-14&15</h2>");
    page = '';
    switch (page) {
        case "Home":
            document.write("You selected Home");
            break;
        case "About":
            document.write("You selected About");
            break;
        case "News":
            document.write("You selected News");
            break;
        case "Login":
            document.write("You selected Login");
            break;
        case "Links":
            document.write("You selected Links");
            break;
        default:
            document.write("Unrecognized selection");
            break;
    }

    // 15-16
    document.write("<h2>Example 15-16</h2>");
    document.write(
        a <= 5 ?
        "a is less than or equal to 5" :
        "a is greater than 5"
    )

    // 15-17
    document.write("<h2>Example 15-17</h2>");
    counter = 0;
    while (counter < 5) {
        document.write("Counter: " + counter + "<br>");
        ++counter;
    }

    // 15-18
    document.write("<h2>Example 15-18</h2>");
    count = 1;
    do {
        document.write(count + " times 7 is " + count * 7 + "<br>");
    }
    while (++count <= 7)

    // 15-19
    document.write("<h2>Example 15-19</h2>");
    for (count = 1; count <= 7; ++count) {
        document.write(count + "times 7 is " + count * 7 + "<br>");
    }

    // 15-20
    document.write("<h2>Example 15-20</h2>");
    haystack = new Array();
    haystack[17] = "Needle";

    for (j = 0; j < 20; ++j) {
        if (haystack[j] == "Needle") {
            document.write("<br>-Found at location " + j);
            break;
        } else document.write(j + ", ");
    }

    // 15-21
    document.write("<h2>Example 15-21</h2>");
    haystack = new Array();
    haystack[4] = "Needle";
    haystack[11] = "Needle";
    haystack[17] = "Needle";

    for (j = 0; j < 20; ++j) {
        if (haystack[j] == "Needle") {
            document.write("<br>-Found at location " + j + "<br>");
            continue;
        }

        document.write(j + ", ");
    }
</script>