<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Contato;

class ContatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contato::create([
            'nome'          =>  'Wellington Feitoza',
            'email'         =>  'spaaws@gmail.com',
            'fone'          =>  '88999017940',
            'facebook'      =>  'https://www.facebook.com/wellington.feitoza',
            'twitter'       =>  'http://www.twitter.com/spaaws',
            'instagram'     =>  'https://www.instagram.com/wellington_feitoza',
            'cep'           =>  '63260000',
            'uf'            =>  'CE',
            'localidade'    =>  'Brejo Santo',
            'logradouro'    =>  'Napoleão Araújo Lima, 217',
            'bairro'        =>  'Centro',
            'user_id'       =>  '1',
            'created_at'    =>  '2018-12-29 23:46:05',    
        ]);

        $faker = Faker::create();
        foreach (range(1,50) as $index) 
        {
	        DB::table('contatos')->insert([
	            'nome'          => $faker->name,
                'email'         => $faker->email,
                'user_id'       =>  '1',
                'created_at'    =>  '2018-12-29 23:46:05',
	        ]);
	    }

    }
}
