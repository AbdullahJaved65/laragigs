<?php
namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Senior Stupidity Developer',
                "name" => "Abdullah Javed",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Deleniti eius dolor temporibus recusandae pariatur necessitatibus perferendis 
            voluptate blanditiis quis veniam hic a mollitia vel, sed rerum architecto 
            dignissimos laborum consequatur?"
            ],
            [
                'id' => 2,
                'title' => 'Senior Dumb Developer',
                "name" => "Abdullah Javed",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Deleniti eius dolor temporibus recusandae pariatur necessitatibus perferendis 
            voluptate blanditiis quis veniam hic a mollitia vel, sed rerum architecto 
            dignissimos laborum consequatur?"
            ]
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}

?>