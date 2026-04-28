<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolesAndpermissions;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


 Route::get('/roles', [RolesAndpermissions::class, 'showRoleForm'])->name('roles');
    Route::get('/permissions', [RolesAndpermissions::class, 'showPermissionsForm'])->name('permissions');
        Route::get('/roles/create', [RolesAndpermissions::class, 'createRole'])->name('roles.create');
          Route::get('/permissions/create', [RolesAndpermissions::class, 'createPermissions'])->name('permissions.create');

         Route::post('/roles/store', [RolesAndpermissions::class, 'storeRole'])->name('roles.store');

          Route::post('/permissions/store', [RolesAndpermissions::class, 'storepermissions'])->name('permissions.store');

Route::get('/assign-permission-to-user', function(){

    $user = User::find(2);

    // $permissions = Permission::findByName('delete blog');

    // $user->givePermissionTo($permissions);
    // dd("permission granted");

    $permissions = $user->getPermissionNames();
    dd($permissions);   
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

   
});

require __DIR__.'/auth.php';
