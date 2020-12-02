<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PropertyController
 */
class PropertyControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $properties = Property::factory()->count(3)->create();

        $response = $this->get(route('property.index'));

        $response->assertOk();
        $response->assertViewIs('property.index');
        $response->assertViewHas('amenities');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PropertyController::class,
            'store',
            \App\Http\Requests\PropertyStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $title = $this->faker->sentence(4);
        $address = $this->faker->text;
        $suburb = $this->faker->word;
        $author = User::factory()->create();

        $response = $this->post(route('property.store'), [
            'title' => $title,
            'address' => $address,
            'suburb' => $suburb,
            'author_id' => $author->id,
        ]);

        $properties = Property::query()
            ->where('title', $title)
            ->where('address', $address)
            ->where('suburb', $suburb)
            ->where('author_id', $author->id)
            ->get();
        $this->assertCount(1, $properties);
        $property = $properties->first();

        $response->assertRedirect(route('property.index'));
    }
}
