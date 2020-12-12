<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\About;
use App\Models\Skill;
use App\Models\Resume;
use App\Models\Portfolio;
use App\Models\Category;
use App\Models\Testimonial;
use App\Models\Contact;
use App\Models\Exteam;
use Session;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slideritem  = Slider::all();
        $about       = About::all();
        $skill       = Skill::all();
        $resume      = Resume::all();
        $portfolio   = Portfolio::orderBy('id', 'desc')->paginate(8);
        $category    = Category::orderBy('id', 'ASC')->paginate(5);
        $catId1      = Portfolio::orderBy('id', 'desc')->paginate(8);
        $testemonial = Testimonial::all();

       
        // $categoryPost = Category::with('portfolio')->orderBy('id', 'desc')->paginate(8);

        return view('Frontend.pages.index', compact([
            'slideritem',
            'about',
            'skill',
            'resume',
            'portfolio',
            'category',
            'catId1',
            'testemonial'
            ]));
    }

  /**
     * Display and download resume of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getProtfoliobyid($id)
    {

        $catId = Portfolio::where('id', $id)->orderBy('id', 'desc')->paginate(8);
        return response()->json(array('success' => true, 'catId' => $catId));
    
    }
    /**
     * Display and download resume of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function downloadResume($file)
    {
         return response()->download('public/storage/resume/'.$file);
         
    }
    
    /**
     * Display about page of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function about()
    {
        $about       = About::all();
        $testemonial = Testimonial::all();
        $skill       = Skill::all();
        $team        = Exteam::all();
        return view('Frontend.pages.about', compact(['testemonial', 'skill', 'about', 'team']));
    }
    /**
     * Display contact page of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function contact()
    {
        return view('Frontend.pages.contact');
    }

    /**
     * req and response contact page of the resource.
     *
     * @return \Illuminate\Http\request
     * @return \Illuminate\Http\Response
     */
    
    public function contactmsg(Request $request)
    {
        $formData = $request->all();
        $this->validate($request,[
            'name'  => 'required', 
            'email' => 'required', 
            'subject' => 'required', 
            'description' => 'required', 
        ]);
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->description = $request->description;
        $contact->save();
        Session::flash('send_message', 'Message Sent Successfully');
        return redirect()->back();
    }




    /**
     * Display packages page of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function packages()
    {
        return view('Frontend.pages.packages');
    }
    public function packageDetails()
    {
        return view('Frontend.pages.packageDetails');
    }

      /**
     * Display projects and pags of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function projects()
    {
        $portfolio   = Portfolio::orderBy('id', 'desc')->get();
        return view('Frontend.pages.projects', compact(['portfolio']));
    }
      /**
     * Display projects and pags of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function projects_details($id)
    {
        $pjById = Portfolio::where('id', $id)->get();
        if($pjById){
            return view('Frontend.pages.projectDetails', compact(['pjById']));
  
        }else return redirect()->route('website.index');
       
    }




   
}