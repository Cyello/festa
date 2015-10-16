<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Sua Festa</title>
	<meta name="description" content="Curso Bootstrap"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="css/bootstrap.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="css/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="{{action('CrudController@index')}}">MLJM </br><font face="forte">Project</font></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav ">
	        <li class="active "><a href="{{action('CrudController@index')}}">Home<span class="sr-only">(current)</span></a></li>
	        <li><a href="{{action('CrudController@sobre')}}">Sobre</a></li>
	        <li><a href="#">Serviços</a></li>
	        <li><a href="{{action('CrudController@perfil')}}">Perfil</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Paginas 
	          	<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Ações</a></li>
	            <li><a href="#">Blogs</a></li>
	            <li><a href="#">Outros Contatos</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Ajuda</a></li>
	          </ul>
	        </li>
	        <li><a href="#">Blog</a></li>
	        <li><a href="{{action('CrudController@contatos')}}">Contato</a></li>
	       
	      </ul>
	   	   <u class="nav navbar-nav navbar-right">
	   	   	 <li><a href="auth/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="{{action('HomeController@index')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	   	   </u>

	     
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<header class="jumbotron subhead " >
		<div class="container">
			<h1>@yield('conteudo2')</h1>
			<p>@yield('conteudo3')</p>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				@yield('conteudo')
			</div>
		</div>
	</div>


	

      <footer class="footer">
	      <div class="container">
	      	<p class="pull-right"><a href="#">Voltar ao topo</a></p>
	        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	        consequat. 
	    
	      </div>
      </footer>




	
</body>
</html>