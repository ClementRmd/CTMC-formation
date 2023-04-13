<?php

function limitGetContent($text, $numberString)
{
  $text = substr($text, 0, $numberString);
  return $text . '...';
} 