<?php

/**
 * Complexity, the text editor is dependent on the state management and history
 * Flexibility, I needed two stacks to deal with the content, so I will need others for any additional attributes
 * Reusability, You will need to duplicate this code if you need it anywhere else.
 */

use src\Behavioral\Memento\Old\TextEditor;

require_once __DIR__.'/../../../../vendor/autoload.php';


$textEditor = new TextEditor();

$textEditor->setContent("Hello, ");
$textEditor->save();

$textEditor->setContent('World!');
$textEditor->save();

$textEditor->setContent('This should not be saved...');

$textEditor->undo(); // World!
$textEditor->undo(); // Hello
$textEditor->redo(); // World!
$textEditor->redo(); // This should not be saved...

print_r($textEditor->getContent());