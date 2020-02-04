<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Countries;
use App\Worker;
use App\Companies;
use App\Profiles;
use App\salary;
use App\Town;
use App\Cvuploads;
use App\Bio;
use App\Locations;
use App\jobcategories;
use DB;
class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Countries::getOne('Ke', 'en');

    }
    public function profille(){
        $work=Worker::where('user_id','=',auth()->user()->id)->get();
        $profile=Profiles::where('user_id','=',auth()->user()->id)->get();
        $salary=salary::where('user_id','=',auth()->user()->id)->get();
        $bios=Bio::where('user_id','=',auth()->user()->id)->get();
        return view ('profile.profile')->with('workers',$work)
        ->with('profiles',$profile)
        ->with('salaries',$salary)
        ->with('bio',$bios);

    }
     public function previewprofile(){
        $work=Worker::where('user_id','=',auth()->user()->id)->get();
        $profile=Profiles::where('user_id','=',auth()->user()->id)->get();
        $salary=salary::where('user_id','=',auth()->user()->id)->get();
        $bios=Bio::where('user_id','=',auth()->user()->id)->get();
        return view ('profile.previewprofile')->with('workers',$work)
        ->with('profiles',$profile)
        ->with('salaries',$salary)
        ->with('bio',$bios);
    }
    public function cvupload(){
        return view('profile.cv');
    }
function search(Request $request){
    $this->validate($request,[
        'search'=>'required',
    ]);
    $location=new Locations;
    $location->user_id=auth()->user()->id;
    $location->locations=$request->input('search');
    $location->save();
    return redirect('/create-profile')->with('status','Country added successfully');
    // return response()->json($data);
}
public function upload(Request $request){

    $this->validate($request,[
        'file'=>'required',
    ]);
    if($request->hasFile('file')){
        $filewithext= $request->file('file')->getClientOriginalName();
        $filename=pathinfo($filewithext,PATHINFO_FILENAME);
        $extension=$request->file('file')->getClientOriginalExtension();
        $filenametostore=$filename.'_'.time().'.'.$extension;
        $path=$request->file('file')->storeAs('public/uploads',$filenametostore);
        }
        else{
            $filenametostore='nocv.pdf';
        }
        $fileupload= new Cvuploads;
        $fileupload->user_id=auth()->user()->id;
        $fileupload->filename=$filenametostore;
        $fileupload->save();
        return redirect('/create-profile')->with('status','Cv Uploaded Successfully');
}
public function coursess(){
    return view('content.career');
}
public function courses(Request $request){
    $upload=$request->file('courses');
    $filepath=$upload->getRealPath();
    $file=fopen($filepath,'r');
    $header= fgetcsv($file);
    $escapeHeader=[];
    foreach ($header as $key => $value) {
        $lheader=strtolower($value);
        $escapestring= preg_replace('/^a-z/','',$lheader);
        array_push($escapeHeader, $escapestring);
        # code...
    }
    //looping for other columns
    while ($columns=fgetcsv($file)) {
        //trim data
        $data= array_combine($escapeHeader,$columns);
        $jobcategories= $data['jobcategories'];

        $hupload= jobcategories::firstOrNew(["jobcategories"=>$jobcategories]);
        $hupload->jobcategories=$jobcategories;;
        $hupload->save();
       
    }
    return redirect('/courses')->with('status','You have uploaded successfully');
}
public function profile(){
    $jobcat=jobcategories::orderBy('jobcategories','asc')->get();
    $towns=Town::orderBy('name','ASC')->get();
    return view('profile.stud')
     ->with('jobcate',$jobcat)
     ->with('towns',$towns);
}
public function autocomplete(Request $request){
  
    $search = $request->id;

        if (is_null($search))
        {
           return view('content.career');		  
        }
        else
        {
            $jobs = jobcategories::where('jobcategories','LIKE',"%{$search}%")
                           ->get();

            return view('content.searchresult')->withresults($jobs);
        }
//     $searchh = Input::get('search');
//     $result = jobcategories::where('jobcategories', 'LIKE', '%'.$searchh.'%')->get();
// return view('content.searchresult')->with('results',$result);
    // return response()->json($result);
}
public function autowork(Request $request){
    $search = $request->id;

    if (is_null($search))
    {
       return view('content.career');		   
    }
    else
    {
        $jobs = jobcategories::where('jobcategories','LIKE',"%{$search}%")
                       ->get();

        return view('content.searchwork')->withresult($jobs);
    }
}
public function studd(Request $request){

 $this->validate($request,[
    'location'=>'required',
    'filedtype'=>'required',
    'school'=>'required',
    'gradmonth'=>'required',
    'gradyear'=>'required',
 ]); 
 if (Profiles::where('user_id', '=',auth()->user()->id)->count() > 0) {
     
     return redirect('/opportunities')->with('status','Such record Already exists');
}
else{
     $createprofile= new Profiles;
     $createprofile->user_id=auth()->user()->id;
     $createprofile->location=$request->input('location');
     $createprofile->fieldtype=$request->input('filedtype');
     $createprofile->school=$request->input('school');
     $createprofile->gradmonth=$request->input('gradmonth');
     $createprofile->gradyear=$request->input('gradyear');
     $createprofile->course=$request->input('study');
     $createprofile->degreetype=$request->input('degree');
     $createprofile->save();
     return redirect('/opportunities')->with('status','Profile Created Successfully');
}
 
}
public function worker(Request $request){
    $this->validate($request,[
        'location'=>'required',
        'filedtype'=>'required',
        'position'=>'required',
        'company'=>'required',
     ]);
     if (Worker::where('user_id', '=',auth()->user()->id)->count() > 0) {
     
     return redirect('/opportunities')->with('status','Another record with such ID already exists');
}
else{
     $worker=new Worker;
     $worker->user_id=auth()->user()->id;
     $worker->locale=$request->input('location');
     $worker->fieldtype=$request->input('filedtype');
     $worker->position=$request->input('position');
     $worker->company=$request->input('company');
     $worker->empstatus=$request->input('emp');
     $worker->save();
     return redirect('/opportunities')->with('status','Profile Created Successfully');
}
}
public function salary(Request $request){
 $this->validate($request,[
'optradio'=>'required',
'jobtype'=>'required',
'jfunction'=>'required',
 ]);
    if (salary::where('user_id', '=',auth()->user()->id)->count() > 0) {
     
     return redirect('/viewprofile')->with('status','Another record with such ID already exists');
}
else{
 $salary= new salary;
 $salary->user_id=auth()->user()->id;
 $salary->jobsearch=$request->input('optradio');
 $salary->jobtype=$request->input('jobtype');
 $salary->jfunction=$request->input('jfunction');
 $salary->salary=$request->input('salary');
 $salary->save();
 return redirect('/viewprofile')->with('status','Profile Created Successfully');
}
 
}
public function opportunity(){
    $categories= jobcategories::all();
   
    return view ('profile.opportunities')
    ->with('category',$categories);
}
public function oppedit($id){
    $categories= jobcategories::all();
    $bios=Bio::where('user_id','=',auth()->user()->id)->get();
    $companies= Companies::where('user_id','LIKE',auth()->user()->id)->get();
$editopp=salary::find($id);
return view('new.profile')->with('edittop',$editopp)
->with('companies',$companies)
->with('bio',$bios)
->with('category',$categories);
}
public function storeopp(Request $request,$id){
    $this->validate($request,[
        'optradio'=>'required',
        'jobtype'=>'required',
        'jfunction'=>'required',
        // 'salary'=>'required',
         ]);
         $salary= salary::find($id);
         $salary->user_id=auth()->user()->id;
         $salary->jobsearch=$request->input('optradio');
         $salary->jobtype=$request->input('jobtype');
         $salary->jfunction=$request->input('jfunction');
         $salary->salary=$request->input('salary');
         $salary->save();
         return redirect('/prof')->with('status','Profile Has been updated Successfully');
}
public function viewprofile(){
    $work=Worker::where('user_id','=',auth()->user()->id)->get();
    $profile=Profiles::where('user_id','=',auth()->user()->id)->get();
    $salary=salary::where('user_id','=',auth()->user()->id)->get();
    return view ('profile.viewprofile')->with('workers',$work)
    ->with('profiles',$profile)
    ->with('salaries',$salary);
}
public function upprofile(Request $request){
$this->validate($request,[
    // 'bio'=>'required',
    // 'achieve'=>'required',
    // 'file'=>'required|image',
]);
if($request->hasFile('file')){
    $filewithext= $request->file('file')->getClientOriginalName();
    $filename=pathinfo($filewithext,PATHINFO_FILENAME);
    $extension=$request->file('file')->getClientOriginalExtension();
    $filenametostore=$filename.'_'.time().'.'.$extension;
    $path=$request->file('file')->storeAs('public/uploads',$filenametostore);
    }
    else{
        $filenametostore='noimage.jpg';
    }
   if (Bio::where('user_id',auth()->user()->id)->count() > 0) {
     
     return redirect('/previewprofile')->with('status','Another record with such ID already exists');
}
    else {
        $profileup=new Bio;
$profileup->user_id=auth()->user()->id;
$profileup->filename=$filenametostore;
$profileup->bio=$request->input('bio');
$profileup->achievement=$request->input('achieve');
$profileup->save();
return redirect('/previewprofile')->with('status','You have updated your status successfull');
    }

}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
