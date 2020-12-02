<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Generated CV</title>

  <style type="text/css">
    * {
      font-family: Verdana, Arial, sans-serif;
    }
    table{
      font-size: x-small;
    }
    tfoot tr td{
      font-weight: bold;
      font-size: x-small;
    }
    .gray {
      background-color: lightgray
    }
  </style>

</head>
<body>

  <table width="100%">
    <tr>
      <td align="center">
        <h3>{{$personalinfo->name}}</h3>
        <pre>
          Email: {{$personalinfo->email}}
          Phone Number: {{$personalinfo->phone}}
          Address: {{$personalinfo->postal_address}}
          Location: {{$personalinfo->name}}
        </pre>
      </td>
    </tr>

  </table>

  <h4  align="center">Career Objective</h4>
  <p>{!!$personalstatements->statement!!}</p>

  <br/>

  <div class="container">
    <h4 align="center">Work Experience</h4>
    @foreach($experience as $experienced)
    <table cellspacing="40">
      <tr>
        <td>
          <table class="table-border" cellpadding="5">
            <tr>
              <td>
                <strong>
                  {{$experienced->start_date}} - {{$experienced->end_date}}
                </strong>
              </td>
              <td>
              </td>
            </tr>
          </table>
        </td>
        <td>
          <table class="table-border" cellpadding="5">
            <tr>
              <td>
                <strong>
                  Employer: {!!$experienced->position!!}
                </strong>
              </td>
              <td>
              </td>
            </tr>
            <tr>
              <td>
                <strong>
                  Position: {!!$experienced->position!!}
                </strong>
              </td>
            </tr>
            <tr>
              <td>
                {!!$experienced->roles!!}
              </td>
              <td>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    @endforeach
  </div>

  <div class="container">
    <div class="row">
      <h4 align="center">Education History</h4>
      @foreach($education as $educated)
      <div class="col-md-12">
        <h5>{{$educated->institution}}</h5>
        <h5>{{$educated->qualification}}</h5>
      </div>
      @endforeach
    </div>
  </div>

  <div class="container">
    <div class="row">
      <h4 align="center">Awards</h4>
      <div class="col-md-12">
        @foreach($awards as $award)
        <li>{{$award->name}}</li>
        <p>{!!$award->description!!}</p>
        @endforeach
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <h4 align="center">Skills</h4>
      <div class="col-md-12">
        <ul>
          @foreach($skills as $skill)
          <li>{{$skill->skillname}}</li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <h4 align="center">References</h4>
      @foreach($references as $referee)
      <div class="col-md-12">
        <p>Course form institution</p>
      </div>
      @endforeach
    </div>
  </div>

</body>
</html>