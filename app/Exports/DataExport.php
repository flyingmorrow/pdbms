<?php

namespace App\Exports;

use App\Data;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataExport implements FromCollection,WithHeadings
{
    public function collection()
    {
        return Data::all()->except(['id']);
    }
    public function headings(): array
    {
        return ["Serial No","Group","Institution Type",'Institution Name','Logo','City','State','Rank','Comment','Distance','TAT-i20','Course Availability',
    	'Course Stream','Course Name','Fee','Living Expences','Indirect Cost','Fund to Show','INR','scholarship','SAT','ACT','GRE','GMAT','IELTS','TOEFL','PTE','Duolingo','Without EPT'
        ,'Percentage','Intake','GAP Accepted','WES','Current Deadline','Document Requirement','APP.Fee Waiver Code','Application Fee','i 20','Contact India','Contact International',
        'Interview Support','Web Link'
    ];
    }
}
