<?php

namespace ArtMin96\FilamentJet\Http\Livewire;

use ArtMin96\FilamentJet\FilamentJet;
use Illuminate\Support\Str;
use Livewire\Component;

class RefundPolicy extends Component
{
    /**
     * Show the terms of service for the application.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        $refundFile = FilamentJet::localizedMarkdownPath('refund.md');

        $view = view('filament-jet::livewire.refund-policy', [
            'terms' => Str::markdown(file_get_contents($refundFile)),
        ]);

        $view->layout('filament::components.layouts.base', [
            'title' => __('filament-jet::registration.refund_policy'),
        ]);

        return $view;
    }
}