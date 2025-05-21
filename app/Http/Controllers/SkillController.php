<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = auth()->user()->skills;
        return view('skills.index', compact('skills'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        auth()->user()->skills()->create($validated);

        return redirect()->route('skills.index')
            ->with('success', 'Compétence ajoutée avec succès.');
    }

    public function destroy(Skill $skill)
    {
        $this->authorize('delete', $skill);
        $skill->delete();

        return redirect()->route('skills.index')
            ->with('success', 'Compétence supprimée avec succès.');
    }
} 