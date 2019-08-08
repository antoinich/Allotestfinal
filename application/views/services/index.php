<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>AlloTest</title>

	<style type="text/css">
		a {
			padding-left: 5px;
			padding-right: 5px;
			margin-left: 5px;
			margin-right: 5px;
		}
	</style>
</head>
<body>
<h2>All Services</h2>



<table border='1' width='100%' style='border-collapse: collapse;' id='postsList'>
	<thead>
	<tr>
		<th>Title</th>
		<th>Description</th>
		<th>Price</th>
		<th>Date</th>
	</tr>
	</thead>
	<tbody></tbody>
</table>


<div style='margin-top: 10px;' id='pagination'></div>

<script src="https://makitweb.com/demo/codeigniter_pagination_ajax/assets/js/jquery-3.3.1.js"></script>
<script type='text/javascript'>
    $(document).ready(function(){

        // Detect pagination click
        $('#pagination').on('click','a',function(e){
            e.preventDefault();
            var pageno = $(this).attr('data-ci-pagination-page');
            loadPagination(pageno);
        });

        loadPagination(0);


        function loadPagination(pagno){
            $.ajax({
                url: '<?=base_url()?>index.php/Api/loadRecord/'+pagno,
                type: 'get',
                dataType: 'json',
                success: function(response){
                    $('#pagination').html(response.pagination);
                    createTable(response.result,response.row);
                }
            });
        }

        function createTable(result,sno){
            sno = Number(sno);
            $('#postsList tbody').empty();
            for(index in result){
                var id = result[index].id;
                var title = result[index].title;
                var desc = result[index].description;
				var price = result[index].price;
                var date = result[index].published_at;
                var link = result[index].link;
                sno+=1;

                var tr = "<tr>";
                tr += "<td>"+ title +"</td>";
                tr += "<td>"+ desc +"</td>";
                tr += "<td>"+ price +"€</td>";
                tr += "<td>"+ date +"</td>";
                tr += "</tr>";
                $('#postsList tbody').append(tr);

            }
        }
    });
</script>
</body>
</html>
