<?php

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        // Assert that each user in the list has at least an id, name and email attribute.
        $this->get('/users')
             ->seeJsonStructure([
                 '*' => [
                     'id', 'name', 'email'
                 ]
             ]);
    }
}