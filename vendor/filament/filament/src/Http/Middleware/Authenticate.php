<?php

namespace Filament\Http\Middleware;

use Filament\Facades\Filament;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Database\Eloquent\Model;

class Authenticate extends Middleware
{
    /**
     * @param  array<string>  $guards
     */
    // protected function authenticate($request, array $guards): void
    // {
    //     $guard = Filament::auth();

    //     if (! $guard->check()) {
    //         $this->unauthenticated($request, $guards);

    //         return; /** @phpstan-ignore-line */
    //     }

    //     $this->auth->shouldUse(Filament::getAuthGuard());

    //     /** @var Model $user */
    //     $user = $guard->user();

    //     $panel = Filament::getCurrentPanel();

    //     abort_if(
    //         $user instanceof FilamentUser ?
    //             (! $user->canAccessPanel($panel)) :
    //             (config('app.env') !== 'local'),
    //         403,
    //     );
    // }

    // protected function redirectTo($request): ?string
    // {
    //     return Filament::getLoginUrl();
    // }
    protected function authenticate($request, array $guards): void
{
    $guard = Filament::auth();
    
    if (! $guard->check()) {
        $this->unauthenticated($request, $guards);
        return; /** @phpstan-ignore-line */
    }
    
    $this->auth->shouldUse(Filament::getAuthGuard());
    
    /** @var Model $user */
    $user = $guard->user();
    $panel = Filament::getCurrentPanel();
    
    // Vérifie si l'utilisateur a is_admin à true
    if (!$user->is_admin) {
        // Déconnecte l'utilisateur s'il n'est pas admin
        $guard->logout();
        
        // Après déconnexion, rediriger vers la page de login
        redirect()->to(Filament::getLoginUrl())
            ->with('error', 'Vous n\'avez pas les permissions d\'administrateur nécessaires.')
            ->send();
        return; /** @phpstan-ignore-line */
    }
    
    abort_if(
        $user instanceof FilamentUser ?
            (! $user->canAccessPanel($panel)) :
            (config('app.env') !== 'local'),
        403,
    );
}

protected function redirectTo($request): ?string
{
    return Filament::getLoginUrl();
}
}
