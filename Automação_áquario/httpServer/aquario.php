
<html>
<header>
    <!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</header>
<style>
    #my{
zoom: 150%;
}
    </style>
<body>

<h3 class="light center"><b>Automação Aquário<b></h3><br>


<div class="row container center">                   
<form method="POST" action="aciona.php">
<h2>Luz interna</h2>
<button class="btn-large green" type="submit" value="On1" name="estado">On<i class="material-icons right"></i></button>
<button class="btn-large red" type="submit" value="Off1" name="estado">Off<i class="material-icons right"></i></button>
</br>
<h2>Bomba de ar</h2>
<button class="btn-large green" type="submit" value="On2" name="estado">On<i class="material-icons right"></i></button>
<button class="btn-large red" type="submit" value="Off2" name="estado">Off<i class="material-icons right"></i></button>
</br>
<!-- 
<h5>Filtro de água</h5>
<button class="btn-large green" type="submit" value="On3" name="estado">On<i class="material-icons right"></i></button>
<button class="btn-large red" type="submit" value="Off3" name="estado">Off<i class="material-icons right"></i></button>

</br>
Desativado
<button class="btn green" type="submit" value="On4" name="estado">On<i class="material-icons right"></i></button>
<button class="btn red" type="submit" value="Off4" name="estado">Off<i class="material-icons right"></i></button>
-->
</form>
</div>
<script type="text/javascript">
document.body.style.zoom="300%"
</script>

</body>
</html>
