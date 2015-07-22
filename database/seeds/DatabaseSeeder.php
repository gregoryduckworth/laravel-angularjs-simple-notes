<?php

use App\Note;
use App\Type;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//Lo hago a lo bruto ya que no tiene demasiada ciencia... tambien se podria crear los seeder de cada uno.

        DB::table('types')->delete(); //Types
        Type::create(array('type' => 'Danger', 'colour' => '#d43f3a'));
        Type::create(array('type' => 'Normal', 'colour' => '#2e6da4'));
        Type::create(array('type' => 'Success', 'colour' => '#4cae4c'));

        DB::table('notes')->delete();
        Note::create(array('title' => 'Titulo de una nota',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat possimus fuga iusto, officia laudantium repudiandae quam velit commodi perferendis voluptatibus expedita nihil aliquam laborum quo, sit dolor eligendi tempora qui.',
            'type_id' => 1));
        Note::create(array('title' => 'Una nota de prueba',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum inventore delectus minima nobis distinctio nihil dignissimos cupiditate. In cum voluptas veritatis adipisci, hic quos, enim aliquam, at vitae iure, reiciendis.',
            'type_id' => 2));
        Note::create(array('title' => 'Una nota exitosa',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eveniet enim, illo eum itaque tenetur libero maxime, fugiat dolore. Vel esse eligendi tenetur voluptas illo mollitia, sunt quisquam sed nobis.',
            'type_id' => 3));
    }
}
