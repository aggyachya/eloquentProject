<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Products;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('buku');
            $table->decimal('harga');
            $table->integer('jumlah');
            $table->string('penulis');
            $table->timestamps();
        });

        // Insert initial data using Eloquent
        $products = new Products();
        $products->buku = 'Hujan';
        $products->harga = 99;
        $products->jumlah = 5;
        $products->penulis = 'Tere Liye';
        $products->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
