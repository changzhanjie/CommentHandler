<?php


namespace Handler\Novel;



use Handler\Dao\NovelCommentDao;
use Handler\Novel\Comment\AbComment;

class CommentNovelCreate extends AbCommentService
{

    public function __construct(AbComment $abComment)
    {
        parent::__construct($abComment);
    }

    public function execute()
    {
        $this->comment->setCommentDao(new NovelCommentDao());
        parent::execute(); // TODO: Change the autogenerated stub
    }


}