<?php

namespace src\Behavioral\Memento;

class History
{
    private array $prevStates;
    private array $nextStates;

    public function __construct()
    {
        $this->prevStates = [];
        $this->nextStates = [];
    }

    public function saveHistoryState(TextEditorState $state): void
    {
        $this->prevStates[] = $state;
    }

    public function undo(TextEditorState $state)
    {
        $this->nextStates[] = $state;

        if (count($this->prevStates) > 0) {
            return array_pop($this->prevStates);
        }

        return null;
    }

    public function redo(TextEditorState $state)
    {
        $this->prevStates[] = $state;

        if (count($this->nextStates) > 0) {
            return array_pop($this->nextStates);
        }

        return null;
    }

}