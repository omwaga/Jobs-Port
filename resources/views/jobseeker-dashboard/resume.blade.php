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
        <h3>Full Name : {{$personalinfo->name}}</h3>
        <pre>
          Email: {{$personalinfo->email}}
          Phone Number: {{$personalinfo->phone}}
          Address: {{$personalinfo->postal_address}}
          Location: {{$personalinfo->name}}
        </pre>
      </td>
    </tr>

  </table>

  <h4>Personal Information</h4>
  <p>{!!$personalstatements->statement!!}</p>

  <br/>

  <div class="container">
    <div class="row">
      <h4>Education History</h4>
      @foreach($education as $educated)
      <div class="col-md-12">
        <p>Course form institution</p>
      </div>
      @endforeach
    </div>
  </div>

</body>
</html>