<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * @OA\Info(
 *      title="Judul API Anda",
 *      version="1.0.0",
 *      description="Deskripsi singkat tentang API Anda",
 *      termsOfService="https://example.com/terms/",
 *      @OA\Contact(
 *          email="contact@example.com"
 *      ),
 *      @OA\License(
 *          name="Nama Lisensi",
 *          url="https://www.example.com/license"
 *      )
 * )
 */

/**
 * @OA\Post(
 *  path="/api/home",
 *  summary="Home data",
 *  description="",
 *  tags={"Home"},
 *  @OA\Parameter(
 *      name="name",
 *      in="query",
 *      description="tommy h",
 *      required=true,
 *     ),
 *  @OA\Response(
 *      response=200,
 *      description="OK",
 *      @OA\MediaType(
 *          mediaType="application/json",
 *       )
 *  ),
 * )
 */
class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        return response()->json([
            'name'=>$request->input('name'),
            'message'=>'Hello World!',
        ]);
    }
}
