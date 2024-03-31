<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class YoutubeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $client = new Client();

        // Siapkan request options
        $query = $request->get('search');

        // try {
            // Buat request menggunakan Laravel Facade for GuzzleHttp
            $options = [
                'query' => [
                    'key' => env('GOOGLE_API_KEY'),
                    'part' => 'snippet',
                    'maxResults' => 12,
                    'type' => 'video',
                    'q' => $query
                ],
            ];

            // Kirim request ke YouTube API
            $response = $client->get('https://www.googleapis.com/youtube/v3/search', $options);

            // Decode response JSON
            $data = json_decode($response->getBody(), true);
            $result = $data['items'];

            // Tampilkan hasil
            return view('youtube', [
                'result' => $result,
                'judul' => 'Youtube'
            ]);
        // } catch (\Exception $e) {
        //     // Tangani error
        //     return response()->json(['error' => $e->getMessage()], 500);
        // }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
