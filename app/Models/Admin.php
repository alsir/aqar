<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Model;
use Filament\Panel;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Model implements FilamentUser
{
    public function canAccessPanel(Panel $panel): bool
    {
        // Return true if this user can access the panel
        return true; // or add custom logic here based on user role or permission
    }
}
