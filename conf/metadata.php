<?php
/*
 * configuration metadata
 */

$meta['technique']     = array('multichoice','_choices' => array('fontface', 'google', 'kernest', 'cufon', 'typeface', 'sifr'));
$meta['fontFile']      = array('string');
$meta['fontName']      = array('string');
$meta['headings']      = array('multicheckbox','_choices' => array('h1', 'h2', 'h3', 'h4', 'h5'));
$meta['addStyles']     = array('onoff');
$meta['genericFamily'] = array('multichoice','_choices' => array('serif', 'sans-serif', 'monospace', 'cursive', 'fantasy'));
