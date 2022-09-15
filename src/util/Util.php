<?php

class Util
{
  private string $context;

  public function __construct(string $context)
  {
    $this->context = $context;
  }

  public function log(string $message)
  {
    echo "[{$this->context}] > {$message}...".PHP_EOL;
  }
}