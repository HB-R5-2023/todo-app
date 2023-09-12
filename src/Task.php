<?php

namespace App;

class Task
{
  public function __construct(
    private string $title,
    private bool $done = false
  ) {
  }

  public function getTitle(): string
  {
    return $this->title;
  }
  public function setTitle(string $title): self
  {
    $this->title = $title;
    return $this;
  }

  public function getDone(): bool
  {
    return $this->done;
  }
  public function setDone(bool $done): self
  {
    $this->done = $done;
    return $this;
  }
}
