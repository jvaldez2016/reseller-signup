
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
        { data: 'name', name: 'name'},
        { data: 'email', email: 'email' },
        { data: 'completed', completed: 'completed' },
        { data: 'created_at', created_at: 'created_at' },
        { data: 'updated_at', updated_at: 'updated_at' },

        {render:function(data, type, row){
            return "<a href='/user/"+ row.id +"'>" + '<button class="btn btn-primary"> View Details</button>' + "</a>"
            }},

        ]
    });
});


