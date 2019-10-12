<?php

namespace App\Traits;

trait UseOwn
{
  protected static function bootUseOwn()
  {
    static::creating(function ($model) {
      $model->user_id = auth()->user() ? auth()->user()->id : null;
    });
  }
}
