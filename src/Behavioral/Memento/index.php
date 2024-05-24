<?php

use src\Behavioral\Memento\History;
use src\Behavioral\Memento\TextEditor;

require_once __DIR__.'/../../../vendor/autoload.php';


$textEditor = new TextEditor();
$history = new History();

$textEditor->setContent("Hello, ");
$history->saveHistoryState($textEditor->save());

$textEditor->setContent('World');
$history->saveHistoryState($textEditor->save());

$textEditor->setContent('Welcome to my DP repo...');
$history->saveHistoryState($textEditor->save());


$textEditor->setContent('This should not be saved');

$textEditor->restore($history->undo($textEditor->save()));
$textEditor->restore($history->undo($textEditor->save()));
$textEditor->restore($history->redo()); // Welcome to my DP repo...

print_r($textEditor->save());
