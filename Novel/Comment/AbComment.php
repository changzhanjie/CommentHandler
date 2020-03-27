<?php


namespace Handler\Novel\Comment;

use Dao\AbstractDao;

abstract class AbComment
{
    private $commentDao;
    private $field;

    /**
     * @param string $commentDao
     */
    public function setCommentDao(AbstractDao $commentDao)
    {
        $this->commentDao = $commentDao;
    }

    public function __construct(ICommentField $ICommentField)
    {
        $this->commentDao= "new Db";
        $this->field = $ICommentField;
    }

    abstract public function execute();
}
