<?php

include ('src/header.php');

?>

<html>
 <head>
  <title> PHP Ajax</title>

<script type="text/javascript" language="javascript" src="script.js"></script>
<script type="text/javascript" language="javascript" src="script2.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
 </head>
 <body>

 

  <div class="container">
   <br />
      <table id="usuario" class="table table-striped table-bordered" style="width:100%">
       <thead>
        <tr>
         <th>ID</th>
         <th>NOMBRE</th>
         <th>APELLIDO</th>
         <th>CORREO</th>
        </tr>
       </thead>
       <tbody></tbody>
      </table>
   <a href="#addProductModal" class="btn btn-primary btn-lg active"  data-toggle="modal" role="button" aria-pressed="true"
  >Agregar Usuario</a
  </div>
  <br />
  <br />
 </body>
</html>

<script type="text/javascript" language="javascript" src="script.js"></script>
<script type="text/javascript" language="javascript" src="script2.js"></script>


<?php

include ('modal_add.php');

?>

<?php

include ('src/footer.php');

?>