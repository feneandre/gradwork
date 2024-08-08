<?php

   // database/migrations/xxxx_xx_xx_create_kliens_table.php

   use Illuminate\Database\Migrations\Migration;
   use Illuminate\Database\Schema\Blueprint;
   use Illuminate\Support\Facades\Schema;

   class CreateKliensTable extends Migration
   {
       /**
        * Run the migrations.
        *
        * @return void
        */
       public function up()
       {
           Schema::create('kliens', function (Blueprint $table) {
               $table->id();
               $table->string('name');
               $table->string('email')->unique();
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
           Schema::dropIfExists('kliens');
       }
   }