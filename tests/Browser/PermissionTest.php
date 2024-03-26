<?php

namespace Tests\Browser;

use App\Models\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTruncation;

class PermissionTest extends DuskTestCase
{
    use DatabaseTruncation;

    protected User $user;
    protected array|Collection $permissions;

    public function setUp(): void
    {
        parent::setUp();

        $this->createUser();
        $this->createPermissions(3);

        $this->app->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
    }

    protected function createUser(string $type = 'super-admin')
    {
        return $this->user = User::factory(['type' => $type])->create();
    }

    protected function createPermissions(int $total=1)
    {
        return $this->permissions = Permission::factory($total)->create();
    }


    // Create

    public function test_can_create_permission(): void
    {
        $this->browse(function (Browser $browser) {
            $name = 'test permission';
            $guard = 'test-permission-guard';

            $browser->loginAs($this->user)
                ->visit('/dashboard/permissions')
                ->waitForLocation('/dashboard/permissions')
                ->type('name', $name)
                ->type('guard_name', $guard)
                ->press('Create')
                ->waitForLocation('/dashboard/permissions')
                ->assertSee($name);
        });
    }

    public function test_unable_to_create_permission_without_name(): void
    {
        $this->browse(function (Browser $browser) {
            $name = '';
            $guard = 'test-permission-guard';

            $browser->loginAs($this->user)
                ->visit('/dashboard/permissions')
                ->waitForLocation('/dashboard/permissions')
                ->type('name', $name)
                ->type('guard_name', $guard)
                ->press('Create')
                ->waitForLocation('/dashboard/permissions')
                ->assertSeeIn('form#permission-form', 'The name field is required.')
                ->assertDontSee($name);
        });
    }

    public function test_unable_to_create_permission_without_guard_name(): void
    {
        $this->browse(function (Browser $browser) {
            $name = 'test permission';
            $guard = '';

            $browser->loginAs($this->user)
                ->visit('/dashboard/permissions')
                ->waitForLocation('/dashboard/permissions')
                ->type('name', $name)
                ->type('guard_name', $guard)
                ->press('Create')
                ->waitForLocation('/dashboard/permissions')
                ->assertSeeIn('form#permission-form', 'The guard name field is required.')
                ->assertDontSee($name);
        });
    }


    // Read

    public function test_can_see_all_the_permissions(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs($this->user)
                    ->visit('/dashboard/permissions')
                    ->waitForLocation('/dashboard/permissions')
                    ->assertSeeIn('table', $this->permissions->first()->name)
                    ->assertSeeIn('table', $this->permissions->last()->name)
                    ->assertSee('All permissions');
        });
    }


    // Update

    // edit form
    public function test_can_go_to_the_edit_page_for_permission()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs($this->user)
                ->visit('/dashboard/permissions')
                ->waitForLocation('/dashboard/permissions')
                ->clickLink('Edit')
                ->waitForText('Edit Permission')
                ->assertSeeIn('form#permission-form', 'Update');
        });
    }

    public function test_unable_to_update_permission_without_name()
    {
        $this->browse(function (Browser $browser) {
            $name = '';
            $guard = 'test-permission-guard';

            $browser->loginAs($this->user)
                ->visit('/dashboard/permissions')
                ->waitForLocation('/dashboard/permissions')
                ->clickLink('Edit')
                ->waitForText('Edit Permission')
                ->type('name', $name)
                ->type('guard_name', $guard)
                ->press('Update')
                ->assertSeeIn('form#permission-form', 'The name field is required.')
                ->assertDontSee($name);
        });
    }

    public function test_unable_to_update_permission_without_guard_name()
    {
        $this->browse(function (Browser $browser) {
            $name = 'test name';
            $guard = '';

            $browser->loginAs($this->user)
                ->visit('/dashboard/permissions')
                ->waitForLocation('/dashboard/permissions')
                ->clickLink('Edit')
                ->waitForText('Edit Permission')
                ->type('name', $name)
                ->type('guard_name', $guard)
                ->press('Update')
                ->assertSeeIn('form#permission-form', 'The guard name field is required.')
                ->assertDontSee($name);
        });
    }

    public function test_permission_updated_successfully()
    {
        $this->browse(function (Browser $browser) {
            $new_name = 'test name updated';
            $new_guard = 'test-permission-guard-updated';

            $browser->loginAs($this->user)
                ->visit('/dashboard/permissions')
                ->waitForLocation('/dashboard/permissions')
                ->clickLink('Edit')
                ->waitForText('Edit Permission')
                ->type('name', $new_name)
                ->type('guard_name', $new_guard)
                ->press('Update')
                ->waitForLocation('/dashboard/permissions')
                ->assertSee($new_name)
                ->assertSee($new_guard);
        });
    }


    // Delete

    public function test_permission_deleted_successfully()
    {
        $this->browse(function (Browser $browser) {
            $permission = $this->permissions->first()->name;
            $browser->loginAs($this->user)
                ->visit('/dashboard/permissions')
                ->waitForLocation('/dashboard/permissions')
                ->within('@permission-table-body tr', function (Browser $tr) use ($permission) {
                    $tr
                        ->assertSee($permission)
                        ->click('@delete-item-button')
                        ->assertDialogOpened('Are you sure?')
                        ->acceptDialog();
                })
                ->waitForLocation('/dashboard/permissions')
                ->assertDontSeeIn('table', $permission) ;
        });
    }
}
