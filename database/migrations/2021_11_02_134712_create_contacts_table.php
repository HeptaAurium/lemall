<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->integer('contact_type');
            $table->integer('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address')->nullable();
            $table->enum('gender', ['male', 'female', 'other']);
            $table->timestamps();
        });

        Schema::create('contact_types', function(Blueprint $table){
                       $table->string('id');
            $table->enum('name', ['vendor', 'client', 'admin']);
            $table->timestamps();
        });

        DB::table('contact_types')->insert([
            ['id'=>'200','name'=>'vendor'],
            ['id'=>'400','name'=>'client'],
            ['id'=>'100','name'=>'admin']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
