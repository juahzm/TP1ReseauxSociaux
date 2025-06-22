<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;




class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // return view('file.index', compact('files'));

        $student = Auth::user()->student;
        $files = File::with('student')->get();


        return view('file.index', compact('files', 'student'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'document' => 'required|file|mimes:pdf|max:2048',
        ]);

        $student = Auth::user()->student;
        $filePath = $request->file('document')->store('files', 'public');


        File::create([
            'title' => $request->input('title'),
            'file_path' => $filePath,
            'student_id' => $student->id,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('file.index')->with([
            'success' => 'File uploaded successfully!',
            'studentName' => Auth::user()->student->name,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, File $file)
    {
        //
    }


    public function destroy(File $file)
    {
        // Sécurité : Vérifie si le fichier appartient au user connecté
        if ($file->student->user_id !== Auth::id()) {
            abort(403, 'Unauthorized');
        }

        // Supprimer le fichier du disque
        if (Storage::disk('public')->exists($file->file_path)) {
            Storage::disk('public')->delete($file->file_path);
        }

        // Supprimer l'entrée de la base de données
        $file->delete();

        return redirect()->route('file.index')->with('success', 'File deleted successfully!');
    }
}
