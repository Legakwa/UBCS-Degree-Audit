<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
    <thead>
      <tr>
        <td><b>Course Code</b></td>
        <td><b>Course Name</b></td>
        <td><b>Credits</b></td>     
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>
          {{$courses->course_code}}
        </td>
        <td>
          {{$courses->course_name}}
        </td>
        <td>
          {{$courses->credits}}
        </td>
      </tr>
      </tbody>
    </table>
  </body>
</html>