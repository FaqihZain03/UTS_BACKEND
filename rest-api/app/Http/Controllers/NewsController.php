<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class newsController extends Controller
{
    public function index()
	{
        # menggunakan model news untuk select data
		$news = News::all();

		if (!empty($news)) {
			$response = [
				'message' => 'Menampilkan Data Semua Berita',
				'data' => $news,
			];
			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data tidak ada'
			];
			return response()->json($response, 404);
		}
	}

	public function store(Request $request) 
	{

		$news = News::create($request->all());

		$response = [
			'message' => 'Data Barita Berhasil Dibuat',
			'data' => $news,
		];

		return response()->json($response, 201);
	}

	public function show($id)
	{
		$news = News::find($id);

		if ($news) {
			$response = [
				'message' => 'Get detail News',
				'data' => $news
			];
	
			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data not found'
			];
			
			return response()->json($response, 404);
		}
	}

	public function update(Request $request, $id)
	{
		$news = news::find($id);

		if ($news) {
			$response = [
				'message' => 'News is updated',
				'data' => $news->update($request->all())
			];
	
			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data not found'
			];

			return response()->json($response, 404);
		}
	}

	public function destroy($id)
	{
		$news = news::find($id);

		if ($news) {
			$response = [
				'message' => 'News is delete',
				'data' => $news->delete()
			];

			return response()->json($response, 200); 
		} else {
			$response = [
				'message' => 'Data not found'
			];

			return response()->json($response, 404);
		}
	}
    public function search(Request $request)
    {
    $keyword = $request->input('keyword');
    $results = News::search($keyword);

    return view('news.index', compact('results'));
    }
    public function sport(){
        
        $sport = Sport::all();

		if (!empty($sport)) {
			$response = [
				'message' => 'Menampilkan Data Semua Sport',
				'data' => $sport,
			];
			return response()->json($response, 200);
        }
    }
    public function Finance(){
        
        $finance = Finance::all();

		if (!empty($finance)) {
			$response = [
				'message' => 'Menampilkan Data Semua Finance',
				'data' => $finance,
			];
			return response()->json($response, 200);
        }
    }
    public function Automtive(){
        
        $automotive = Automotive::all();

		if (!empty($automotive)) {
			$response = [
				'message' => 'Menampilkan Data Semua Automotive',
				'data' => $automotive,
			];
			return response()->json($response, 200);
        }
    }
}