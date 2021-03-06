<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
use App\Models\Faqs;

class FaqsController extends Controller
{
    /**
     * Show faqs data
     *
     * @param Faqs $faqs
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Faqs $faqs)
    {
        $allfaqs = Faqs::latest()->paginate(10);
        $page ='/faqs';
        return view('public_interface.faqs', compact('allfaqs','page'));
    }

}
