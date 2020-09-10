<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="P.VERT | Pôle web service communication OMP">

    <title><?php echo "".$titlePage."";?></title>

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.fancytable/dist/fancyTable.min.js"></script>
<style>
    td, th {

    
    }
    td,th {
        padding: 10px 5px;
        border:1px solid #DDD;
        vertical-align: top;
    }

    th:nth-child(3) {
        width:100px;
    }

    th:nth-child(n+6) {
        width:300px;
    }

</style>
<?php 
/**
 * Dod fancyTable : https://www.jqueryscript.net/table/sorting-filtering-pagination-fancytable.html
 */
?>
<script type="text/javascript">
    $(document).ready(function() {
        $(".sortable").fancyTable({
            sortColumn:0,
            pagination: true,
            perPage:10,
            globalSearch:true
        });		

        $('.modal').modal();
        $('.tooltipped').tooltip();
    });

</script>

</head>
<body>
