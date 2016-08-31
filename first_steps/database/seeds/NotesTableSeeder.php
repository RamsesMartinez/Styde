<?php
use App\Note;
Use App\Category;
use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();

        $notes = factory(Note::class)->times(500)->make();

        foreach ($notes as $note) {
            $category = $categories->random();
            $category->notes()->save($note);
        }
    }
}
