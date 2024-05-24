<?php

namespace src\Behavioral\Memento;

class TextEditor
{
    private $content;

    /**
     * @param $content
     */
    public function __construct()
    {
        $this->content = "";
    }

    public function save()
    {
        return new TextEditorState($this->content);
    }

    public function restore(TextEditorState|null $textEditorState)
    {
        $this->content = $textEditorState ? $textEditorState->getContent() : '';
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}