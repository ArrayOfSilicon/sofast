<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        //gayatree new code google sprreadsheetapi
    //     $spreadsheetId='1nSsuNxLmm0BT3TRgpsJ9EE_yCQMIKmjVFviUhQB0cuc';
    //     $url ='https://sheets.googleapis.com/v4/spreadsheets/'.$spreadsheetId.'/values/Sheet1?key=AIzaSyBYIbRRq_lC2vzPwl1xA_s7-S5VdnPigwM';
    //    $response =  Http::get($url);
    //    if ($response->successful()) {
    //     $data = $response->json();
    //     $genreWiseData = $data['values'];

    //     // Now you can work with the $data variable, which contains the response data.
    //     return view('pages.index', ['data' => $genreWiseData]);
    // } else {
    //     // Handle the case where the request was not successful (e.g., an error occurred).
    //     // dd($response->status(), $response->body());
    //     return view('pages.index', ['data' => $response->body()]);
    // }
        $data = [
            [
                "CHANNEL NAME" => "4K TRAVEL TV",
                "GENRE" => "Travel",
                "LANGUAGE" => "English",
                "RATING" => "G",
                "RIGHTS" => "Worldwide",
                "HOURS" => "260",
                "REFRESHING" => "30%",
                "LOGO B&W" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "LOGO COLOR" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "DESCRIPTION" => "With 4K TRAVEL TV discover the world's most travel destinations, cultures and heritage sites. 4K TRAVEL TV is a channel with breathtaking images in impressive resolution to discover the most fascinating travel destinations, cultures, and heritage.\n The most amazing destinations that will awaken your curiosity and make you want to know more. 4K TRAVEL takes you to discover the wonders of the world, flying over the most beautiful sites. 4K TRAVEL allows you to know the history of each city visited, its particularity, the origins of its creation and the habits of its people. Thanks to its 4K technology, 4K TRAVEL makes you dive into the image, with a very high definition and a depth of field close to a three-dimensional vision. Travel to new destinations every day, as \n if you were there.",
                "HLS" => "https://evrideo-edge-fast.aniview.com/33c31ac4-51fa-46ae-afd0-0d1fe5e60a80_0_HLS/manifest.m3u8",
                "EPG" => "https://app2.evrideo.com/api/reports/epg?channelUid=33c31ac4-51fa-46ae-afd0-0d1fe5e60a80&minDurationSecs=180&groupSameIdSequence=true&excludeTagsPipeSeparated=fil1&durationHours=96&encodingCodePage=65001&outputType=xmlTv2&wrapTextInCDATA=false"
            ],
            [
                "CHANNEL NAME" => "4K TRAVEL TV",
                "GENRE" => "Travel",
                "LANGUAGE" => "English",
                "RATING" => "G",
                "RIGHTS" => "Worldwide",
                "HOURS" => "260",
                "REFRESHING" => "30%",
                "LOGO B&W" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "LOGO COLOR" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "DESCRIPTION" => "With 4K TRAVEL TV discover the world's most travel destinations, cultures and heritage sites. 4K TRAVEL TV is a channel with breathtaking images in impressive resolution to discover the most fascinating travel destinations, cultures, and heritage.\n The most amazing destinations that will awaken your curiosity and make you want to know more. 4K TRAVEL takes you to discover the wonders of the world, flying over the most beautiful sites. 4K TRAVEL allows you to know the history of each city visited, its particularity, the origins of its creation and the habits of its people. Thanks to its 4K technology, 4K TRAVEL makes you dive into the image, with a very high definition and a depth of field close to a three-dimensional vision. Travel to new destinations every day, as \n if you were there.",
                "HLS" => "https://evrideo-edge-fast.aniview.com/33c31ac4-51fa-46ae-afd0-0d1fe5e60a80_0_HLS/manifest.m3u8",
                "EPG" => "https://app2.evrideo.com/api/reports/epg?channelUid=33c31ac4-51fa-46ae-afd0-0d1fe5e60a80&minDurationSecs=180&groupSameIdSequence=true&excludeTagsPipeSeparated=fil1&durationHours=96&encodingCodePage=65001&outputType=xmlTv2&wrapTextInCDATA=false"
            ],
            [
                "CHANNEL NAME" => "4K TRAVEL TV",
                "GENRE" => "Romance",
                "LANGUAGE" => "English",
                "RATING" => "G",
                "RIGHTS" => "Worldwide",
                "HOURS" => "260",
                "REFRESHING" => "30%",
                "LOGO B&W" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "LOGO COLOR" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "DESCRIPTION" => "With 4K TRAVEL TV discover the world's most travel destinations, cultures and heritage sites. 4K TRAVEL TV is a channel with breathtaking images in impressive resolution to discover the most fascinating travel destinations, cultures, and heritage.\n The most amazing destinations that will awaken your curiosity and make you want to know more. 4K TRAVEL takes you to discover the wonders of the world, flying over the most beautiful sites. 4K TRAVEL allows you to know the history of each city visited, its particularity, the origins of its creation and the habits of its people. Thanks to its 4K technology, 4K TRAVEL makes you dive into the image, with a very high definition and a depth of field close to a three-dimensional vision. Travel to new destinations every day, as \n if you were there.",
                "HLS" => "http://afrndistribhls-en-b-origin.hexaglobe.net/uk9kRW37VxBZv3F3/afrnabren_eng.m3u8",
                "EPG" => "https://app2.evrideo.com/api/reports/epg?channelUid=33c31ac4-51fa-46ae-afd0-0d1fe5e60a80&minDurationSecs=180&groupSameIdSequence=true&excludeTagsPipeSeparated=fil1&durationHours=96&encodingCodePage=65001&outputType=xmlTv2&wrapTextInCDATA=false"
            ],
            [
                "CHANNEL NAME" => "4K TRAVEL TV",
                "GENRE" => "Thriller",
                "LANGUAGE" => "English",
                "RATING" => "G",
                "RIGHTS" => "Worldwide",
                "HOURS" => "260",
                "REFRESHING" => "30%",
                "LOGO B&W" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "LOGO COLOR" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "DESCRIPTION" => "With 4K TRAVEL TV discover the world's most travel destinations, cultures and heritage sites. 4K TRAVEL TV is a channel with breathtaking images in impressive resolution to discover the most fascinating travel destinations, cultures, and heritage.\n The most amazing destinations that will awaken your curiosity and make you want to know more. 4K TRAVEL takes you to discover the wonders of the world, flying over the most beautiful sites. 4K TRAVEL allows you to know the history of each city visited, its particularity, the origins of its creation and the habits of its people. Thanks to its 4K technology, 4K TRAVEL makes you dive into the image, with a very high definition and a depth of field close to a three-dimensional vision. Travel to new destinations every day, as \n if you were there.",
                "HLS" => "https://evrideo-edge-fast.aniview.com/33c31ac4-51fa-46ae-afd0-0d1fe5e60a80_0_HLS/manifest.m3u8",
                "EPG" => "https://app2.evrideo.com/api/reports/epg?channelUid=33c31ac4-51fa-46ae-afd0-0d1fe5e60a80&minDurationSecs=180&groupSameIdSequence=true&excludeTagsPipeSeparated=fil1&durationHours=96&encodingCodePage=65001&outputType=xmlTv2&wrapTextInCDATA=false"
            ],
            [
                "CHANNEL NAME" => "4K TRAVEL TV",
                "GENRE" => "Action",
                "LANGUAGE" => "English",
                "RATING" => "G",
                "RIGHTS" => "Worldwide",
                "HOURS" => "260",
                "REFRESHING" => "30%",
                "LOGO B&W" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "LOGO COLOR" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "DESCRIPTION" => "With 4K TRAVEL TV discover the world's most travel destinations, cultures and heritage sites. 4K TRAVEL TV is a channel with breathtaking images in impressive resolution to discover the most fascinating travel destinations, cultures, and heritage.\n The most amazing destinations that will awaken your curiosity and make you want to know more. 4K TRAVEL takes you to discover the wonders of the world, flying over the most beautiful sites. 4K TRAVEL allows you to know the history of each city visited, its particularity, the origins of its creation and the habits of its people. Thanks to its 4K technology, 4K TRAVEL makes you dive into the image, with a very high definition and a depth of field close to a three-dimensional vision. Travel to new destinations every day, as \n if you were there.",
                "HLS" => "https://evrideo-edge-fast.aniview.com/33c31ac4-51fa-46ae-afd0-0d1fe5e60a80_0_HLS/manifest.m3u8",
                "EPG" => "https://app2.evrideo.com/api/reports/epg?channelUid=33c31ac4-51fa-46ae-afd0-0d1fe5e60a80&minDurationSecs=180&groupSameIdSequence=true&excludeTagsPipeSeparated=fil1&durationHours=96&encodingCodePage=65001&outputType=xmlTv2&wrapTextInCDATA=false"
            ],
            [
                "CHANNEL NAME" => "4K TRAVEL TV",
                "GENRE" => "Adventure",
                "LANGUAGE" => "English",
                "RATING" => "G",
                "RIGHTS" => "Worldwide",
                "HOURS" => "260",
                "REFRESHING" => "30%",
                "LOGO B&W" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "LOGO COLOR" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "DESCRIPTION" => "With 4K TRAVEL TV discover the world's most travel destinations, cultures and heritage sites. 4K TRAVEL TV is a channel with breathtaking images in impressive resolution to discover the most fascinating travel destinations, cultures, and heritage.\n The most amazing destinations that will awaken your curiosity and make you want to know more. 4K TRAVEL takes you to discover the wonders of the world, flying over the most beautiful sites. 4K TRAVEL allows you to know the history of each city visited, its particularity, the origins of its creation and the habits of its people. Thanks to its 4K technology, 4K TRAVEL makes you dive into the image, with a very high definition and a depth of field close to a three-dimensional vision. Travel to new destinations every day, as \n if you were there.",
                "HLS" => "https://evrideo-edge-fast.aniview.com/33c31ac4-51fa-46ae-afd0-0d1fe5e60a80_0_HLS/manifest.m3u8",
                "EPG" => "https://app2.evrideo.com/api/reports/epg?channelUid=33c31ac4-51fa-46ae-afd0-0d1fe5e60a80&minDurationSecs=180&groupSameIdSequence=true&excludeTagsPipeSeparated=fil1&durationHours=96&encodingCodePage=65001&outputType=xmlTv2&wrapTextInCDATA=false"
            ],
            [
                "CHANNEL NAME" => "4K TRAVEL TV",
                "GENRE" => "Sci-fi",
                "LANGUAGE" => "English",
                "RATING" => "G",
                "RIGHTS" => "Worldwide",
                "HOURS" => "260",
                "REFRESHING" => "30%",
                "LOGO B&W" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "LOGO COLOR" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "DESCRIPTION" => "With 4K TRAVEL TV discover the world's most travel destinations, cultures and heritage sites. 4K TRAVEL TV is a channel with breathtaking images in impressive resolution to discover the most fascinating travel destinations, cultures, and heritage.\n The most amazing destinations that will awaken your curiosity and make you want to know more. 4K TRAVEL takes you to discover the wonders of the world, flying over the most beautiful sites. 4K TRAVEL allows you to know the history of each city visited, its particularity, the origins of its creation and the habits of its people. Thanks to its 4K technology, 4K TRAVEL makes you dive into the image, with a very high definition and a depth of field close to a three-dimensional vision. Travel to new destinations every day, as \n if you were there.",
                "HLS" => "https://evrideo-edge-fast.aniview.com/33c31ac4-51fa-46ae-afd0-0d1fe5e60a80_0_HLS/manifest.m3u8",
                "EPG" => "https://app2.evrideo.com/api/reports/epg?channelUid=33c31ac4-51fa-46ae-afd0-0d1fe5e60a80&minDurationSecs=180&groupSameIdSequence=true&excludeTagsPipeSeparated=fil1&durationHours=96&encodingCodePage=65001&outputType=xmlTv2&wrapTextInCDATA=false"
            ],
            [
                "CHANNEL NAME" => "AFRICANEWS",
                "GENRE" => "News",
                "LANGUAGE" => "English",
                "RATING" => "PG",
                "RIGHTS" => "Worldwide",
                "HOURS" => "220",
                "REFRESHING" => "25%",
                "LOGO B&W" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "LOGO COLOR" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "DESCRIPTION" => "Africanews is the only independent international multilingual news channel made for Africa.\n Launched in 2016, Africanews reports breaking news from the ground and delivers unbiased\n reporting. Africanews is available 24/7, both on TV and on digital platforms, in French and in English.\n With a team of 50 correspondents representing the diversity of Africa, Africanews showcases all the voices shaping the future of the continent. Africanews reaches 35 million TV households and is available in over 40 countries in Africa but also in the UK and the US.",
                "HLS" => "http://afrndistribhls-en-b-origin.hexaglobe.net/uk9kRW37VxBZv3F3/afrnabren_eng.m3u8",
                "EPG" => "https://app2.evrideo.com/api/reports/epg?channelUid=33c31ac4-51fa-46ae-afd0-0d1fe5e60a80&minDurationSecs=180&groupSameIdSequence=true&excludeTagsPipeSeparated=fil1&durationHours=96&encodingCodePage=65001&outputType=xmlTv2&wrapTextInCDATA=false"
            ],
            [
                "CHANNEL NAME" => "AFRICANEWS",
                "GENRE" => "News",
                "LANGUAGE" => "English",
                "RATING" => "PG",
                "RIGHTS" => "Worldwide",
                "HOURS" => "220",
                "REFRESHING" => "25%",
                "LOGO B&W" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "LOGO COLOR" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "DESCRIPTION" => "Africanews is the only independent international multilingual news channel made for Africa.\n Launched in 2016, Africanews reports breaking news from the ground and delivers unbiased\n reporting. Africanews is available 24/7, both on TV and on digital platforms, in French and in English.\n With a team of 50 correspondents representing the diversity of Africa, Africanews showcases all the voices shaping the future of the continent. Africanews reaches 35 million TV households and is available in over 40 countries in Africa but also in the UK and the US.",
                "HLS" => "http://afrndistribhls-en-b-origin.hexaglobe.net/uk9kRW37VxBZv3F3/afrnabren_eng.m3u8",
                "EPG" => "https://app2.evrideo.com/api/reports/epg?channelUid=33c31ac4-51fa-46ae-afd0-0d1fe5e60a80&minDurationSecs=180&groupSameIdSequence=true&excludeTagsPipeSeparated=fil1&durationHours=96&encodingCodePage=65001&outputType=xmlTv2&wrapTextInCDATA=false"
            ],
            [
                "CHANNEL NAME" => "AFRICANEWS",
                "GENRE" => "News",
                "LANGUAGE" => "English",
                "RATING" => "PG",
                "RIGHTS" => "Worldwide",
                "HOURS" => "220",
                "REFRESHING" => "25%",
                "LOGO B&W" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "LOGO COLOR" => "https://i.ibb.co/F6q8PpL/4-K-TRAVEL-color.png",
                "DESCRIPTION" => "Africanews is the only independent international multilingual news channel made for Africa.\n Launched in 2016, Africanews reports breaking news from the ground and delivers unbiased\n reporting. Africanews is available 24/7, both on TV and on digital platforms, in French and in English.\n With a team of 50 correspondents representing the diversity of Africa, Africanews showcases all the voices shaping the future of the continent. Africanews reaches 35 million TV households and is available in over 40 countries in Africa but also in the UK and the US.",
                "HLS" => "http://afrndistribhls-en-b-origin.hexaglobe.net/uk9kRW37VxBZv3F3/afrnabren_eng.m3u8",
                "EPG" => "https://app2.evrideo.com/api/reports/epg?channelUid=33c31ac4-51fa-46ae-afd0-0d1fe5e60a80&minDurationSecs=180&groupSameIdSequence=true&excludeTagsPipeSeparated=fil1&durationHours=96&encodingCodePage=65001&outputType=xmlTv2&wrapTextInCDATA=false"
            ]
        ];

        foreach ($data as $channel) {
            $genre = $channel["GENRE"];

            if (!isset($genreWiseData[$genre])) {
                $genreWiseData[$genre] = [];
            }
            $genreWiseData[$genre][] = $channel;
        }

        return view('pages.index', ['data' => $genreWiseData],compact('user'));
        // return view('pages.index', compact('genreWiseData', 'user'));

    //     $response =
    //    Http::get('https://sheetdb.io/api/v1/7d6zu755q2vk1', [
    //     ]);

    //       if ($response->successful()) {
    //                 $data = $response->body();
    //                 $data = json_decode($data, true);

    //                 $genreWiseData = [];

    //                 foreach ($data as $channel) {
    //                     $genre = $channel["GENRE"];

    //                     if (!isset($genreWiseData[$genre])) {
    //                         $genreWiseData[$genre] = [];
    //                     }

    //                     $genreWiseData[$genre][] = $channel;
    //             }

    //         return view('pages.index', ['data' => $genreWiseData]);

    //       } else {
    //       return response()->json(['error' => 'Failed to retrieve data from Google Drive link'], 500);
    //       }

        // $genreWiseData = [];


    }

    public function profile()
    {
        $user = auth()->user();
        // dd($user);
        return view('pages.profile',compact('user'));
    }

    // public function profileEdit(Request $request)
    // {

    // }

    public function profileEdit(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
        'password' => 'nullable|string|min:8|confirmed',
    ]);
    $user = Auth::user();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->save();
    return redirect()->route('home')->with('success', 'Profile updated successfully');
}
}
