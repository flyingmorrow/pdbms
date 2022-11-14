<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    //
    protected $fillable=["Serial No","Group","Institution Type",'Institution Name','Logo','City','State','Rank','Comment','Distance','TAT-i20','Course Availability',
    	'Course Stream','Course Name','Fee','Living Expences','Indirect Cost','Fund to Show','INR','scholarship','SAT','ACT','GRE','GMAT','IELTS','TOEFL','PTE','Duolingo','Without EPT'
        ,'Percentage','Intake','GAP Accepted','WES','Current Deadline','Document Requirement','APP.Fee Waiver Code','Application Fee','i 20','Contact India','Contact International',
        'Interview Support','Web Link'
    ];

    public $timestamps=false;

}
