<?php
function calculateReadingTime($content, $wordsPerMinute = 200)
{
    $wordCount = str_word_count(strip_tags($content));
    $readingTime = ceil($wordCount / $wordsPerMinute);

    return $readingTime;
}
