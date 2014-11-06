<?php
echo strip_tags('<script>window.location = "http://www.google.com";</script>')."<br>";
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Otro texto</a>';
echo strip_tags($text);
echo "\n";

// Allow <p> and <a>
echo strip_tags($text, '<p><a>');
?>