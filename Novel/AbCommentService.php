<?php


namespace Handler\Novel;


use Handler\Novel\Comment\AbComment;

abstract class AbCommentService
{
    protected $comment;

    public function __construct(AbComment $comment)
    {
        $this->comment = $comment;
    }

    public function execute(){

        $this->comment->execute();
    }
}