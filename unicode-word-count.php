<?php

// The function to count words in Unicode  strings
function count_unicode_words( $unicode_string ){
  // First remove all the punctuation marks & digits
  $unicode_string = preg_replace('/[[:punct:][:digit:][:alpha:]]/', '', $unicode_string);
  // Now replace all the whitespaces (tabs, new lines, multiple spaces) by single space
  $unicode_string = preg_replace('/[[:space:]]/', ' ', $unicode_string);
  // The words are now separated by single spaces and can be splitted to an array
  // On the safer side, I have included \n\r\t here is well, only space will also suffice
  $words_array = preg_split( "/[\n\r\t ]+/", $unicode_string, 0, PREG_SPLIT_NO_EMPTY );
  // Now we can get the word count by counting array elments
  return count($words_array);
}

// Using the function
$unicode_string = 'शब्दों को गिनने के लिए एक सैंपल यूनिकोड वाक्य।';
$word_count = count_unicode_words( $unicode_string );

?>
