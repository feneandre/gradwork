<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function updateStatus(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'bukti_project' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        // Temukan project berdasarkan ID
        $project = Project::findOrFail($id);

        // Simpan file bukti project
        if ($request->hasFile('bukti_project')) {
            $file = $request->file('bukti_project');
            $path = $file->store('bukti_project', 'public');
            $project->bukti_project = $path;
        }

        // Ubah status project
        $project->status = 'Sudah Dikerjakan';
        $project->save();

        // Redirect kembali ke dashboard mahasiswa dengan pesan sukses
        return redirect()->route('mahasiswa.dashboard')->with('success', 'Status project berhasil diperbarui.');
    }
}