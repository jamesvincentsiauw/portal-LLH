<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->string('id')->unique()->primary();
            $table->string('title');
            $table->string('type')->comment('SK/peraturan/kerjasama');
            $table->string('draft_files')->comment('draft pendukung dari pengajuan');
            $table->string('supporting_files')->comment('dokumen pendukung lain, ZIP file');
            $table->string('submitterName');
            $table->string('submitterITBmail');
            $table->string('submitterWorkUnit');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submissions');
    }
}
