<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsAcceptedToRequestRevisors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('request_revisors', function (Blueprint $table) {
            $table->boolean('is_accepted')->nullable();
            $table->foreign('is_accepted')->references('is_revisor')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('request_revisors', function (Blueprint $table) {
            $table->dropForeign(['is_accepted']);
            $table->dropColumn('is_accepted');
        });
    }
}
