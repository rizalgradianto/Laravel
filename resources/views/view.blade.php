<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="type/css" href="{{asset('css/app.css')}}">

    <title>Perpustakaan</title>
    <style media="screen" >
    html,
    body{
    	height: 100%;
    	color: #636b6f;
    	background-color: #fff;
    }
    .container{
    	height: 100%;
    	display: flex;
    	align-items: center;
    	justify-content: center;
    }
    .title-wrapper{
    	display: flex;
    	justify-content: center;
    	margin-bottom: 20px;
    }
    .btn{
    	color: #fff;
    	height: 40px;
    }
    .goto-home{
    	color: white;
    	width: 100%;
    	height: 100%;
    }
    button.edit{
    	background:lightblue;
    	color: white;
    	border:none;
    	border-radius: 4px;
    	outline: none;
    	cursor: pointer;
    	width: 50px;
    }
    button.edit:hover{
    	background:blue;
    	color: white;
    	border:none;
    	border-radius: 4px;
    	outline: none;
    	cursor: pointer;
    	width: 50px;
    }
    button.delete{
    	background:pink;
    	color: white;
    	border:none;
    	border-radius: 4px;
    	outline: none;
    	width: 70px;
    	cursor: pointer;
    }
    button.delete:hover{
    	background:red;
    	color: white;
    	border:none;
    	border-radius: 4px;
    	outline: none;
    	width: 70px;
    	cursor: pointer;
    }
    	
    </style>
    

  </head>
  <body>
    <div class="container">
    	<div>
    		<div class="title-wrapper">
    			<h1 class="daftar-title">Daftar Buku</h1>
    			<!-- <button type="button" name="button" class="btn btn-info"><a href="/" class="goto-home">Halaman Utama</a></button> -->
    		</div>
    		<div>
    			<table class="table">
    				<thead>
    					<tr>
    					<th>ID</th>
    					<th>Judul</th>
    					<th>Pengarang</th>
    					<th>Tahun Terbit</th>
    					<th>Penerbit</th>
    					<th>Action</th>
    					<th></th>
    					</tr>
    				</thead>
    				<tbody class="table-hover">
    					@foreach($buku as $buku)
    					<tr>
    						<th>{{$buku['id']}}</th>
    						<th>{{$buku['judul']}}</th>
    						<th>{{$buku['pengarang']}}</th>
    						<th>{{$buku['tahun_terbit']}}</th>
    						<th>{{$buku['penerbit']}}</th>
    						<th>
    							<button type="submit" name="button" class="btn btn-success edit">Edit</button>
    							
    						</th>
    						<th>
    							<form action="{{action('TestController@destroy', $buku['id'])}}" method="get">
    								@csrf
    							<button type="submit" name="button" class="btn btn-danger delete">Delete</button>
    							</form>
    						</th>
    					</tr>
    					@endforeach
    					
    				</tbody>
    				
    			</table>
    		</div>
    		
    	</div>
  
     
  </body>
</html>