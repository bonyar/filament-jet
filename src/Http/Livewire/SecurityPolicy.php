<?php

namespace ArtMin96\FilamentJet\Http\Livewire;

use ArtMin96\FilamentJet\FilamentJet;
use Illuminate\Support\Str;
use Livewire\Component;

class SecurityPolicy extends Component
{
    /**
     * Show the terms of service for the application.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        $securityFile = FilamentJet::localizedMarkdownPath('security.md');

        $view = view('filament-jet::livewire.security-policy', [
            'terms' => Str::markdown(file_get_contents($securityFile)),
        ]);

        $view->layout('filament::components.layouts.base', [
            'title' => __('filament-jet::registration.security_policy'),
        ]);

        return $view;
    }
}