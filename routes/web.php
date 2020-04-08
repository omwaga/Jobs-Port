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

Route::get('/test', 'PagesController@test');

//AUthenticated jobseeker routes
Route::get('/jobseekeraccount','DashboardController@profilejourney')->name('jobseekeraccount');
Route::get('/career-profile','DashboardController@careerprofile')->name('career-profile');
Route::get('/uploads', 'DashboardController@upload')->name('fileupload');
Route::get('/savedjobs', 'DashboardController@savedjobs')->name('savedjobs');
Route::get('/viewjob/{id}', 'DashboardController@viewjob');
Route::get('/apply/{id}/{jobtitle}', 'ApplicationsController@apply')->name('apply');
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
Route::get('/joblogin/{id}/{jobtitle}', 'PagesController@loginform')->name('joblogin');
Route::post('/authlogin', 'Auth\ApplyjobController@login')->name('authuser');
Route::get('/applyforjob', 'PagesController@applyjob');
Route::get('/search-jobs', 'DashboardController@jobsearch')->name('jobsearch');
Route::get('/customize-resume','DashboardController@customizeresume')->name('customizeresume');
Route::get('/recommended-jobs','DashboardController@recommended')->name('recommended');
Route::post('/save-industry','DashboardController@saverecommendedjobs')->name('rjobs');
Route::get('/downloadresume/{id}','DashboardController@downloadresume');
Route::get('/pick-theme', 'DashboardController@picktheme')->name('themepreview');
Route::post('/build-resume', 'DashboardController@buildresume')->name('buildresume');
Route::post('/create-resume', 'Auth\ResumeLoginController@login')->name('create-resume');

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
Route::get('/create-job', 'AdminController@createjob')->name('createjob');
Route::post('/saveadmin-job', 'AdminController@savejob')->name('admin_savejob');
Route::resource('blogcategories', 'BlogCategoriesController');
Route::resource('blogarticles', 'BlogArticlesController');
Route::get('/admin-employers', 'AdminController@adminemployers')->name('adminemployers');
Route::get('/admin-jobseekers', 'AdminController@adminjobseekers')->name('adminjobseekers');
Route::get('/admin-vacancies', 'AdminController@adminvacancies')->name('adminvacancies');
Route::get('/admin-applications', 'AdminController@adminapplications')->name('adminapplications');
Route::resource('resumedomains', 'ResumeDomainController');
Route::resource('resumesamples', 'ResumeSamplesController');
Route::get('/cover-letters', 'PagesController@coverletter')->name('coverletter');
Route::get('/admin-resume', 'AdminController@resume')->name('resume');
Route::get('/admin-industries', 'AdminController@industry')->name('admin-industry');
Route::get('/admin-categories', 'AdminController@category')->name('admin-category');
Route::resource('cvupload', 'CvUploadsController');
Route::resource('coverletters', 'CoverLettersController');


//employer login controllers
Route::prefix('employer')->group(function(){
    Route::get('/login','Auth\EmployerLoginController@ShowLoginForm')->name('admin.login');
    Route::post('/login','Auth\EmployerLoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Auth\EmployerLoginController@logout')->name('admin.logout');
    Route::get('/', 'EmployController@index')->name('admin.home');
});

//google controller routes
Route::get('login/google', 'Auth\GoogleController@redirectToProvider')->name('google.login');
Route::get('login/google/callback', 'Auth\GoogleController@handleProviderCallback');

//public routes
Route::get('/all-jobs', 'PagesController@alljobs')->name('alljobs');
Route::get('/companyone', 'PagesController@onecompany')->name('onecompany');
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
Route::get('/cv-templates', 'PagesController@cv')->name('cv');
Route::resource('alerts', 'JobAlertsController');
Route::get('/all-companies', 'PagesController@companies')->name('all-companies');
Route::get('/work-readiness-program', 'PagesController@workprogram')->name('workprogram');
Route::get('/jobseeker-register', 'PagesController@jobseekerregister')->name('jobseekerregister');
Route::post('/Create-profile','PagesController@createprofile')->name('create.profile');
Route::get('/employerprofile','PagesController@cprofile')->name('hirre');
Route::post('/createprofile','PagesController@createcompany')->name('Createcompany');
Route::get('/Hire','PagesController@hire')->name('hire');
Route::get('/job-search','PagesController@aboutjob')->name('joblisting');
Route::get('/employerd','PagesController@employerd')->name('emp');
Route::get('/homesearch','PagesController@searchhome')->name('homesearch');
Route::get('/Register','PagesController@register')->name('Register');
Route::get('/','PagesController@homee')->name('homee');
Route::get('/jobview/{id}/{jobtitle}','PagesController@show')->name('viewjob');

// Routes for the countries and the states
Route::get('dropdownlist/getstates/{id}','DataController@getStates');//Route for the dependentdropdown list fro countries and towns