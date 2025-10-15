<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('mat');
            $table->date('dateEntre');
            $table->string('cat');
            $table->string('fonction');
            $table->string('departement');
            $table->string('raisonLicenciement');
            $table->date('dateLicencLicenciement');
            $table->boolean('syndicat')->default(false);

            $table->text('raison')->nullable();
            $table->json('temoins')->nullable();
            $table->date('dateAudition');
          
            $table->date('date_1er_instance');
            $table->date('dateAppel');
            $table->date('datePaiment');
            $table->string('decision_1er_instance');
            $table->enum('statu_1er_instance', ['gagne', 'perdu'])->nullable();
            $table->enum('statusAppel', ['appelGagne', 'appelPerdu'])->nullable();
            $table->string('decisionAppel');
            $table->string('jug_1er_instance');
            $table->date('date_jug_1er_instance');
            $table->string('jug_appel');
            $table->date('date_jug_appel');
            $table->enum('statusDoss', ['cloture', 'en cours'])->nullable();
            $table->enum('typeContrat', ['CPI', 'CA'])->nullable();
            $table->decimal('mntProvisions', 10, 2);
            $table->decimal('mntEstimationAvocat', 10, 2);
            $table->decimal('mntPaye_tribunal', 10, 2)->nullable();
            $table->decimal('mntDemande', 10, 2);
            $table->string('CI_numero_facture');
            $table->decimal('CI_mntPaye', 10, 2);
            $table->decimal('CI_fraisDelegation', 10, 2);
            $table->decimal('CI_fraisArret', 10, 2);
            $table->decimal('CI_fraisJudiciaire', 10, 2);
            $table->string('CI_numCheque')->nullable();
            $table->decimal('CI_fraisHuissier', 10, 2);
            $table->decimal('CI_fraisExecutionJugement', 10, 2);
            $table->decimal('CI_noteHonoraire', 10, 2);
            $table->string('CA_numero_facture');
            $table->decimal('CA_mnt', 10, 2);
            $table->decimal('CA_fraisDelegation', 10, 2);
            $table->decimal('CA_fraisArret', 10, 2);
            $table->decimal('CA_fraisJudiciaire', 10, 2);
            $table->string('CA_numCheque')->nullable();
            $table->decimal('CA_fraisHuissier', 10, 2);
            $table->decimal('CA_fraisExecutionJugement', 10, 2);
            $table->decimal('CA_noteHonoraire', 10, 2);
            $table->date('mesure1_date');
            $table->decimal('mesure1_mnt', 10, 2);
            $table->string('mesure1_nomHuissier');
            $table->string('mesure1_situationPaiement');
            $table->string('mesure1_type');
            $table->date('mesure2_date')->nullable();
            $table->decimal('mesure2_mnt', 10, 2)->nullable();
            $table->string('mesure2_nomHuissier')->nullable();
            $table->string('mesure2_situationPaiement')->nullable();
            $table->string('mesure2_type')->nullable();
            $table->date('mesure3_date')->nullable();
            $table->decimal('mesure3_mnt', 10, 2)->nullable();
            $table->string('mesure3_nomHuissier')->nullable();
            $table->string('mesure3_situationPaiement')->nullable();
            $table->string('mesure3_type')->nullable();
            $table->date('mesure4_date')->nullable();
            $table->decimal('mesure4_mnt', 10, 2)->nullable();
            $table->string('mesure4_nomHuissier')->nullable();
            $table->string('mesure4_situationPaiement')->nullable();
            $table->string('mesure4_type')->nullable();
            $table->date('mesure5_date')->nullable();
            $table->decimal('mesure5_mnt', 10, 2)->nullable();
            $table->string('mesure5_nomHuissier')->nullable();
            $table->string('mesure5_situationPaiement')->nullable();
            $table->string('mesure5_type')->nullable();
            $table->date('mesure6_date')->nullable();
            $table->decimal('mesure6_mnt', 10, 2)->nullable();
            $table->string('mesure6_nomHuissier')->nullable();
            $table->string('mesure6_situationPaiement')->nullable();
            $table->string('mesure6_type')->nullable();
            $table->date('mesure7_date')->nullable();
            $table->decimal('mesure7_mnt', 10, 2)->nullable();
            $table->string('mesure7_nomHuissier')->nullable();
            $table->string('mesure7_situationPaiement')->nullable();
            $table->string('mesure7_type')->nullable();
            $table->date('mesure8_date')->nullable();
            $table->decimal('mesure8_mnt', 10, 2)->nullable();
            $table->string('mesure8_nomHuissier')->nullable();
            $table->string('mesure8_situationPaiement')->nullable();
            $table->string('mesure8_type')->nullable();
            $table->date('mesure9_date')->nullable();
            $table->decimal('mesure9_mnt', 10, 2)->nullable();
            $table->string('mesure9_nomHuissier')->nullable();
            $table->string('mesure9_situationPaiement')->nullable();
            $table->string('mesure9_type')->nullable();
            $table->date('mesure10_date')->nullable();
            $table->decimal('mesure10_mnt', 10, 2)->nullable();
            $table->string('mesure10_nomHuissier')->nullable();
            $table->string('mesure10_situationPaiement')->nullable();
          
            $table->enum('CA_sPaiement', ['CA_cheque', 'CA_espece'])->nullable();
            $table->enum('CI_sPaiement', ['CI_cheque', 'CI_espece'])->nullable();
            $table->decimal('mnt', 10, 2)->nullable();
            $table->text('description')->nullable();
          
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('files');
    }
}
