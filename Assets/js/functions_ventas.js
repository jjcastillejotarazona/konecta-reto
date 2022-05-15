//document.write(`<script src="${base_url}/Assets/js/plugins/JsBarcode.all.min.js"></script>`);
let tableProductos;
let rowTable = "";
$(document).on('focusin', function(e) {
    if ($(e.target).closest(".tox-dialog").length) {
        e.stopImmediatePropagation();
    }
});
tableProductos = $('#tableVentas').dataTable( {
    "aProcessing":true,
    "aServerSide":true,
    "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
    },
    "ajax":{
        "url": " "+base_url+"/Ventas/getVentas",
        "dataSrc":""
    },
    "columns":[
        {"data":"id"},
        {"data":"nombre"},
        {"data":"stock"},
    ],
     
    'dom': 'lBfrtip',
    'buttons': [
     {
            "extend": "excelHtml5",
            "text": "<i class='fas fa-file-excel'></i> Excel",
            "titleAttr":"Exportar a Excel",
            "className": "btn btn-success",
            "exportOptions": { 
                "columns": [ 0, 1, 2] 
            }
        },{
            "extend": "pdfHtml5",
            "text": "<i class='fas fa-file-pdf'></i> PDF",
            "titleAttr":"Exportar a PDF",
            "className": "btn btn-danger",
            "exportOptions": { 
                "columns": [ 0, 1, 2] 
            }
        },{
            "extend": "csvHtml5",
            "text": "<i class='fas fa-file-csv'></i> CSV",
            "titleAttr":"Exportar a CSV",
            "className": "btn btn-info",
            "exportOptions": { 
                "columns": [ 0, 1, 2] 
            }
        }
    ],
    "resonsieve":"true",
    "bDestroy": true,
    "iDisplayLength": 10,
    "order":[[2,"desc"]]  
});
window.addEventListener('load', function() {
    if(document.querySelector("#formVentas")){
        let formVentas = document.querySelector("#formVentas");
        formVentas.onsubmit = function(e) {
            e.preventDefault();
            let strNombre = document.querySelector('#listProducto').value;
            let intCantidad = document.querySelector('#txtCantidad').value;

            if(strNombre == '' || intCantidad == '')
            {
                swal("Atención", "Todos los campos son obligatorios." , "error");
                return false;
            }
            
            let request = (window.XMLHttpRequest) ? 
                            new XMLHttpRequest() : 
                            new ActiveXObject('Microsoft.XMLHTTP');
            let ajaxUrl = base_url+'/Ventas/setVenta'; 
            let formData = new FormData(formVentas);
            request.open("POST",ajaxUrl,true);
            request.send(formData);
            console.log(request);
            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    let objData = JSON.parse(request.responseText);
                    if(objData.status)
                    {
                        console.log(objData);
                        $('#modalFormVentas').modal("hide");
                        formVentas.reset();
                        swal("", objData.msg ,"success");
                        document.querySelector("#idProducto").value = objData.idproducto;
                      //  document.querySelector("#containerGallery").classList.remove("notblock");

                        if(rowTable == ""){
                            tableProductos.api().ajax.reload();
                        }else{
                           htmlStatus = intStatus == 1 ? 
                            '<span class="badge badge-success">Activo</span>' : 
                            '<span class="badge badge-danger">Inactivo</span>';
                            rowTable.cells[1].textContent = strNombre;
                            rowTable.cells[2].textContent = intCodigo;
                            rowTable.cells[3].textContent = smony+strPrecio;
                            rowTable.cells[4].textContent = Peso;
                            rowTable.cells[5].textContent = intCategoria;
                            rowTable.cells[6].textContent = intStock;
                            rowTable.cells[7].innerHTML =  objData.new_date;
                            rowTable.cells[8].innerHTML =  htmlStatus;
                            rowTable = ""; 
                        }
                    }else{
                        swal("Error", objData.msg , "error");
                    }
                }
               // divLoading.style.display = "none";
                return false;
            }
        }
    }


    //fntInputFile();
    fntProductos();
}, false);


function fntProductos(){
    if(document.querySelector('#listProducto')){
        let ajaxUrl = base_url+'/Productos/getSelectProductos';
        let request = (window.XMLHttpRequest) ? 
                    new XMLHttpRequest() : 
                    new ActiveXObject('Microsoft.XMLHTTP');
        request.open("GET",ajaxUrl,true);
        request.send();
        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200){
                document.querySelector('#listProducto').innerHTML = request.responseText;
               // $('#listProducto').selectpicker('render');
            }
        }
    }
}

function openModal()
{
    rowTable = "";
    document.querySelector('#idProducto').value ="";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML ="Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Producto";
    document.querySelector("#formVentas").reset();
    $('#modalFormVentas').modal('show');

}