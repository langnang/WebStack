<?php

namespace App\Admin\Controllers;

use App\Admin\Metrics\Examples;
use App\Http\Controllers\Controller;
use Dcat\Admin\Http\Controllers\Dashboard;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Grid;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Tree;
use Illuminate\Support\Str;
use Dcat\Admin\Admin;

class WebStackController extends Controller
{
  public function index(Content $content)
  {
    $model = config('admin.database.permissions_model');

    return $content
      ->header('WebStack')
      ->description('列表')
      ->body($this->grid());
  }

  protected function grid()
  {
    return Grid::make(\App\Models\WebStackMeta::with(['contents']), function (Grid $grid) {

      $grid->toolsWithOutline(false);

      $grid->mid("编号")->bold()->sortable();
      $grid->name->tree(true); // 开启树状表格功能
      $grid->slug();
      $grid->type();
      $grid->status();

      $grid->contents("站点数")->display(function ($contents) {
        $count = count($contents);
        return "<span class='label label-warning'>{$count}</span>";
      });

      $grid->order();

      $grid->created_at;
      $grid->updated_at->sortable();

      $grid->filter(function (Grid\Filter $filter) {
        $filter->like('slug');
        $filter->like('name');
      });
    });
  }
}
