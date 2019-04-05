<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->comment('digital code');
            $table->string('string');
            $table->boolean('boolean')->default(false);
            $table->date('date');
            $table->dateTime('dateTime');
            $table->enum('enum', ['1p', '2p', '3p']);
            $table->decimal('decimal', 8, 2);
            $table->binary('binary');
            $table->ipAddress('ipAddress');
            $table->macAddress('macAddress');
            $table->integer('integer');
            $table->smallInteger('smallInteger');
            $table->mediumInteger('mediumInteger');
            $table->bigInteger('bigInteger')->unsigned();
            $table->char('char', 100);
            $table->double('double', 8, 2);
            $table->float('float', 8, 2);
            $table->text('text')->always();
            $table->mediumText('mediumText')->collation('utf8_unicode_ci');
            $table->longText('longText')->charset('utf8');
            $table->year('year');
            $table->softDeletes('softDeletes');
            $table->softDeletesTz();
            $table->time('time');
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lista');
    }
}
