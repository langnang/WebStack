<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Dcat\Admin\Traits\ModelTree;

class WebStackMeta extends Model
{
  use HasFactory, ModelTree;

  protected $table = "webstack_metas";

  protected $primaryKey = "mid";

  protected $parentColumn = 'parent';


  public function children()
  {
    return $this->hasMany(static::class, "parent", "mid")->with(['contents'])->with(["children"]);
  }

  public function contents()
  {
    return $this->hasMany(\App\Models\WebStackRelationShip::class, "mid", "mid")
      ->leftJoin('webstack_contents', 'webstack_relationships.cid', '=', 'webstack_contents.cid');
  }

  public function relationships()
  {
    return $this->hasOne(\App\Models\WebStackRelationShip::class, "mid", "mid");
  }
}
