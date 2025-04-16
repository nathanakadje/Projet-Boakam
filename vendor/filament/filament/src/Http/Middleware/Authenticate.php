<?php

namespace Filament\Http\Middleware;

use Filament\Facades\Filament;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;


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
//     protected function authenticate($request, array $guards): void
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
    
//     // Vérifie si l'utilisateur a is_admin à true
//     if (!$user->is_admin) {
//         // Déconnecte l'utilisateur s'il n'est pas admin
//         $guard->logout();
        
//         // Après déconnexion, rediriger vers la page de login
//         redirect()->to(Filament::getLoginUrl())
//             ->with('error', 'Vous n\'avez pas les permissions d\'administrateur nécessaires.')
//             ->send();
//         return; /** @phpstan-ignore-line */
//     }
    
//     abort_unless(
//         $user instanceof FilamentUser || $user->is_admin === true,
//         403
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
        return;
    }
    
    $this->auth->shouldUse(Filament::getAuthGuard());
    
    /** @var Model $user */
    $user = $guard->user();
    $panel = Filament::getCurrentPanel();
    
    // Vérification des droits d'administration
    if (!$user || !$user->is_admin) {
        Log::warning('Tentative d\'accès non autorisé à Filament', [
            'email' => $user?->email,
            'ip' => $request->ip(),
        ]);
        
        $guard->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        redirect()->to(Filament::getLoginUrl())
            ->with('error', 'Accès non autorisé.')
            ->send();
        return;
    }
    
    // Vérification des permissions spécifiques au panel
    if ($user instanceof FilamentUser && !$user->canAccessPanel($panel)) {
        abort(403);
    }
}

protected function redirectTo($request): ?string
{
    return Filament::getLoginUrl();
}
}
