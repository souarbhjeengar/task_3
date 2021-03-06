<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body><a href="/post/create" class="btn btn-dark">ADD  </a>
<div class="col-lg-10">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">SR.</th>
            <th scope="col">TITLE</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col" colspan="2">ACTION</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $value)


          <tr>
              <td>{{$i=$i++}}</td>
            <th scope="row">{{$value->name}}</th>
            <td> {{$value->description}} </td>
            <td><a class="btn btn-info" href="/post/edit/{{$value->id}}">EDIT</a>
                <a class="btn btn-danger" href="/post/delete/{{$value->id}}">DELETE</a></td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
            <tr>
            <th scope="col">SR.</th>
            <th scope="col">TITLE</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col" colspan="2">ACTION</th>
            </tr>
        </tfoot>
      </table>
    </form>
</div>
</body>
</html>
