<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $homeVars = [
            "title" => "Gabriel Teiga",
            "role"  => "Back-end Developer",
            "about" => "I am an Administrator and Software Developer who adds value to ideas and products. Experience in developing webpages, APIs and SAAS.",
            "stack" => [
                0 => [
                    "language"  => "PHP",
                    "image"     => "stack/php.png"
                ],
                1 => [
                    "language"  => "GO",
                    "image"     => "stack/go.png",
                ]
            ],
            "projects" => [
                0   => [
                    "title"             => "User Management System",
                    "shortDescription"  => "Creating users, authentication and management.",
                    "longDescription"   => "Creating users, authentication with JWT Token and management their information. This project is using good practices as TDD, Clean Architecture and SOLID to make the system open for extension and closed for modification.",
                    "tags"              => ["API", "PHP", "Laravel", "TDD", "SOLID"],
                    "repository"        => "https://github.com/gabrielteiga/user-jwt-management",
                    "image"             => "img/user-jwt-management.png"
                ],
                1   => [
                    "title"             => "User Management System2",
                    "shortDescription"  => "Creating users, authentication and management.",
                    "longDescription"   => "Creating users, authentication with JWT Token and management their information. This project is using good practices as TDD, Clean Architecture and SOLID to make the system open for extension and closed for modification.",
                    "tags"              => ["API", "PHP", "Laravel", "TDD", "SOLID"],
                    "repository"        => "https://github.com/gabrielteiga/user-jwt-management",
                    "image"             => "img/user-jwt-management.png"
                ]
            ]
        ];

        return view('index')
            ->with('title', $homeVars['title'])
            ->with('role', $homeVars['role'])
            ->with('about', $homeVars['about'])
            ->with('stack', $homeVars['stack'])
            ->with('projects', $homeVars['projects']);
    }
}
