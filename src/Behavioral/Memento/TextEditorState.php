<?php

namespace src\Behavioral\Memento;

class TextEditorState
{
    private $content;

    /**
     * @param $content
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }


}