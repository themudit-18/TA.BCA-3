<?php
    $letter = "u";
        $vowels = array('a', 'e', 'i', 'o', 'u');
        if (in_array($letter, $vowels)) {
            echo "<p>The letter '$letter' is a vowel.</p>";
        } else {
            echo "<p>The letter '$letter' is a consonant.</p>";
        }
?>