<?php
namespace App\Providers;
// app/CustomJobProvider.php

use Faker\Provider\Base;

class CustomJobProvider extends Base {
    public function jobTitle() {
        $jobTitles = ['Software Engineer', 'Data Analyst', 'Project Manager', 'Graphic Designer', 'Accountant', 'Teacher', 'Nurse'];
        return $this->randomElement($jobTitles);
    }
}
