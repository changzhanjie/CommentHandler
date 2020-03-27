<?php


namespace Handler\Novel;


use Handler\Novel\Comment\CommentCreate;
use Handler\Novel\Comment\CommentCreateField;
use Handler\Novel\Comment\ReplyCreate;
use Handler\Novel\Comment\ReplyCreateField;

class TestRunController
{

    public function createNovelComment(){

        $commentCreateField=new CommentCreateField();
        $commentCreateField->setUserId(6142837)
                            ->setContent('测试评论')
                            ->setObjectId(3)
                            ->setType('novel')
                            ->setIp('ip')
                            ->setCommentFrom(5);
        $comment = new CommentCreate($commentCreateField);
        $service = new CommentNovelCreate($comment);
        $service->execute();

    }
    public function createNovelReport(){

        $reportCreateField=new ReplyCreateField();
        $reportCreateField->setUserId(6142837)
            ->setContent('测试评论')
            ->setObjectId(3)
            ->setType('novel')
            ->setIp('ip')
            ->setParentId(1222)
            ->setCommentFrom(5);
        $comment = new ReplyCreate($reportCreateField);
        $service = new CommentNovelCreate($comment);
        $service->execute();

    }
    public function createParaComment(){

        $commentCreateField=new CommentCreateField();
        $commentCreateField->setUserId(6142837)
            ->setContent('测试评论')
            ->setObjectId(111)
            ->setType('para')
            ->setIp('ip')
            ->setCommentFrom(5);
        $comment = new CommentCreate($commentCreateField);
        $service = new CommentParaCreate($comment);
        $service->execute();

    }
}