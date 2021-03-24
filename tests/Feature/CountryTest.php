<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use App\Domain\Country;

class CountryTest extends TestCase
{

    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_read_all_countries(){

        //$country=Country::factory(1)->create();
        $country=new Country;
        $country->code="123";
        $country->name="India";

        $output=$country->save();

        //dd($output);

        /*$country=$country->create([
            'code'=>'456',
            'name'=>'India'
        ]);*/

        //$response=$this->get('/country/index');
        //$response->assertSee($country->name);
        $this->assertTrue($output);
    }

    public function test_get_all_countries(){
        $countries=Country::all();

        $this->assertNotNull($countries);
    }

    public function test_update_countries(){
        $country=new Country;
        $country=$country->create([
            'code'=>'456',
            'name'=>'India'
        ]);

        $country->code="123";
        $output=$country->save(); 


        $this->assertTrue($output);        
    }

    public function test_delete_countries(){
        $country=new Country;
        $country=$country->create([
            'code'=>'456',
            'name'=>'India'
        ]);

        $output=$country->delete();       


        $this->assertTrue($output);        
    }
}
