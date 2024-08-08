<?php

use App\Models\setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Kreasi Kreatif',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_location',
            'label' => 'Alamat Kantor',
            'value' => '10, Jl.Kemang Timur VI No.5, Rt.10/Rw.4, Bangka, Kec.Mampang Prpt, Kota Jakarta Selatan, Daerah khusus Ibukota Jakarta',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_Email',
            'label' => 'Email',
            'value' => 'Info@Kreasi.co.id',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
