<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id'       => '1',
                'title'         => 'Symfony Live Madrid 2014',
                'excerpt'       => 'SensioLabs Madrid is proud to announce the third edition of the exceptionally successful SymfonyLive Madrid.',
                'content'       => 'The two day conference will take place on Thursday 25th - Friday 26th September 2014, in the heart of Madrid, and will bring together the sharpest minds in open source enterprise software development. Day one is a workshop day consisting of hands-on training courses from industry leading Symfony experts. Day two is the main conference day when we\'re pulling out all the stops. Talks on Symfony, Drupal, BDD and wider PHP topics will make this an event to remember.',
                'date_start'    => '2014-09-29 09:00:00',
                'date_end'      => '2014-09-31 18:00:00',
                'link_thumbnail'=> 'laravel_amsterdam2014.jpg',
                'url_site'      => 'http://berlin2014.live.symfony.com/'
            ],
            [
                'user_id'       => '1',
                'title'         => 'Symfony Live London 2014',
                'excerpt'       => 'SensioLabs UK is proud to announce the third edition of the exceptionally successful SymfonyLive London.',
                'content'       => 'The two day conference will take place on Thursday 25th - Friday 26th September 2014, in the heart of London, and will bring together the sharpest minds in open source enterprise software development. Day one is a workshop day consisting of hands-on training courses from industry leading Symfony experts. Day two is the main conference day when we\'re pulling out all the stops. Talks on Symfony, Drupal, BDD and wider PHP topics will make this an event to remember.',
                'date_start'    => '2014-11-29 09:00:00',
                'date_end'      => '2014-11-31 18:00:00',
                'link_thumbnail'=> 'rasmusLerdorf.jpg',
                'url_site'      => 'http://london2014.live.symfony.com/',
            ],
            [
                'user_id'       => '1',
                'title'         => 'Laracom Amsterdam 2014',
                'excerpt'       => 'The creator of Laravel gives a talk about building artisan commands, the IoC container, queues, testing, and some upcoming Laravel features.',
                'content'       => 'The Community contributor Tony talks about his experiences writing large applications with Laravel 4 and his current architectural approaches.The creator of Laravel gives a talk about building artisan commands, the IoC container, queues, testing, and some upcoming Laravel features.',
                'date_start'    => '2014-10-29 09:00:00',
                'date_end'      => '2014-10-31 18:00:00',
                'link_thumbnail'=> 'symfony_london.png',
                'url_site'      => 'http://laracon.eu/2014/'
            ],
            [
                'user_id'       => '1',
                'title'         => 'PHP Tour 2014',
                'excerpt'       => 'Cette année au PHP Tour Lyon 2014, l\'AFUP et JoliCode, sponsor Argent, exaucent leur souhait ! Un apéro communautaire se tiendra le lundi 23 juin, uniquement réservé aux visiteurs de l\'event, juste après la fin de la première journée de conférences.',
                'content'       => 'C\'est au Red House, pub situé à quelques pas de la Manufacture des Tabacs, que nous organiserons cet apéro PHP exceptionnel. Repas, boissons, ambiance conviviale, quelques surprises, on se charge de tout ! Et l\'AFUP est soutenue dans l\'organisation de cette soirée par JoliCode, agence experte dans la réalisation de projets Web et mobiles. En effet, JoliCode s\'implique dans de nombreuses conférences à travers le monde, et a depuis toujours une véritable affinité avec les événements AFUP. Sans compter que les développeurs de JoliCode sont convaincus que, ce qu\'il y a de mieux dans une conférence, ce sont les gens que l\'on y croise et les discussions qui s\'en suivent... C\'est pourquoi, en plus de devenir sponsor Argent du PHP Tour Lyon 2014, JoliCode participe à l\'organisation de cet apéro communautaire gratuit pour tous les visiteurs de l\'event ! ',
                'date_start'    => '2014-08-29 09:00:00',
                'date_end'      => '2014-08-31 18:00:00',
                'link_thumbnail'=> 'symfony_madrid.png',
                'url_site'      => 'http://afup.org/pages/phptourlyon2014/'
            ],
    ]);
    }
}
