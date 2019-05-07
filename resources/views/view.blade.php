<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="type/css" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <title>Perpustakaan</title>
    <style media="screen" >
    html,
    body{
    	height: 100%;
    	color: #636b6f;
    	background-color: #fff;
    	font-family: 'Poppins', sans-serif;
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
    	background:#5aa6c4;
    	color: white;
    	border:none;
    	border-radius: 4px;
    	outline: none;
    	cursor: pointer;
    	width: 50px;
    }
    button.edit:hover{
    	background:#376e84;
    	color: white;
    	border:none;
    	border-radius: 4px;
    	outline: none;
    	cursor: pointer;
    	width: 50px;
    }
    button.delete{
    	background:#e56e6e;
    	color: white;
    	border:none;
    	border-radius: 4px;
    	outline: none;
    	width: 70px;
    	cursor: pointer;
    	margin-left: -10px;
    }
    button.delete:hover{
    	background:#a84141;
    	color: white;
    	border:none;
    	border-radius: 4px;
    	outline: none;
    	width: 70px;
    	cursor: pointer;
    }

    thead {
    	
    background-color: ghostwhite;

    }
    

    	
    </style>
    

  </head>
  <body>
    <div class="container">
    	<div>
    		<div class="title-wrapper" style="position: relative;">
    			<h1 class="daftar-title">Daftar Buku</h1>
    			<a href="{{action('TestController@store')}}"><button class="btn btn-success float-right Tambah" 
    				style=" 
    				color: #45b79b;
    				width: 145px;
    				position: absolute;
    				top: 30px;
    				right: 0;
    				background: #fff;
    				border: 1px solid #45b79b;
    				border-radius: 4px;
    				outline: none;
    				cursor: pointer; 
    				">Tambah Buku</button></a>

    			<!-- <button type="button" name="button" class="btn btn-info"><a href="/" class="goto-home">Halaman Utama</a></button> -->
    		</div>
    		<div>
    			<table class="table" cellpadding="10" cellspacing="0">
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
    						<td>{{$buku['id']}}</td>
    						<td>{{$buku['judul']}}</td>
    						<td>{{$buku['pengarang']}}</td>
    						<td>{{$buku['tahun_terbit']}}</td>
    						<td>{{$buku['penerbit']}}</td>
    						<td>
    							<a href="{{action('TestController@update', $buku['id'])}}">
    							<button type="submit" name="button" class="btn btn-success edit">Edit</button>
    							</a>
    							
    						</th>
    						<th>
    							<form action="{{action('TestController@destroy', $buku['id'])}}" method="post">
    								@csrf
    							<button type="submit" name="button" class="btn btn-danger delete">Hapus</button>
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