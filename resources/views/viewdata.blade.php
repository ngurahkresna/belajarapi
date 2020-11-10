<!DOCTYPE html>
<html>
<head>
	<title>Data Designer</title>
	 <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">


	<!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="d-flex justify-content-center m-5">

<div id="card" class="card" style="width: 18rem; margin-right: 56px;">
	<ul class="list-group list-group-flush">
    	<li id="data-1" class="list-group-item">Empty Data</li>
    	<li id="data-2" class="list-group-item">Empty Data</li>
    	<li id="data-3" class="list-group-item">Empty Data</li>
    	<li id="data-4" class="list-group-item">Empty Data</li>
    	<li id="data-5" class="list-group-item">Empty Data</li>
 	</ul>
</div>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input id="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    <small id="emailHelp" class="form-text text-muted">Input ur name</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Expertise</label>
    <input id="expertise" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter expertise">
    <small id="emailHelp" class="form-text text-muted">Input ur expertise</small>
  </div>
  <button onclick="create()" type="submit" class="btn btn-primary">Submit</button>
  <button type="submit" class="btn btn-danger">Delete</button>
</form>
</body>
</html>

<script>

	function create(){

		let name = document.getElementById("name").value;
		let expertise = document.getElementById("expertise").value;

		console.log(name);
		console.log(expertise);

		let formData = {
			'nama'	: name,
			'expertise' : expertise
		};
		

		$.ajax({
			type: 'POST',
			url: 'http://127.0.0.1:8000/api/designer',
			data: formData,
			dataType: 'json',
			success: function (response) {
				console.log(response);
			}
		})
	}

	function Delete(){

		let name = document.getElementById("name").value;
		let expertise = document.getElementById("expertise").value;

		console.log(name);
		console.log(expertise);

		let formData = {
			'nama'	: name,
			'expertise' : expertise
		};
		

		$.ajax({
			type: 'POST',
			url: 'http://127.0.0.1:8000/api/designer',
			data: formData,
			dataType: 'json',
			success: function (response) {
				console.log(response);
			}
		})
	}

 	$(function () {
		$.ajax({
			type: 'GET',
			url: 'http://127.0.0.1:8000/api/designer',
			dataType: 'json',
			success: function (response) {
				for (let i = 0; i < response.length; i++) {
					let tag = $('#card')
					nama = response[i].nama;
					expertise = response[i].expertise;


					tag.find('#data-' + (i+1)).html((i+1) + ". " +nama + " as an " + expertise)

    		    	console.log(response[i].nama);
    		    	console.log(response[i].expertise);
				}
			}
		})
	})

</script>