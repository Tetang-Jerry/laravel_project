<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Lien avec l'utilisateur
            $table->decimal('amount', 15, 2); // Montant de la transaction
            $table->string('type'); // Type de transaction (ex: debit, credit)
            $table->string('category')->nullable(); // Catégorie de la transaction (ex: food, rent)
            $table->text('description')->nullable(); // Description de la transaction
            $table->timestamp('transaction_date'); // Date de la transaction
            $table->timestamps();

            // Clés étrangères et index
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
