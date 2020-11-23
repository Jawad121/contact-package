<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Contact Us Anytime!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
        <form class="form" action="{{route('store.contact')}}" method="post">
        	@csrf
        	<div class="row">
        		<div class="col-md-12">
    		    	<div class="form-group col-md-4">
    		    		<label>Name</label>
    		    		<input type="text" name="name" placeholder="Enter Your Name" class="form-control">
    		    	</div>
    		    	<div class="form-group col-md-4">
    		    		<label>Email</label>
    		    		<input type="text" name="email" placeholder="Enter Your Email" class="form-control">
    		    	</div>
    		    	<div class="form-group col-md-4">
    		    		<label>Message</label>
    		    		<textarea name="message" class="form-control" placeholder="Enter Your Message"></textarea>
    		    	</div>
    		    	<div class="col-md-4">
    		    		<button type="submit" class="btn btn-primary">Submit</button>
    		    	</div>
        		</div>
        	</div>
        </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>