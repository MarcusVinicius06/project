$(()=>{
    $('#roles').DataTable( {
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
        },
        "processing": true,
        "serverSide": true,
        "ajax": getDataRolesUrl,
        "columns":[
            {data: "name",          name: "name"},
            {data: "permissions",   name: "permissions", orderable: false,
                render: function (permissions) {

                    var permissoes = ``;
                    permissions.forEach(element => {
                        permissoes += `<span class="label bg-blue">${element}</span> &nbsp;`;
                    });

                    return permissoes;
                }
            },
            {data: "action",        name: "action",      orderable: false,
                render: function (action) {
                    let token = $('meta[name="csrf-token"]').attr('content');
                    return `<form method="post" action="${action.delete}" id="destroy-role" class="btn-group">
                        <a href = "${action.edit}" class = "btn btn-warning"><i class="fa fa-edit"></i></a>

                        <input type="hidden" name="_token" value="${token}">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger delete-user"><i class = "fa fa-trash"></i>
                        </button>
                    </form>`;
                }
            }
        ]
    });
});