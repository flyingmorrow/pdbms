<?php

namespace App\Imports;

use App\Data;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Collection;

class DataImport implements ToCollection,WithStartRow
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new Data([
            'Serial No' => $row[0],
        ]);
    }
    public function collection(Collection $rows)
    {
        foreach($rows as $row)
        {
            Data::updateOrCreate(
                ['Serial No'=>$row[0]],
                ["Group"=>$row[1],
                "Institution Type"=>$row[2],
                'Institution Name'=>$row[3],
                'Logo'=>$row[4],
                'City'=>$row[5],
                'State'=>$row[6],
                'Rank'=>$row[7],
                'Comment'=>$row[8],
                'Distance'=>$row[9],
                'TAT-i20'=>$row[10],
                'Course Availability'=>$row[11],
                'Course Stream'=>$row[12],
                'Course Name'=>$row[13],
                'Fee'=>$row[14],
                'Living Expences'=>$row[15],
                'Indirect Cost'=>$row[16],
                'Fund to Show'=>$row[17],
                'INR'=>$row[18],
                'scholarship'=>$row[19],
                'SAT'=>$row[20],
                'ACT'=>$row[21],
                'GRE'=>$row[22],
                'GMAT'=>$row[23],
                'IELTS'=>$row[24],
                'TOEFL'=>$row[25],
                'PTE'=>$row[26],
                'Duolingo'=>$row[27],
                'Without EPT'=>$row[28]
                ,'Percentage'=>$row[29],
                'Intake'=>$row[30],
                'GAP Accepted'=>$row[31],
                'WES'=>$row[32],
                'Current Deadline'=>$row[33],
                'Document Requirement'=>$row[34],
                'APP.Fee Waiver Code'=>$row[35],
                'Application Fee'=>$row[36],
                'i 20'=>$row[37],
                'Contact India'=>$row[38],
                'Contact International'=>$row[39],
                'Interview Support'=>$row[40],
                'Web Link'=>$row[41]
                ]
            );
        }
    }
    public function startRow(): int
    {
        return 2;
    }
    // public function uniqueBy()
    // {
    //     return 'Serial No';
    // }
}
