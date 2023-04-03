<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebstackTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('webstack_metas', function (Blueprint $table) {
      $table->integer('mid',)->autoIncrement();
      $table->string('name')->nullable()->comment('名称');
      $table->string('slug')->nullable()->comment('别名');
      $table->string('type')->nullable()->comment('类型: tag, category, branch');
      $table->string('ico')->nullable()->comment('徽标');
      $table->string('description')->nullable()->comment('说明');
      $table->string('status')->nullable()->default('draft')->comment("状态: draft, private, public");
      $table->integer('count',)->nullable()->default(0)->comment('计数');
      $table->integer('order',)->nullable()->default(0)->comment('权重');
      $table->integer('parent',)->nullable()->default(0)->comment('父本');
      $table->timestamps();
    });
    Schema::create('webstack_contents', function (Blueprint $table) {
      $table->integer('cid', 11);
      $table->string('title')->nullable()->comment('标题');
      $table->string('slug')->nullable()->comment('别名');
      $table->string('type')->nullable()->comment('类型');
      $table->string('ico')->nullable()->comment('徽标');
      $table->string('status')->nullable()->default('draft')->comment("状态: draft, private, public");
      $table->text('url')->nullable()->comment('地址');
      $table->text('text')->nullable()->comment('内容');
      $table->string('template')->nullable()->comment('模板');
      $table->integer('user',)->nullable()->default(0)->comment('用户ID');
      $table->integer('count',)->nullable()->default(0)->comment('计数');
      $table->integer('order',)->nullable()->default(0)->comment('权重');
      $table->integer('parent',)->nullable()->default(0)->comment('父本');
      $table->timestamps();
    });
    Schema::create('webstack_relationships', function (Blueprint $table) {
      $table->integer('mid', 11)->autoIncrement(false);
      $table->integer('cid', 11)->autoIncrement(false);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('webstack_metas');
    Schema::dropIfExists('webstack_contents');
    Schema::dropIfExists('webstack_relationships');
  }
}
