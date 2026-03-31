<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

abstract class BaseCrudController extends Controller
{
    protected string $view;

    public function index(): View
    {
        return view($this->view . '.index');
    }

    public function create(): View
    {
        return view($this->view . '.create');
    }

    public function store()
    {
        return redirect()->route($this->view . '.index')->with('success', 'Saved successfully.');
    }

    public function show($id): View
    {
        return view($this->view . '.show', compact('id'));
    }

    public function edit($id): View
    {
        return view($this->view . '.edit', compact('id'));
    }

    public function update($id)
    {
        return redirect()->route($this->view . '.index')->with('success', 'Updated successfully.');
    }

    public function destroy($id)
    {
        return redirect()->route($this->view . '.index')->with('success', 'Deleted successfully.');
    }
}
