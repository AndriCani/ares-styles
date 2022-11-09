<?php

namespace Ares\AresStyles;

use Illuminate\Support\Facades\Http;

class test {
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');
        
        return view('ares-styles::layout', ['response'=> $response]);
    }
}