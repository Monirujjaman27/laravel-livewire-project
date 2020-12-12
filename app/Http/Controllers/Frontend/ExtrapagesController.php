<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Code;
class ExtrapagesController extends Controller
{
  /**
     * Display a faq items of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function faq()
     {
      $faq = Faq::orderBy('id', 'desc')->get();
        return view('Frontend.pages.faq', compact(['faq']));
     }
  /**
     * Display a code items of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function code()
     {
      $code = Code::orderBy('id', 'desc')->get();
        return view('Frontend.pages.code', compact(['code']));
     }
  /**
     * Display a code items of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function coadDetails($id)
     {
      $code = Code::where('id', $id)->get();
      if($code){
          return view('Frontend.pages.coadDetails', compact(['code']));

      }else return redirect()->route('website.index');
     }

}