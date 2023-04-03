<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// $branches = json_decode(file_get_contents(__DIR__ . '/../storage/app/public/sites.json'), true);
$branches = DB::table("webstack_metas")
  ->where([['type', 'branch'], ['parent', 0], ['status', 'public']])
  ->get();
// //$branches = [];
// Route::get('/icons', function () use ($branches) {
//   $contents = json_decode(file_get_contents(__DIR__ . '/../storage/app/public/icons.json'), true);
//   $contents = array_filter($contents, function ($item) {
//     return !isset($item['visible']) || $item['visible'] !== false;
//   });
//   return view('icons', ['branches' => $branches, 'contents' => $contents,]);
// });
// Route::view('/icons', 'icons', ['branches' => $branches]);
Route::view('/about', 'about', ['branches' => $branches]);
Route::view('/404', '404', ['branches' => $branches]);

Route::get('/{slug?}', function ($slug = 'default') use ($branches) {
  for ($i = 0; $i < count($branches); $i++) {
    if ($branches[$i]->slug == $slug) $branch = $branches[$i];
  }
  if (empty($branch)) return redirect('/404');
  $contents = \App\Models\WebStackMeta::with(['children'])
    ->with(['contents'])
    ->where([['type', 'category'], ['parent', 1], ['status', 'public']])
    ->get();
  // return $contents;
  return view('index', [
    "branches" => $branches,
    "contents" => $contents,
  ]);
});
