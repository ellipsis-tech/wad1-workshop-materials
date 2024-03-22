<?php
class Post
{
  private $postId;
  private $userId;
  private $content;
  private $createdAt;

  public function __construct($postId, $userId, $content, $createdAt)
  {
    $this->postId = $postId;
    $this->userId = $userId;
    $this->content = $content;
    $this->createdAt = $createdAt;
  }

  public function getPostId()
  {
    return $this->postId;
  }

  public function getUserId()
  {
    return $this->userId;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function getCreatedAt()
  {
    return $this->createdAt;
  }
}
