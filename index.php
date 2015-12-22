//Primeira versão - Terceira aula
//@GustavoQuinalha
//g.quinalha

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Aprovação</title>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
    
    <link rel="stylesheet" href="mono/dist/monolog.css">
	<script src="mono/dist/monolog.js"></script>



<style>
#menu { width:95%; margin:0 auto; padding:10px; z-index:9999;}
body { background-color:#3498DB; text-align:center;}
img { margin:20px; padding:5px; background:#fff; text-align:center;opacity:0.9; height:400px; object-fit: cover; ;}
img:hover { }
#imagee { margin:10px; background:#ECF0F1; border-radius:20px; width:90%; text-align:center;width:390px;}
#imagee:hover { opacity:1.0; box-shadow:0px 0px 50px #2C3E50;}
#verifica { position:relative;}
#verif {top:30px; position:absolute; z-index:99; left:35px;}
.iinput { box-shadow:0px 0px 9px red;}
#resultado { width:90%; height:500px; background:red; margin:0 auto; position:fixed; z-index:999; top:100px; display:none;}
#some { display:non
;}
</style>


</head>

<body>

<?php
echo'<div id="resultado"></div>';
echo '
<div id="menu">
<div class="row demo-row">
        <div class="col-xs-12">
          <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <a class="navbar-brand" href="#">QUALIDADE WEBSPACE</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
			
			
			<form class="navbar-form navbar-right" action="#" role="search">
                <div class="form-group">
                
                   <select class="form-control select select-primary" data-toggle="select">
				   
				   
            <option value="1">Planning 5</option>
            <option value="1">Planning 4</option>
			<option value="1">Planning 3</option>
			<option value="1">Planning 2</option>
			<option value="1">Planning 1</option>

          </select>
                  
                </div>
              </form>
			  
			  
              <ul class="nav navbar-nav navbar-left">

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Enviar imagem<b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li>


<form method="post" enctype="multipart/form-data" action="recebeUpload.php">
  <div class="mdl-textfield mdl-js-textfield">
    <input class="form-control" type="file" name="arquivo">

  </div>

   <button class="btn btn-block btn-lg btn-primary">
  Salvar
</button>
<br>
</div>
</form>
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
        </div>
		</div>';
		

//Sua pasta
$files = glob("images/*.*");

$colCnt=0;

echo '<table border="0" cellspacing="0" style="width:90%" align="center">';

for ($i=1; $i<count ($files); $i++)
  {
  $colCnt++;
  if ($colCnt==1)
  echo '<tr>';
  echo '<td width="20%">';

  $num = $files[$i];
  $nme = (substr(substr($num,6,100),0,-4));

  
  echo '
 		
	      	
			<div id="imagee">
			<div id="verifica">
			<div id="verif"><input type="checkbox" checked data-toggle="switch" id="custom-switch-01" /></div> 
			<a href="'.$num.'" target="_blank"><img src="'.$num.'" align="absmiddle" width="90%" /></a>
			<h6><span class="demo-heading-note">'.$nme.'</h6>
 			<div class="btn-group">
   
   				  <a class="btn btn-primary" href="javascript:void();">Aprovar <span class="fui-check"></span></a>
            <a class="btn btn-default active" download="'.$num.'" href="'.$num.'" target="new">Baixar <span class="fui-upload"></span></a>
				    <a class="textareacopybtn btn btn-warning" href="javascript:void();">Link <span class="fui-link"></span></a>

  

        
          <a class="btn btn-danger" href="javascript:void();">Refazer<span class="fui-cross"></span></a>


	  
				
				</div>  
                </div>

			
				<br>
  </div>';
 // echo '<button class="js-textareacopybtn">enviar</button>';
  //echo ' <div id="some"><textarea class="js-copytextarea">http://www.webspacemarketing.com.br/qualidade/'.$num.'</textarea></div>';

  

  echo '</td>';

  if ($colCnt==3)
    {
    echo '';
    $colCnt=0;
    }
  }

echo '';


?>
  <script type="text/javascript">
var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

copyTextareaBtn.addEventListener('click', function(event) {
  var copyTextarea = document.querySelector('.js-copytextarea');
  copyTextarea.select();

  try {
    var successful = document.execCommand('copy');
    var msg = successful ? 'successful' : 'unsuccessful';
    console.log('Copying text command was ' + msg);
  } catch (err) {
    console.log('Oops, unable to copy');
  }
});
  </script>

 <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/vendor/video.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>
</body>
</html>
