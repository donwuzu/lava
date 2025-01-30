<?php

namespace App\Http\Controllers;


use App\Models\Document;
use App\Models\CareerInfo;

use App\Models\careerData;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function showForm()
    {
        return view('user.career_form');
    }

    public function storeCareerInfo(Request $request)
    {
        {
            // Validate the request
            $request->validate([
                'education' => 'required|string',
                'skills' => 'required|string',
                'experience' => 'required|string',
                'linkedin' => 'nullable|url',
                'document' => 'required|file|mimes:pdf,doc,docx|max:2048',
            ]);
    
        
    
            // Handle file upload
            if ($request->hasFile('document')) {
                $file = $request->file('document');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('documents', $fileName, 'public');
    
                // Store all data in the career_data table
        careerData::create([
            'user_id' => auth()->id(),
            'education' => $request->education,
            'skills' => $request->skills,
            'experience' => $request->experience,
            'linkedin' => $request->linkedin,
            'file_name' => $fileName,
            'file_path' => $filePath,
            'file_type' => $file->getClientMimeType(),
        ]);
            }
    
            return redirect()->back()->with('success', 'Career information submitted successfully!');
        }
}
}