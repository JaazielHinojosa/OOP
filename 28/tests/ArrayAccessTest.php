<?php

class ArrayAccessTest
{
    public function test_a_model_has_array_access()
    {
        $user = new UserTest([
            'name' => 'Jaaziel Hinojosa',
            'email' => 'jaaziel.hinojosa.p@gmail.com',
            'website' => 'wits.mx'
        ]);
    }
}

class UserTest extends \Styde\Model {

}