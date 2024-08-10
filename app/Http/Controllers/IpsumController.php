<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class IpsumController extends Controller
{
    public function getIpsum (Request $request)
    {
        Log::debug('getIpsum called');
        // Validate the incoming request
        $request->validate([
            'count' => 'nullable|integer|min:1',
            'structure' => 'nullable|string|in:sentence,paragraph',
        ]);
Log::debug('request validated');
        // Retrieve the necessary inputs
        $count = $request->input('count') ?? rand(2,7);
        $structure = $request->input('structure') ?? 'paragraph';

        Log::debug('count: ' . $count);
        Log::debug('structure: ' . $structure);

        // Generate the Nickelback Ipsum text
        $ipsumText = $this->generateIpsum($count, $structure);

        // Return the generated text as a response (you can customize the view as needed)
        return response()->json([
            'text' => $ipsumText,
        ]);

    }

    private function generateIpsum($count, $structure)
    {
        // Retrieve random lines from the database
        $lines = DB::table('lyrics')
            ->inRandomOrder()
            ->take($count * ($structure === 'paragraph' ? 5 : 1))
            ->pluck('line');

        // If structure is 'paragraph', group lines into paragraphs
        if ($structure === 'paragraph') {
            $paragraphs = $lines->chunk(5)->map(function ($chunk) {
                return $chunk->implode(' ');
            });
            return $paragraphs->implode("\n\n");
        }

        // If structure is 'sentence', return sentences directly
        return $lines->implode(' ');
    }
}
