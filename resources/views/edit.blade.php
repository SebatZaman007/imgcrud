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
    <h1>Student Form</h1>

    <form action="{{route('student.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="hidden" name="id" value="{{$edit->id}}">
            
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="tetx" class="form-control" name="name" value="{{$edit->name}}" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Course</label>
          <input type="text" name="course" value="{{$edit->course}}" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Profile Picture</label>
            <input class="form-control" name="profile_img" type="file" id="formFileMultiple" multiple>
            <img src="{{asset('uploads/students/'.$edit->profile_img)}}" width="70px" height="70px" alt="img">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>
