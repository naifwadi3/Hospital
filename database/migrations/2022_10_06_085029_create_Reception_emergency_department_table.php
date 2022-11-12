<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceptionEmergencyDepartmentTable extends Migration {

	public function up()
	{
		Schema::create('Reception_emergency_department', function(Blueprint $table) {
			$table->id();
			$table->string('patient_name');
			$table->string('patient_id');
            $table->string('patient_gender');
            $table->string('patient_phone');
			$table->string('facilities_name');
			$table->string('facilities_phone');
			$table->date('enter_date');
			$table->date('out_date');
			$table->string('condition');
            $table->string('transfer_by');
            // $table->softDeletes();
			$table->timestamps();

		});
	}

	public function down()
	{
		Schema::drop('Reception_emergency_department');
	}
}
