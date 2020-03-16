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
        <td><b>Program Code</b></td>
        <td><b>Program Name</b></td>
        <td><b>Minimum Credits</b></td> 
        <td><b>Minimum CGPA</b></td>     
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>
          {{$programs->program_code}}
        </td>
        <td>
          {{$programs->program_name}}
        </td>
        <td>
          {{$programs->min_credits}}
        </td>
        <td>
          {{$programs->min_cgpa}}
        </td>
      </tr>
      </tbody>
    </table>
  </body>
</html>