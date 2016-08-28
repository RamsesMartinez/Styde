<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Note;

class NotesTest extends TestCase
{
    use WithoutMiddleware;
    public function test_notes_list() {

        // having
        Note::create(['note' => 'My first note']);
        Note::create(['note' => 'Second note']);

        //when
        $this->visit('notes')
            //then
            ->see('My first note')
            ->see('Second note');
    }

    public function test_create_note()
    {
        // Route::post('notes')
        // When
        $this->post('notes')
            //Then
            ->see('Creating a note');
    }
}