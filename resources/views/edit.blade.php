<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!doctype html>
    <html lang="en">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>
    <div class="container p-5">
<form action="" method="post">
@csrf
    <div class="form-group">
     
      <label for="">Name</label>
      <input type="text" value="{{$stdRecord ['name']}}" name="uName" id="" class="form-control" placeholder="" aria-describedby="helpId">
      @error('uName')
      <small id="helpId" class="text-danger">{{$message}}</small>
      @enderror
    </div>
    <div class="form-group">
    <label for="">Email</label>
      <input type="text" value="{{$stdRecord ['email']}}" name="uEmail" id="" class="form-control" placeholder="" aria-describedby="helpId">
      @error('uEmail')
      <small id="helpId" class="text-danger">{{$message}}</small>
      @enderror
    </div>
    <div class="form-group">
    <label for="">Password</label>
    <input type="text" value="{{$stdRecord['password']}}" id="" name="uPassword" class="form-control" placeholder="" aria-describedby="helpId">
    @error('uPassword')
      <small id="helpId" class="text-danger">{{$message}}</small>
      @enderror
    </div>

    <button class="btn btn-info">Update</button>
</form>
</div>


           </body>
    </html>
</head>
<body>
    
</body>
</html>