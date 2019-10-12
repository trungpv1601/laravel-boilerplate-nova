<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait UseUuid
{
  protected static function bootUseUuid()
  {
    static::creating(function ($model) {
      if (!$model->getKey()) {
        $model->{$model->getKeyName()} = (string) Str::uuid();
      }
    });
  }

  /**
   * getIncrementing function
   *
   * @return void
   */
  public function getIncrementing()
  {
    return false;
  }

  /**
   * getKeyType function
   *
   * @return void
   */
  public function getKeyType()
  {
    return 'string';
  }
}
