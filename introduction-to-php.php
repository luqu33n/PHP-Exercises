<?php
/*
+---+
| 1 | 
+---+
Print the sentence: Welcome to PHP!;
*/

echo "Welcome to PHP!";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 2 | 
+---+
Print the sentence: PHP stands for "Hypertext Preprocessor"!
*/

echo "PHP stands for \"Hypertext Preprocessor\"!";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 3 | 
+---+
Print the following sentence as a paragraph: PHP stands for "Hypertext Preprocessor"!
*/

echo "<p>" . "PHP stands for \"Hypertext Preprocessor\"!" . "</p>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 4 | 
+---+
Print the following acronyms - every acronym in a new line:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/
   
echo "<p>" . "HTML - Stands for Hypertext Markup Language" . "</p>";
echo "<p>" . "CSS - Stands for Cascading Stylesheet" . "</p>";
echo "<p>" . "JS - Stands for JavaScript" . "</p>";
echo "<p>" . "PHP - Stands for Hypertext Preprocessor" . "</p>";
echo "<p>" . "SQL - Stands for Structural Query Language" . "</p>";
   
// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 5 | 
+---+
Print the following acronyms in unordered list - <ul> ... </ul>:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/

echo "<ul> 
        <li>HTML - Stands for Hypertext Markup Language</li>
        <li>CSS - Stands for Cascading Stylesheet</li>
        <li>JS - Stands for JavaScript</li>
        <li>PHP - Stands for Hypertext Preprocessor</li>
        <li>SQL - Stands for Structural Query Language</li>
    </ul>";

?>