<?php

use Illuminate\Database\Seeder;
use App\Models\Artiste;
use App\Models\Film;
use App\Models\Cinema;

class AllTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // FIRST SOLUTION
        DB::table('artistes')->insert([
            [
                'prenom' => 'Woody',
                'nom' => 'Allen',
                'annee_naissance' => 1938,
            ],[
                'prenom' => 'David',
                'nom' => 'Lynch',
                'annee_naissance' => 1946,
            ],[
                'prenom' => 'Quentin',
                'nom' => 'Tarantino',
                'annee_naissance' => 1957,
            ],[
                'prenom' => 'Peter',
                'nom' => 'Jackson',
                'annee_naissance' => 1962,
            ],[
                'prenom' => 'Luc',
                'nom' => 'Besson',
                'annee_naissance' => 1954,
            ],[
                'prenom' => 'Chirstopher',
                'nom' => 'Nolan',
                'annee_naissance' => 1939,
            ],[
                'prenom' => 'Tim',
                'nom' => 'Burton',
                'annee_naissance' => 1978,
            ],[
                'prenom' => 'Cyril',
                'nom' => 'Bosson',
                'annee_naissance' => 1989,
            ],[
                'prenom' => 'David',
                'nom' => 'Bernard',
                'annee_naissance' => 1862,
            ],[
                'prenom' => 'Robin',
                'nom' => 'Batman',
                'annee_naissance' => 1966,
            ],[
                'prenom' => 'Rouge',
                'nom' => 'Blanc',
                'annee_naissance' => 1987,
            ]
        ]);

        // Second SOLUTION        
        $toInsert = [
            [
                'prenom' => 'Milo',
                'nom' => 'Ventimiglia',
                'annee_naissance' => 1977,
            ],
            [
                'prenom' => 'Susan',
                'nom' => 'Kelechi Watson',
                'annee_naissance' => 1981,
            ]
        ];
        
        foreach($toInsert as $insert){
            Artiste::create($insert);
        }
        
        $toInsert = [
            [
                'titre' => 'Batman',
                'annee' => '2012',
                'artiste_id' => 1,
            ],[
                'titre' => 'Alita',
                'annee' => '2019',
                'artiste_id' => 2,
            ],[
                'titre' => 'La ligne verte',
                'annee' => '2000',
                'artiste_id' => 3,
            ],[
                'titre' => 'The dark knight',
                'annee' => '2008',
                'artiste_id' => 4,
            ],[
                'titre' => 'Le Prestige',
                'annee' => '2003',
                'artiste_id' => 5,
            ],[
                'titre' => 'Invictus',
                'annee' => '1980',
                'artiste_id' => 6,
            ],[
                'titre' => 'Kill Bill',
                'annee' => '2001',
                'artiste_id' => 7,
            ],[
                'titre' => 'Orange Mécanique',
                'annee' => '1967',
                'artiste_id' => 8,
            ],[
                'titre' => 'Reservoir Dogs',
                'annee' => '1998',
                'artiste_id' => 9,
            ],[
                'titre' => 'Star Wars',
                'annee' => '1979',
                'artiste_id' => 10,
            ]
        ];
        
        foreach($toInsert as $insert){
            Film::create($insert);
        }

        $toInsert = [
            [
                'nom_cinema' => 'Grütli',
                'arrondissement' => 1202,
                'adresse' => 'Avenue Philippe Morris 69',
            ],[
                'nom_cinema' => 'Alita',
                'arrondissement' => 2019,
                'adresse' => 'Route des Eaux-Vives 128',
            ],[
                'nom_cinema' => 'Balexert',
                'arrondissement' => 1249,
                'adresse' => 'Avenue de l\'aéroport 50',
            ],[
                'nom_cinema' => 'Arena',
                'arrondissement' => 1212,
                'adresse' => 'Route des jeunes 32',
            ]
        ];
        
        foreach($toInsert as $insert){
            Cinema::create($insert);
        }
        
        /*


        $tableArtistes = new Artist([
            'prenom'=> 'Johny', 
            'nom'=>'Depp', 
            'annee_naissance' => 1963 ]);
        $tableArtistes->save();

        $verbinski = new Artist(['prenom'=> 'Gore', 'nom'=>'Verbinski', 'annee_naissance' => 1964 ]);
        $verbinski->save();

        $pirate = new Movie([
            'title' => 'Pirate des caraïbes',
            'year' => 2003,
            'artist_id' => Artist::where('last_name', 'Verbinski')->first()->id
        ]);
        $pirate->save();
        
        $actor = Artist::where('last_name', 'Depp')->where('first_name', 'Johny')->first();
        $pirate->actors()->attach($actor->id, ['role_name' => "Jack Sparrow"]);


        $cinema = new Cinema([
            'title'=>'Rex',
            'district' => 9,
            'address' => 'Rue des caroubier 22'
        ]);
        $cinema->save();*/

       
    }
}
