<?php

namespace src\Behavioral\Memento\old;

use src\Behavioral\Memento\TextEditorState;

class TextEditor
{
    private $content;
    private array $prevStates;
    private array $nextStates;

    /**
     * @param $content
     */
    public function __construct()
    {
        $this->content = "";
        $this->prevStates = [];
        $this->nextStates = [];
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function save()
    {
        $this->prevStates[] = $this->content;
    }

   public function undo() {
       if (count($this->prevStates) > 0) {
           $this->nextStates[] = $this->content;
           $this->content =  array_pop($this->prevStates);

           return $this->content;
       }

       return null;
   }

    public function redo() {
        if (count($this->nextStates) > 0) {
            $this->prevStates[] = $this->content;
            $this->content =  array_pop($this->nextStates);

            return $this->content;
        }

        return null;
    }
}