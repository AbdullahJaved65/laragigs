<?php
namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 'Listing One',
                'title' => 'Senior Stupidity Developer',
                "name" => "Abdullah Javed",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Deleniti eius dolor temporibus recusandae pariatur necessitatibus perferendis 
            voluptate blanditiis quis veniam hic a mollitia vel, sed rerum architecto 
            dignissimos laborum consequatur?"
            ],
            [
                'id' => 'Listing Two',
                'title' => 'Senior Dumb Developer',
                "name" => "Abdullah Javed",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Deleniti eius dolor temporibus recusandae pariatur necessitatibus perferendis 
            voluptate blanditiis quis veniam hic a mollitia vel, sed rerum architecto 
            dignissimos laborum consequatur?"
            ]
        ];
    }
}

?>