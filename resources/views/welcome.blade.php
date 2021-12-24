<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Img CRUD</title>
  </head>
  <body>
    <h1>Student Table</h1>
    <table class="table">
        <thead>
          <tr>

            <th scope="col">Name</th>
            <th scope="col">Cource</th>
            <th scope="col">Profile Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($student as $item)
         <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->course}}</td>
            <td>
                <img src="{{asset('uploads/students/'.$item->profile_img)}}" width="70px" height="70px" alt="img">
            </td>
            <td>
                <a class="btn btn-info" href="{{route('student.edit',$item->id)}}" role="button">Edit</a>
                <a class="btn btn-danger" href="{{route('student.delete',$item->id)}}" role="button">Delete</a>
            </td>
          </tr>

         @endforeach

        </tbody>
      </table>
      <a class="btn btn-success" href="{{route('student.create')}}" role="button">Add New</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>
