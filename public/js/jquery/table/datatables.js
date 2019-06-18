
$(document).ready(
    function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax:{
            url:'/allusers',
            type:'GET',

        },
        columns: [
        { data: 'id',id: 'id'},
        { data: 'name', name: 'name',
        render:function(data, type, row){
            return "<a href='/user/"+ row.id +"'>" + row.name + "</a>"
            }},

        { data: 'email', email: 'email' },
        { data: 'completed', completed: 'completed' },
        { data: 'created_at', created_at: 'created_at' },
        { data: 'updated_at', name: 'updated_at' }
        ]
    });
});


