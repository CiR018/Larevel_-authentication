<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //questo metodo crea una tabella nuova chiamata users nel db e attraverso la classe Blueprint crea colonne.
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //auto-increment 
            $table->string('nome');
            $table->string('cognome');
            $table->integer('eta')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); //nullable può essere null
            $table->string('password');
            
            $table->timestamps();
            $table->rememberToken();
        });
    

        //creiamo la tabella del reset tocken password
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        //e la tabella della sessione 
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index(); //si collega all'id sopra di users al singolare
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
        
};
