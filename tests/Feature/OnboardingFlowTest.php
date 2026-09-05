<?php

namespace Tests\Feature;

use Tests\TestCase;

class OnboardingFlowTest extends TestCase
{
    public function test_root_page_starts_with_splash_screen(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('images/logo.png')
            ->assertSee('onboarding');
    }

    public function test_onboarding_page_links_to_login(): void
    {
        $response = $this->get(route('onboarding'));

        $response->assertOk()
            ->assertSee(route('login'), false);
    }
}
