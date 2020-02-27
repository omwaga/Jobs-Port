<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes(['verify' => true]);
Route::get('/Login-Page',function(){
    return view('auth.login1');
});
// verify user token email
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::post('/user/resend','Auth\LoginController@resendemail')->name('resendemail');
Route::get('/resendlink','PagesController@resendlink')->name('resendlink');
// end of verify user tokenjobv
//AUthenticated jobseeker routes
Route::get('/jobseekeraccount','DashboardController@profilejourney')->name('jobseekeraccount');
Route::get('/career-profile','DashboardController@careerprofile')->name('career-profile');
Route::get('/uploads', 'DashboardController@upload')->name('fileupload');
Route::get('/savedjobs', 'DashboardController@savedjobs')->name('savedjobs');
Route::get('/viewjob/{id}', 'DashboardController@viewjob');
Route::get('/apply/{id}', 'ApplicationsController@apply')->name('apply');
Route::resource('jobapplications', 'ApplicationsController');
Route::get('/jobseekerprofile', 'DashboardController@jobseekerprofile')->name('jobseekerprofile');
Route::resource('personalinfo', 'JobseekerDetailsController');
Route::resource('personalstatements', 'PersonalStatementsController');
Route::resource('experiences', 'WorkExperiencesController');
Route::resource('education', 'EducationController');
Route::resource('awards', 'AwardsController');
Route::resource('references', 'ReferencesController');
Route::resource('jobskills', 'SkillsController');
Route::get('/joblocation/{name}','DashboardController@showlocation');
Route::get('/jobcategory/{name}','DashboardController@showcategory');
Route::get('/successfullapplication', 'ApplicationsController@success');
Route::get('/already-applied', 'ApplicationsController@appalready');
Route::get('/joblogin/{id}', 'PagesController@loginform')->name('joblogin');
Route::post('/authlogin', 'Auth\ApplyjobController@login')->name('authuser');
Route::get('/applyforjob', 'PagesController@applyjob');
Route::get('/search-jobs', 'DashboardController@jobsearch')->name('jobsearch');
Route::get('/customize-resume','DashboardController@customizeresume')->name('customizeresume');
// learningcentercontroller routes
Route::get('/Learningdashboard','LearningCenterController@index')->name('learnd');
Route::get('/PostTraining','LearningCenterController@gettraining')->name('gettraining');
Route::post('/PostTraining','LearningCenterController@addtraining')->name('adtraining');
Route::get('/postevent','LearningCenterController@getevent')->name('getevent');
Route::post('/postevent','LearningCenterController@postevent')->name('posteventt');
Route::get('/Mytrainings','LearningCenterController@viewtrainings')->name('vtrainings');
Route::get('Myevents','LearningCenterController@viewevent')->name('geteventt');
Route::get('/Traindetails/{id}','LearningCenterController@showtraining')->name('traindetail');
// end of learningcenter controller routes

Route::get('/homeprofile', 'HomeController@index')->name('hom');

//Employercontroller Routes
Route::get('/alreadyloggedin','EmployerController@loggedin')->name('loginalready');
Route::get('/all-applicants','EmployerController@allapplicants')->name('allapplicants');
Route::resource('jobposts','JobListController');
Route::get('/applicantprofile/{name}','EmployerController@fullprofile')->name('fullprofile');
Route::get('/talentpool','EmployerController@talentpool')->name('pooltalent');
Route::get('/your-applicants','EmployerController@applicantss')->name('viewapplicants');
Route::get('/Employer-dashboard','EmployerController@employerdash')->name('employdashboard');
Route::get('/postajob','EmployerController@postajob')->name('emppostjob');
Route::get('/companyprofile','EmployerController@cprofile')->name('empprofille');
Route::resource('/Employer-login','EmployerController');
Route::get('/Talent-pool','EmployerController@talentp')->name('talentpool');
Route::post('/jobpost','EmployerController@jobpost')->name('postempjob');
Route::get('/templates', 'EmployerController@picktemplate')->name('picktemplate');
Route::get('/searchtemplate', 'Employercontroller@searchtemplate')->name('searchtemplate');
Route::get('/use-template/{name}', 'EmployerController@usetemplate')->name('usetemplate');
Route::patch('/shortlist/{name}', 'EmployerController@shortlist');
Route::patch('/talentpool/{name}', 'EmployerController@addtalentpool');
Route::post('/decline-application', 'Employercontroller@decline');
Route::get('decline-applications', 'Employercontroller@declined')->name('declined');
Route::get('/shortlisted-candidates', 'EmployerController@shortlistedcandidates')->name('shortlistedcandidates');
Route::get('/all-jobposts', 'EmployerController@alljobs')->name('employerjobs');
Route::post('/shortlist-jobs', 'EmployerController@shortlistjobs')->name('shortlistjobs');
Route::delete('/remove-shortlisted', 'EmployerController@removeshortlist')->name('removeshortlist');
Route::delete('/remove_talentpoolmember', 'EmployerController@removepoolmember')->name('removepoolmember');
Route::delete('/remove_declined', 'EmployerController@removedeclined')->name('removedeclined');
Route::post('new-poolname', 'EmployerController@newpool')->name('newpool');
Route::get('talentpool/{name}', 'EmployerController@poolmembers')->name('poolmembers');
Route::get('resume-database', 'EmployerController@resumedatabase')->name('resumedatabase');
Route::post('resume-database', 'EmployerController@searchresume')->name('searchresume');
Route::get('/job-withapplications/{name}', 'EmployerController@jobwithapplications')->name('jobwithapplications');

// Admin routes
Route::get('/admin-dashboard', 'AdminController@dashboard')->name('admin');
Route::resource('blogcategories', 'BlogCategoriesController');
Route::resource('blogarticles', 'BlogArticlesController');
Route::get('/admin-employers', 'AdminController@adminemployers')->name('adminemployers');
Route::get('/admin-jobseekers', 'AdminController@adminjobseekers')->name('adminjobseekers');
Route::get('/admin-vacancies', 'AdminController@adminvacancies')->name('adminvacancies');
Route::get('/admin-applications', 'AdminController@adminapplications')->name('adminapplications');
Route::resource('resumedomains', 'ResumeDomainController');
Route::resource('resumesamples', 'ResumeSamplesController');
Route::get('/admin-resume', 'AdminController@resume')->name('resume');
Route::get('/admin-industries', 'AdminController@industry')->name('admin-industry');
Route::get('/admin-categories', 'AdminController@category')->name('admin-category');
Route::resource('cvupload', 'CvUploadsController');

Route::post('/Create-profile','PagesController@createprofile')->name('create.profile');
Route::get('/employerprofile','PagesController@cprofile')->name('hirre');
//pages Controller
// profesiional bodies
Route::get('/professional+bodies','PagesController@professional')->name('professional');
// Route::get('/Hire-Companyprofile','EmployerController@cprofile')->name('hirre');
Route::post('/createinst','PagesController@createinstitution')->name('createi');
Route::post('/createprofile','PagesController@createcompany')->name('Createcompany');
Route::get('/Hire','PagesController@hire')->name('hire');
Route::post('/storeprof','PagesController@storeprof');
Route::get('/Advancedsearch','PagesController@advanced')->name('advanced');
Route::get('/job-search','PagesController@aboutjob')->name('joblisting');
Route::get('/employerd','PagesController@employerd')->name('emp');
Route::get('/companysearch/{id}','PagesController@jobbycompany')->name('jobscom');
Route::get('/Home-page','PagesController@welcome')->name('homepage');
Route::get('/normalsearch','PagesController@normalsearch')->name('normalsearch');
Route::get('homesearch','PagesController@searchhome')->name('homesearch');
Route::get('/Location/{name}','PagesController@showlocation');
Route::get('Joblisting','PagesController@joblisting')->name('joblist');
Route::get('/Register','PagesController@register')->name('Register');
Route::get('/','PagesController@homee')->name('homee');
Route::get('/recruit','PagesController@recruit');
Route::get('/Career-hub','PagesController@careerhub');
Route::get('/organizations','PagesController@organization');
Route::get('/findjob','PagesController@searchjobs')->name('searchdata');
Route::get('/jobview/{id}','PagesController@show')->name('viewjob');
Route::get('/Industries/{name}','PagesController@showindustry')->name('showinda');
Route::get('/About-us','PagesController@aboutus');

//employer login controllers
Route::prefix('employer')->group(function(){
    Route::get('/login','Auth\EmployerLoginController@ShowLoginForm')->name('admin.login');
    Route::post('/login','Auth\EmployerLoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Auth\EmployerLoginController@logout')->name('admin.logout');
    Route::get('/', 'EmployController@index')->name('admin.home');
});

//trainingcenter login controllers
Route::prefix('trainingcenter')->group(function(){
    Route::get('/login','Auth\TrainingCenterLoginController@ShowLoginForm')->name('train.login');
    Route::post('/login','Auth\TrainingCenterLoginController@login')->name('training.login');
    Route::post('/logout', 'Auth\TrainingCenterLoginController@logout')->name('training.logout');
    Route::get('/', 'TrainingcController@index')->name('training.home');
});

Route::resource('/countries','CountriesController');
//route cfor Countries Controller
Route::get('/edit-opportunity/{id}','CountriesController@oppedit')->name('editop');
Route::put('/edit-opportunity/{id}','CountriesController@storeopp');
Route::post('/search','CountriesController@search');
Route::get('/create-profile','CountriesController@profile')->name('creatprofile');
Route::get('/autocomplete','CountriesController@autocomplete')->name('autocomplete.search');
Route::get('/autowork','CountriesController@autowork')->name('autocomplete.work');
Route::post('/create-profile','CountriesController@studd');
Route::post('/opportunities','CountriesController@salary');
Route::post('/worker','CountriesController@worker');
Route::get('/opportunities','CountriesController@opportunity');
Route::get('/viewprofile','CountriesController@viewprofile')->name('viewprofille');
Route::post('/vieprofilee','CountriesController@upprofile');
Route::get('/profile','CountriesController@profille');
Route::get('/previewprofile','CountriesController@previewprofile');
Route::get('/courses','CountriesController@coursess');
Route::post('/courses','CountriesController@courses');

//accounts controller 
Route::put('/personaledit/{id}','AccountsController@updateuser')->name('editper');
Route::put('/securityedit/{id}','AccountsController@updatepass')->name('securitty');

Route::get('/Accounts|thenetworkedpros','DashboardController@accounts')->name('accounts');
Route::post('/Biodata','DashboardController@biodata');
Route::get('/dashh','DashboardController@dashh')->name('userdash');
Route::get('/Myapplications','DashboardController@myapplications')->name('myapplications');
Route::get('/Mytrainings','DashboardController@mytrainings')->name('myt');
Route::get('/savedtrainings','DashboardController@savedt')->name('savedtraining');
Route::get('/recommended-jobs','DashboardController@recommended')->name('recommended');
Route::post('/save-industry','DashboardController@saverecommendedjobs')->name('rjobs');
Route::get('/Confirmprofile','DashboardController@confirmuser')->name('confirmuser');
Route::get('/prof','DashboardController@prof')->name('userprof');
Route::get('/userprofile','DashboardController@userprofile');
Route::post('/posttraining','DashboardController@posttraining');
Route::get('/applicants','EmployerController@viewapplicants');
Route::post('/applicants','DashboardController@applicants');
Route::get('/dashboard/show/{id}','DashboardController@show');
Route::post('/applyjob','DashboardController@applyjob');
Route::get('/dataa','DashboardController@data');
Route::get('/appliedjobs','DashboardController@appliedjobs')->name('appliedjobs');
Route::get('/browseall','DashboardController@browseall')->name('browseall');
Route::get('/fiter','DashboardController@searchjobs')->name('filtersearch');
Route::get('/showtraining/{id}','DashboardController@showtraining');
Route::get('/subscription','DashboardController@subscription')->name('subscribe');

// pending
Route::get('/Institution','InstitutionController@homepage')->name('institution');
//controller for updating academic qualifications
Route::put('/editsal/{id}','InfoController@editsal');
Route::resource('/Otherinfo','InfoController');
Route::post('/Assignments','InfoController@assignments')->name('assignments');
Route::put('/Assign/{id}','InfoController@updateassign');
Route::get('/Editskills/{id}','InfoController@editskills')->name('editskills');
Route::put('/Editskill/{id}','InfoController@editskill');
Route::get('/Editass/{id}','InfoController@editas');
Route::post('/experience','InfoController@experience');
Route::post('/certification','InfoController@procert');
Route::post('/skills','InfoController@skills');
Route::Post('/Reference','InfoController@reference');
Route::get('/editreference/{id}','InfoController@editref')->name('editdref');
Route::put('/editreff/{id}','InfoController@refupdate');
Route::put('/editexperience/{id}','InfoController@expeedit');
Route::get('/editacademic/{id}','InfoController@editacademic')->name('editacademic');
Route::put('/updatecademic/{id}','InfoController@updateacademic')->name('updateacademic');
Route::get('/update-certification/{id}','InfoController@editcertification');
Route::put('/upcertification/{id}','InfoController@updatecert');


//google controller routes
Route::get('login/google', 'Auth\GoogleController@redirectToProvider')->name('google.login');
Route::get('login/google/callback', 'Auth\GoogleController@handleProviderCallback');

//Public Training and Seminars Routes
Route::get('/trainingcourses','TrainingSeminarsController@index')->name('trainingseminars');
Route::get('/trainingcategory/{trainingcategory}','TrainingSeminarsController@showcategory')->name('trainingcategory');
Route::get('/traininglocation/{town}','TrainingSeminarsController@showtraininglocation')->name('traininglocation');
Route::get('/trainingcourses/{training}','TrainingSeminarsController@showtraining')->name('showtraining');
Route::get('/searchtraining', 'TrainingSeminarsController@searchtraining');
Route::get('/filter', 'TrainingSeminarsController@search')->name('filter');
Route::get('/trainingtype/{training_type}', 'TrainingSeminarsController@trainingtype')->name('trainingtype');
Route::get('/training/register/{training}', 'TrainingSeminarsController@register')->name('registerfortraining');
Route::resource('applications', 'TrainingApplicationController');
Route::get('/trainingcategory', 'TrainingSeminarsController@categoryorderby')->name('sortcategory');
Route::get('/traininglocation', 'TrainingSeminarsController@locationorderby')->name('sortlocation');
Route::get('/trainingtype', 'TrainingSeminarsController@typeorderby')->name('sorttype');


//public routes
Route::get('/all-jobs', 'PagesController@alljobs')->name('alljobs');
Route::get('/search-result', 'PagesController@searchresult');
Route::get('/job-category/{name}','PagesController@showcategory');
Route::get('/job-location/{name}','PagesController@filterlocation');
Route::get('/job-industry/{name}','PagesController@filterindustry');
Route::get('/employer', 'PagesController@foremployer')->name('foremployer');
Route::get('/upload-cv', 'PagesController@uploadcv')->name('uploadcv');
Route::get('/resume-services', 'PagesController@resume')->name('resume-services');
Route::get('/resume-samples', 'PagesController@resumesamples')->name('resumesamples');
Route::get('/single-resume', 'PagesController@singleresume')->name('singleresume');
Route::get('/from-blog', 'PagesController@fromblog')->name('fromblog');
Route::get('/blog/{name}', 'PagesController@singleblog')->name('singleblog');
Route::get('em', 'PagesController@leads')->name('leads');

// Routes for the countries and the states

Route::get('dropdownlist','DataController@getCountries');
Route::get('dropdownlist/getstates/{id}','DataController@getStates');