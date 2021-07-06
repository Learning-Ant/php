<?php
echo <<<_END
<html>
    <head>
        <title>Form Test</title>
    </head>
    <body>
        Your name is: $name<br/>
        <form method="post" actions="formtest2.php">
            What is your name?
            <input type="text" name="name"/>
            <input type="submit"/>
            <pre>
    Loan Amount <input type="text" name="principle"/>
Number of Years <input type="text" name="years" value="15" />
  Interest Rate <input type="text" name="interest" value="3" />
                <input type="submit" />
            </pre>
            Vanilla
            <inpute type="checkbox" name="ice[]" value="Vanilla" />
            Chocolate
            <inpute type="checkbox" name="ice[]" value="Chocolate" />
            Strawberry
            <inpute type="checkbox" name="ice[]" value="Strawberry" />
            Sam-Noon <input type="radio" name="time" value="1" />
            Noon-4pm <input type="radio" name="time" value="2" />
            4pm-8pm <input type="radio" name="time" value="3" />
            Vegetables
            <select name="veg" size="5" multiple="multiple">
                <option value="Peas">Peas</option>
                <option value="Beans">Beans</option>
                <option value="Carrots">Carrots</option>
                <option value="Cabbage">Cabbage</option>
                <option value="Broccoli">Broccoli</option>
            </select>
        </form>
    </body>
</html>
_END;
?>

<!--  -->