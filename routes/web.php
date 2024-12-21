<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use OpenAI\Laravel\Facades\OpenAI;

Route::get('/', function () {
    $data['message'] = 'Please ask a question ......';
    return view('welcome', $data);
});
Route::post('/', function () {

    $response = OpenAI::chat()->create([
        'model' => 'gpt-4o',
        'messages' => [
            ['role' => 'user', 'content' => request('prompt')],
        ]
    ])->choices[0]->message->content;

    $data['message'] = $response;

    $mp3 = OpenAI::audio()->speech([
        'model' => 'tts-1',
        'voice' => 'echo',
        'input' => $response,
    ]);

    file_put_contents(public_path('audio.mp3'), $mp3);

    return view('welcome', $data);
});
