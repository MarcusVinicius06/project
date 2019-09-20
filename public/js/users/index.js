$(()=>{
    $('#users').DataTable( {
        "language"  : {
            "url"   : "http://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
        },
        "processing": true,
        "serverSide": true,
        "ajax"      : getDataUsersUrl,
        "columns"   : [
            {data: "name",  name: "name"},
            {data: "email", name: "email", orderable: false},
            {data: "group", name: "group", orderable: false, render:function (group) {
                var groups = ``;
                group.forEach(element => {
                    groups +=`<span class="label bg-blue">${element}</span> &nbsp;`;
                });

                return groups;
            }},
            {data: "status", name: "status", orderable: false, render: function (status) {
                if (status) {
                    return `<span class="label label-success">Ativado</span>`;
                }
                return `<span class="label label-danger">Desativado</span>`;
            }},
            {data: "action",  name: "action", orderable : false, render: function (action) {
                let token = $('meta[name="csrf-token"]').attr('content');
                return `<div >
                    <form method="post" class="btn-group" action="${action.destroy}">
                    <a href = "${action.edit}" class = "btn btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="${action.show}" class="btn btn-primary show-user"><i class = "fa fa-eye"></i></a>
                        <input type="hidden" name="_token" value="${token}">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger delete-user"><i class = "fa fa-trash"></i></button>
                    </form>

                </div>`;
            }}
        ]
    });
});