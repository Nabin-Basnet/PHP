<?php
// A string is a sequence of characters, like "Hello world!".
// Strings in PHP are surrounded by either double quotation marks, or single quotation marks.
// You can use double or single quotes, but you should be aware of the differences between the two.

// Double quoted strings perform action on special characters.
$name="nabin";
echo "my name is $name \n";

// Single quoted string literals returns the string as it is:
echo 'my name is $name ';
echo "\n length of the string is: ";
echo strlen( $name ) ; //The PHP strlen() function returns the length of a string.
echo "\n the number of words is:";
echo str_word_count("\n Hello world!"); //The PHP str_word_count() function counts the number of words in a string.  
echo "\n hello is in index :";
echo strpos("Hello world!", "world"); //The PHP strpos() function searches for a specific text within a string.

?>