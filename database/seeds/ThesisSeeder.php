<?php

use Illuminate\Database\Seeder;

class ThesisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Thesis')->create([
            'title'         => 'Website For Car Rental System Using Python',
            'rollno'        => 'VI.IT-132',
        ]);

        factory('App\Thesis')->create([
            'title'         => '2D Mini CNC Plotter Using Arduino UNO',
            'rollno'        => 'VI.IT-82',
        ]);

        factory('App\Thesis')->create([
            'title'         => 'Event Ticket Managing System',
            'rollno'        => 'VI.IT-54',
        ]);

        factory('App\Thesis')->create([
            'title'         => 'Student LAB Account System',
            'rollno'        => 'VI.IT-86',
        ]);

        factory('App\Thesis')->create([
            'title'         => 'Online Based Travel and Tour System',
            'rollno'        => 'VI.IT-50',
        ]);

        factory('App\Thesis')->create([
            'title'         => 'Online Electronic City',
            'rollno'        => 'VI.IT-92',
        ]);

        factory('App\Thesis')->create([
            'title'         => 'Online English Free Test',
            'rollno'        => 'VI.IT-111',
        ]);

        factory('App\Thesis')->create([
            'title'         => 'WYTU Online Blood Donation System',
            'rollno'        => 'VI.IT-22',
        ]);

        factory('App\Thesis')->create([
            'title'         => 'Customer Relationship Management Based On    Telecommunication',
            'rollno'        => 'VI.IT-3',
        ]);

        factory('App\Thesis')->create([
            'title'         => 'ARDUINO Based Home Automation System Using IR Remote Control',
            'rollno'        => 'VI.IT-9',
        ]);

        factory('App\Thesis')->create([
            'title'         => 'GSM Based SMS Alert Fire Alarm System Using Microcontroller',
            'rollno'        => 'VI.IT-38',
        ]);

        factory('App\Thesis')->create([
            'title'         => 'Artificial Intelligence Chess',
            'rollno'        => 'VI.IT-100',
        ]);

        factory('App\Thesis')->create([
            'title'         => 'WEB System For General Knowledge Strength Analysis According To AGE Group',
            'rollno'        => 'VI.IT-72',
        ]);

        factory('App\Thesis')->create([
            'title'         => 'Employee Attendance And Payroll System Using FingerPrint Machine',
            'rollno'        => 'VI.IT-114',
        ]);

        factory('App\Thesis')->create([
            'title'         => 'Development of Android Application For English Level Test (Enkoala)',
            'rollno'        => 'VI.IT-28',
        ]);

        factory('App\Thesis')->create([
            'title'         => 'Heart Disease ASE Prediction System Using Machine Learning',
            'rollno'        => 'VI.IT-58',
        ]);



    }
}
