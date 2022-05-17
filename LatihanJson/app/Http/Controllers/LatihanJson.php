<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanJson extends Controller
{
    public function getLatihanSatu() {
        $data = array(
            "name"=> "Rio Rian Rivanka",
            "url"=> "https://www.google.com",
            "rank"=> 1,
            "socialmedia"=> array(
                "facebook"=> "",
                "twitter"=> "",
                "instagram"=> "",
                "youtube"=> "",
                "github"=> ""
            ));
            $jd=json_encode($data);
            dd($jd);
    }

    public function getLatihanDua() {
        $data = array(
            "first_name" => "Rio",
            "last_name" => "Rivanka",
            "location" => "Yogyakarta",
            "online" => true,
            "followers" => 1198202
            );
            $jd=json_encode($data);
            dd($jd);
    }

    public function getLatihanTiga() {
        $data = array(
            "first_name" => "Sammy",
            "last_name" => "Shark",
            "location" => "Ocean",
            "websites" => array(
                [
                  "description" => "work",
                  "URL" => "https://www.digitalocean.com/"
                ],
                [
                  "desciption" => "tutorials",
                  "URL" => "https://www.digitalocean.com/community/tutorials"
                ]
            ),
            "social_media" => array(
                [
                  "description" => "twitter",
                  "link" => "https://twitter.com/digitalocean"
                ],
                [
                  "description" => "facebook",
                  "link" => "https://www.facebook.com/DigitalOceanCloudHosting"
                ],
                [
                  "description" => "github",
                  "link" => "https://github.com/digitalocean"
                ]
            ));
            $jd=json_encode($data);
            dd($jd);
    }
    public function getLatihanEmpat() {
        $data = array(
            "employees"=> array(
                [
                    "firstName"=>"John", "lastName"=>"Doe"
                ],
                [
                    "firstName"=>"Anna", "lastName"=>"Smith"
                ],
                [
                    "firstName"=>"Peter","lastName"=>"Jones"
                ]
            ));
            $jd=json_encode($data);
            dd($jd);
    }
    public function getLatihanLima() {
        $data = array(
            "matapelajaran"=> array(
                "subject" => "Matematika",
                "kelas" => array(
                    [
                        "X" => "Argo",
                        "Jadwal" => "Senin"
                    ],
                    [
                        "XI" => "JJS",
                        "Jadwal" => "Selasa"
                    ],
                    [
                        "XII" => "Halim",
                        "Jadwal" => "Rabu"
                    ]
                )
                ));
            $jd=json_encode($data);
            dd($jd);
    }
}
