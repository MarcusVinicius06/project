$(()=>{
    $('#roles').DataTable( {
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
        },
        "processing": true,
        "serverSide": true,
        "ajax": getDataRolesUrl,
        "columns":[
            {data: "name", name: "name"},
            {data: "action",  name: "action", orderable : false, render: function (action) {
                return `<div class="btn-group">
                    <a href = "${action.edit}" class = "btn btn-warning"><i class="fa fa-edit"></i></a>
                    <button type = "button" data-route = "${action.delete}" class="btn btn-danger delete-user"><i class = "fa fa-trash"></i>
                    </button>
                </div>`;
            }}
        ],
        dom: 'Bfrtip',
        buttons: [
            {
                text: 'Adicionar',
                className:'btn btn-flat btn-success',
                action: function ( e, dt, node, config ) {
                    window.location = createRolesUrl
                }
            },
        ]
    });
});