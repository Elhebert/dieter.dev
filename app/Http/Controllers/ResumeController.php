<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ResumeController extends Controller
{
    public function show(): View
    {
        $experiences = [
            [
                'from' => 'March 2022',
                'to' => 'now',
                'title' => 'Lead Backend Engineer',
                'company' => 'Strapi',
                'url' => 'https://strapi.io',
                'location' => 'Remote',
                'technologies' => ['NodeJS', 'TypeScript', 'Kafka', 'Docker'],
            ],
            [
                'from' => 'August 2021',
                'to' => 'March 2022',
                'title' => 'Senior Backend Engineer',
                'company' => 'Strapi',
                'url' => 'https://strapi.io',
                'location' => 'Remote',
                'technologies' => ['NodeJS', 'TypeScript', 'GraphQL'],
            ],
            [
                'from' => 'May 2019',
                'to' => 'July 2021',
                'title' => 'Backend Software Engineer',
                'company' => 'trivago N.V.',
                'url' => 'https://company.trivago.com',
                'location' => 'Düsseldorf',
                'technologies' => ['PHP', 'NodeJS', 'TypeScript', 'VueJS', 'Docker', 'NATS', 'Jenkins', 'GraphQL'],
            ],
            [
                'from' => 'March 2017',
                'to' => 'April 2019',
                'title' => 'Backend Developer',
                'company' => 'Altavia ACT*',
                'url' => 'https://altavia-act.com',
                'location' => 'Brussels',
                'technologies' => ['PHP', 'Laravel', 'Javascript', 'VueJS', 'Ansible'],
            ],
            [
                'from' => 'August 2016',
                'to' => 'March 2017',
                'title' => 'Web Developer',
                'company' => 'miysis',
                'url' => 'https://miysis.be',
                'location' => 'Juprelle',
                'technologies' => ['PHP', 'Laravel', 'NodeJS', 'VueJS'],
            ],
            [
                'from' => 'August 2015',
                'to' => 'August 2016',
                'title' => 'Cloud Backend Engineer',
                'company' => 'Escaux',
                'url' => 'https://escaux.be',
                'location' => 'Wavre',
                'technologies' => ['PHP 5.3', 'AngularJS', 'NodeJS', 'Ansible'],
            ],
        ];
        $educations = [
            [
                'from' => '2014',
                'to' => '2015',
                'degree' => '3rd year of Ordinary Bachelor (level 7) in Computer Engineering',
                'school' => 'Athlone Institute of Technology',
                'location' => 'Athlone - Ireland',
                'grade' => 'Distinction',
            ],
            [
                'from' => '2011',
                'to' => '2015',
                'degree' => "Bachelor's degree in I.T. - Network and systems",
                'school' => 'Haute école de Namur Liège Luxembourg - IESN',
                'location' => 'Namur - Belgium',
                'grade' => 'Distinction',
            ],
        ];
        $languages = [
            [
                'language' => 'French',
                'level' => 'Mothertongue',
            ],
            [
                'language' => 'English',
                'level' => 'C1',
            ],
            [
                'language' => 'Spanish',
                'level' => 'A2',
            ],
        ];
        $interests = [
            'Role Playing Game',
            'Programming',
            'Board Games',
            '(Online) Privacy',
            'Video Games',
            'Reading',
            'Disney Cartoons',
            'Zero Waste',
        ];

        return view('resume', compact('experiences', 'educations', 'languages', 'interests'));
    }
}
