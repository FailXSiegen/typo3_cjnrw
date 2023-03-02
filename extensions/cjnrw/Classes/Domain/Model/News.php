<?php

namespace GeorgRinger\Eventnews\Domain\Model;

class News extends \GeorgRinger\News\Domain\Model\News
{

   protected bool $hideMore;

   public function getHideMore(): bool {
      return $this->hideMore;
   }

   public function setHideMore(bool $hideMore): void {
      $this->hideMore = $hideMore;
   }
}
