<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebStackContent extends Model
{
  use HasFactory;

  protected $table = "webstack_contents";

  public function children()
  {
    return $this->hasMany(static::class, "parent", "mid")->with(["children"]);
  }
}
