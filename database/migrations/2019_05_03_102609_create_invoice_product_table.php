<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_product', function (Blueprint $table) {
            $table->integer('invoice_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->string('quantity');
            $table->string('pup');
            $table->string('percentage');
            $table->string('netPrice');

           

           // $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');
          //  $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->primary(['invoice_id','product_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_product');
    }
}
