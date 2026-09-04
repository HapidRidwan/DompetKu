<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Socialite\Facades\Socialite;
use Mockery;
use Tests\TestCase;

class GoogleAuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_google_login_redirects_to_google_provider(): void
    {
        $response = $this->get('/auth/google/redirect');

        $response->assertStatus(302)
            ->assertRedirect();
    }

    public function test_google_callback_creates_new_user_and_authenticates(): void
    {
        $provider = Mockery::mock();
        $provider->shouldReceive('stateless')->once()->andReturnSelf();
        $provider->shouldReceive('user')->once()->andReturn((object) [
            'id' => 'google-user-123',
            'name' => 'Google User',
            'email' => 'google.user@example.com',
            'avatar' => 'https://example.com/avatar.jpg',
        ]);

        Socialite::shouldReceive('driver')->with('google')->once()->andReturn($provider);

        $response = $this->get('/auth/google/callback?code=google-auth-code');

        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', [
            'email' => 'google.user@example.com',
            'google_id' => 'google-user-123',
        ]);
        $response->assertRedirect(route('dashboard', absolute: false));
    }

    public function test_existing_user_can_login_with_google_using_same_email(): void
    {
        $user = User::factory()->create([
            'email' => 'existing.user@example.com',
            'password' => bcrypt('password'),
        ]);

        $provider = Mockery::mock();
        $provider->shouldReceive('stateless')->once()->andReturnSelf();
        $provider->shouldReceive('user')->once()->andReturn((object) [
            'id' => 'google-existing-456',
            'name' => 'Existing User',
            'email' => 'existing.user@example.com',
            'avatar' => 'https://example.com/avatar-2.jpg',
        ]);

        Socialite::shouldReceive('driver')->with('google')->once()->andReturn($provider);

        $response = $this->get('/auth/google/callback?code=google-auth-code');

        $this->assertAuthenticatedAs($user);
        $this->assertDatabaseHas('users', [
            'email' => 'existing.user@example.com',
            'google_id' => 'google-existing-456',
        ]);
        $response->assertRedirect(route('dashboard', absolute: false));
    }
}
