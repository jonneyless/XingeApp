<?php
/**
 * Author: liasica
 * CreateTime: 16/4/29 14:53
 * Filename: TagTokenPair.php
 * PhpStorm: yii2-XgPushSdk
 */
namespace liasica\XingeApp;
class TagTokenPair
{
  public $tag;
  public $token;

  public function __construct($tag, $token)
  {
    $this->tag   = strval($tag);
    $this->token = strval($token);
  }

  public function __destruct() { }
}