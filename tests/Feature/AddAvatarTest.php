<?php
/**
 * Created by PhpStorm.
 * User: Paulken
 * Date: 7/13/2018
 * Time: 6:30 PM
 */

namespace Tests\Feature;


use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AddAvatarTest extends TestCase
{
    use DatabaseMigrations;

    /** @test*/
    public function only_employee_can_add_avatar() {

    }
}