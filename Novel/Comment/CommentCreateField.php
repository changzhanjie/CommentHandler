<?php


namespace Handler\Novel\Comment;


class CommentCreateField implements ICommentField
{
    private $user_id;
    private $object_id;
    private $type;
    private $ip;
    private $content;
    private $comment_from;

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     * @return CommentCreateField
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getObjectId()
    {
        return $this->object_id;
    }

    /**
     * @param mixed $object_id
     * @return CommentCreateField
     */
    public function setObjectId($object_id)
    {
        $this->object_id = $object_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return CommentCreateField
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param mixed $ip
     * @return CommentCreateField
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
        return $this;
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
     * @return CommentCreateField
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommentFrom()
    {
        return $this->comment_from;
    }

    /**
     * @param mixed $comment_from
     * @return CommentCreateField
     */
    public function setCommentFrom($comment_from)
    {
        $this->comment_from = $comment_from;
        return $this;
    }




}