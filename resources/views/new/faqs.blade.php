@extends('layouts.app')
@section('content')
<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url({{asset('Images/cv2.jpg')}})" style=" padding-top: 5rem;"> 
</div> 
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Job Seekers FAQs</a>
        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Employers FAQs</a>
      </div>
    </div>
    <div class="col-md-9">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

          <div class="container">
            <div class="card card-body border-light shadow-sm p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
              <h5 style="color:#0B0B3B;"><a href="#">What is The Networked Pro?</a></h5>

              <div class="row">
                <div class="col-md-9">
                  <p class="text-dark">
                    Answer:<br>
                    The Networked Pro's philosophy is to connect you with resources for job searching & for moving up the career ladder.
                    Click here to sign up on The Networked Pro!!
                  </p>
                </div>
              </div>
            </div> 
          </div>
          <div class="container">
            <div class="card card-body border-light shadow-sm p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
              <h5 style="color:#0B0B3B;"><a href="#">What are the benefits of signing up on The Networked Pro as a job seeker?</a></h5>

              <div class="row">
                <div class="col-md-9">
                  <p class="text-dark">
                    Answer:<br>
                    <ol>
                      <li>You will get access to the latest job vacancies in your industry and location</li>
                      <li>You will access excellent professional CV samples (which is FREE) </li>
                      <li>You will get noticed by employers and recruiters through our employers portal</li>
                      <li>You will have your profile accessible to hundreds of employers</li>
                      <li>You will have access to expert career advice</li>
                    </ol> 
                  </p>
                </div>
              </div>
            </div> 
          </div>
          <div class="container">
            <div class="card card-body border-light shadow-sm p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
              <h5 style="color:#0B0B3B;"><a href="#">How do I sign up on The Networked Pro?</a></h5>

              <div class="row">
                <div class="col-md-9">
                  <p class="text-dark">
                    Answer:<br>
                    Visit https://thenetworkedpros.com/Register and add your details to sign up.!
                  </p>
                </div>
              </div>
            </div> 
          </div>
          <div class="container">
            <div class="card card-body border-light shadow-sm p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
              <h5 style="color:#0B0B3B;"><a href="#">What type of jobs does The Networked Pro post?</a></h5>

              <div class="row">
                <div class="col-md-9">
                  <p class="text-dark">
                    Answer:<br>
                    The Networked Pro posts jobs from all industries. Visit https://thenetworkedpros.com/#pag3 to view and apply!
                  </p>
                </div>
              </div>
            </div> 
          </div>
          <div class="container">
            <div class="card card-body border-light shadow-sm p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
              <h5 style="color:#0B0B3B;"><a href="#">How do i get a job through The Networked Pro?</a></h5>

              <div class="row">
                <div class="col-md-9">
                  <p class="text-dark">
                    Answer:<br>
                  First visit https://thenetworkedpros.com/Register create a profile as a job seeker.</p>
                  <p>
                  Second, ensure that you verify your account in which you will be sent a verification link to your email.</p>
                  <p>
                    Third, login to your account using the credentials and update your profile. Make sure you include your education records, work experience and skills.
                  </p>
                  <p>
                  Next, include your referees - employers check on the referee feedback received when shortlisting candidates.</p>
                  <p>
                  Lastly, click onto the vacancies to apply.</p>
                </p>
              </div>
            </div>
          </div> 
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

        <div class="container">
          <div class="card card-body border-light shadow-sm p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
            <h5 style="color:#0B0B3B;"><a href="#">What is Employer Dashboard?</a></h5>

            <div class="row">
              <div class="col-md-9">
                <p class="text-dark">
                  Answer:<br>
                  Employer Dashboard is a Dashboard which provides an overall view of the Employer’s account about the Recent Job Postings by Employer, recently saved search (hiring folders), Account Utilization status.
                  Click here to see the Employer Dashboard snapshot.
                </p>
              </div>
            </div>
          </div> 
        </div>
        <div class="container">
          <div class="card card-body border-light shadow-sm p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
            <h5 style="color:#0B0B3B;"><a href="#">How can I post a job?</a></h5>

            <div class="row">
              <div class="col-md-9">
                <p class="text-dark">
                  Answer:<br>
                  If you are new to our portal then, you can be able to post a job by clicking on any link which says “post a job” on thenetworkedpros.com. If you are an existing customer then you can post a job as mentioned earlier or else login to your employer’s account and click on “Post a job” on your dashboard.
                </p>
              </div>
            </div>
          </div> 
        </div>
        <div class="container">
          <div class="card card-body border-light shadow-sm p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
            <h5 style="color:#0B0B3B;"><a href="#">Can I post a job for free?</a></h5>

            <div class="row">
              <div class="col-md-9">
                <p class="text-dark">
                  Answer:<br>
                  Yes, you can. We allow unlimited free job posting. Please note, duplicate jobs and spam jobs will not be made live. 
                </p>
              </div>
            </div>
          </div> 
        </div>
        <div class="container">
          <div class="card card-body border-light shadow-sm p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
            <h5 style="color:#0B0B3B;"><a href="#">Where can I see the usage of my account?</a></h5>

            <div class="row">
              <div class="col-md-9">
                <p class="text-dark">
                  Answer:<br>
                  You can see the usage of your account on Dashboard (Click here to see the snapshot)
                </p>
              </div>
            </div>
          </div> 
        </div>
        <div class="container">
          <div class="card card-body border-light shadow-sm p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
            <h5 style="color:#0B0B3B;"><a href="#">Can I select Multiple Job Locations while posting a Job?</a></h5>

            <div class="row">
              <div class="col-md-9">
                <p class="text-dark">
                  Answer:<br>
                  Yes, you can select Multiple Job Locations while posting a job by selecting all the available options with a check box provided beside each location.
                </p>
              </div>
            </div>
          </div> 
        </div>
        <div class="container">
          <div class="card card-body border-light shadow-sm p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
            <h5 style="color:#0B0B3B;"><a href="#">How can I contact candidates from Post-n-Hire?</a></h5>

            <div class="row">
              <div class="col-md-9">
                <p class="text-dark">
                  Answer:<br>
                  You can contact candidates from Post-n-Hire via
                  <ul>
                    <li>Sending E-mail/SMS</li>
                    <li>The candidates contact details in Excel</li>
                  </ul>
                </p>
              </div>
            </div>
          </div> 
        </div>
        <div class="container">
          <div class="card card-body border-light shadow-sm p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
            <h5 style="color:#0B0B3B;"><a href="#">Once I posted a Job for how long my job will remain on thenetworkedpros.com?</a></h5>

            <div class="row">
              <div class="col-md-9">
                <p class="text-dark">
                  Answer:<br>
                  All jobs remain active on website until the last date of Job application as given by you while posting a job.
                </p>
              </div>
            </div>
          </div> 
        </div>
        <div class="container">
          <div class="card card-body border-light shadow-sm p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
            <h5 style="color:#0B0B3B;"><a href="#">How long will it take for my job to get live on thenetworkedpros.com website?</a></h5>

            <div class="row">
              <div class="col-md-9">
                <p class="text-dark">
                  Answer:<br>
                  It takes close to 30 minutes after the job is approved by the admin to come live on website.
                </p>
              </div>
            </div>
          </div> 
        </div>
        <div class="container">
          <div class="card card-body border-light shadow-sm p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
            <h5 style="color:#0B0B3B;"><a href="#">Can I edit the already Posted Job? If Yes, How can I do that?</a></h5>

            <div class="row">
              <div class="col-md-9">
                <p class="text-dark">
                  Answer:<br>
                  Yes, you can edit the already posted Job by following the below steps
                  <ul>
                    <li>Login into your employer account</li>
                    <li>Click on the responses against the job you have posted</li>
                    <li>Click on Edit button beside the job id(a small pencil like icon)</li>
                  </ul>
                </p>
              </div>
            </div>
          </div> 
        </div>
        <div class="container">
          <div class="card card-body border-light shadow-sm p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
            <h5 style="color:#0B0B3B;"><a href="#">How do I view the Job responses received for the job that I’ve posted?</a></h5>
            <div class="row">
              <div class="col-md-9">
                <p class="text-dark">
                  Answer:<br>
                  To see the Responses for the Posted Job, please follow the below steps
                  <ul>
                   <li>Login into your employer account</li>
                   <li>Click on Response(s) number link against the job you have posted and you will be able to see the candidates who have applied for the job posting
                   </li>
                 </ul>
               </p>
             </div>
           </div>
         </div> 
       </div>
     </div>
   </div>
 </div>
</div>
</div>

@endsection
