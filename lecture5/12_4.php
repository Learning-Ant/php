Vanilla
<inpute type="checkbox" name="ice" value="Vanilla" />
Chocolate
<inpute type="checkbox" name="ice" value="Chocolate" />
Strawberry
<inpute type="checkbox" name="ice" value="Strawberry" />
<!-- 
    if two of more are selected,
    only the last value will be submitted,
    with prior values being ignored.
-->
Vanilla
<inpute type="checkbox" name="ice[]" value="Vanilla" />
Chocolate
<inpute type="checkbox" name="ice[]" value="Chocolate" />
Strawberry
<inpute type="checkbox" name="ice[]" value="Strawberry" />
<!--
    Noew when the form is submitted,
    if any of these items have been checked an array called
    ice will be submitted that contains all the selected values.
-->