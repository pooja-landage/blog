<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<div class="container"   >
<div class="row">
<div class="offset-2 col-lg-8 col-md-8">

<form action={{route('category.submit')}} method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group" >
    <label for="exampleInputName">Name</label>
    <input type="text" id="Name" name="name"  class="form-control" aria-describedby="NameHelp" placeholder="Enter Name " value="{{ old('name') }}"required/>
    <small id="Name" class="form-text text-muted"></small>
  </div>
  
  

  <button type="submit" class="btn btn-primary">Submit</button>
  

</form>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>