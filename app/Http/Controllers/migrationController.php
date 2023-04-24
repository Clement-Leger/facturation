<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class migrationController extends Controller
{
    //

    public function getMigrations(){
        return view('migrations/migrations');
    }

    public function runMigrations(){
        // return $this->migrateSupplier();
    }

    public function migrateSupplier(){

        if(Schema::hasTable('suppliers')){
            dump('La table suppliers existe déjà.');
        } else {
            Schema::create('suppliers', function (Blueprint $table) {
                $table->id('supplier_id');
                $table->string('name');
                $table->string('email');
                $table->string('company_name');
                $table->string('phone_number');
                $table->string('address');
                $table->string('country');
                $table->integer('post_code');
                $table->timestamps();
            });
    
            dump('La table suppliers a bien été créée');
        }
    }

    function migrateUsers(){
        Schema::create('users', function(Blueprint $table){
            $table->id('user_id');
            $table->string('username',255);
            $table->string('user_password',255);
            $table->timestamps();
        });  
    }


    function migrateArticles(){
        Schema::create('articles', function(Blueprint $table){
            $table->id('article_id');
            $table->string('article_name',255);
            $table->float('article_price');
            $table->float('article_VAT_price');
            $table->float('VAT');
            $table->integer('stock');
            $table->string('supplier', 255);
            $table->timestamps();
        });
    }

    function migrateCategories(){
        Schema::create('categories', function(Blueprint $table){
            $table->id('categorie_id');
            $table->string('categorie_name',255);
            $table->timestamps();
        });
    }

    function migrateArticleCategorie(){
        Schema::create('article_categorie', function(Blueprint $table){
            $table->id('article_categorie_id');
            $table->int('article_id');
            $table->int('categorie_id');
            $table->timestamps();
        });
    }

    function migrateCustomers(){
        Schema::create('customers', function(Blueprint $table){
            $table->id('customer_id');
            $table->string('customer_firstname',255);
            $table->string('customer_lastname',255);
            $table->string('adress',255);
            $table->string('email',255);
            $table->string('phone_number',100);
            $table->float('discount');
            $table->string('city',255);
            $table->string('postal_code',50);
            $table->string('country', 255);
            $table->timestamps();
        });
    }

    // function migrateSupplier(){
    //     Schema::create('supplier', function(Blueprint $table){
    //         $table->id('supplier_id');
    //         $table->string('supplier_firstname',255);
    //         $table->string('supplier_lastname',255);
    //         $table->string('adress',255);
    //         $table->string('email',255);
    //         $table->string('phone_number',100);
    //         $table->float('discount');
    //         $table->string('city',255);
    //         $table->string('postal_code',50);
    //         $table->string('country', 255);
    //         $table->timestamps();
    //     });
    // }

    function migrateDocument(){
        Schema::create('document_tracking', function(Blueprint $table){
            $table->id('document_id');
            $table->string('type',50);
            $table->string('document_number',255);
            $table->timestamps();
        });
    }
}
