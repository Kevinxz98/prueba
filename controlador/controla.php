

<script type="text/javascript" >
    $('#btnInfo').click(function(){
        $.ajax({
        url: '<?php echo $urlQuery ?>',
        type: 'GET',
        success: function (response){
            console.log(response.result[0].id);
            let plantilla = '';
            for (var i = 0; i < response.result.length; i++) {
                plantilla += `
                <tr>
                    <td>${response.result[i].id}</td>
                    <td>${response.result[i].contact_no}</td>
                    <td>${response.result[i].lastname}</td>
                    <td>${response.result[i].createdtime}</td>
                </tr>
                `
            }
            $('#informacion').html(plantilla);
        }
    })
    })
        
    </script>