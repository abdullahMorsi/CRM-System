<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role_id')->default(1);
            $table->text('avatar')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

//        Role::insert(['name' => 'Admin', 'email' => 'admin@app.com', "password" => Hash::make('123456'),
//             "role_id" => Role::where('name', 'super_admin')->first()->id]);

//        $user = new User;
//        $user->name = 'Admin';
//        $user->email = 'admin@app.com';
//        $user->password = Hash::make('123456');
//        $user->role_id = Role::where('name', 'super_admin')->first()->id;
//        $user->save();
    }


    public function down()
    {
        Schema::dropIfExists('users');
    }
}
