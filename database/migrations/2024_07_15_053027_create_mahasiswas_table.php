<?php

      // database/migrations/xxxx_xx_xx_create_mahasiswas_table.php

      use Illuminate\Database\Migrations\Migration;
      use Illuminate\Database\Schema\Blueprint;
      use Illuminate\Support\Facades\Schema;
   
      class CreateMahasiswasTable extends Migration
      {
          /**
           * Run the migrations.
           *
           * @return void
           */
          public function up()
          {
              Schema::create('mahasiswas', function (Blueprint $table) {
                  $table->id();
                  $table->string('name');
                  $table->string('email')->unique();
                  $table->string('asal_kampus');
                  $table->string('nomer_hp');
                  $table->string('password');
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
              Schema::dropIfExists('mahasiswas');
          }
      }