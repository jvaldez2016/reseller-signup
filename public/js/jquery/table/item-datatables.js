
$(document).ready(
    function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax:{
            url:'/allitem',
            type:'GET',

        },
        columns: [
        { data: 'id',id: 'id'},
        { data: 'name',id:'id'
        // render:function(data, type, row){
        //     return "<a href='/item/"+ row.id +"'>" + row.name + "</a>"
        //     }
    },

        { data: 'suggested_retail_price', suggested_retail_price: 'suggested_retail_price Retail Price' },
        { data: 'reseller', reseller: 'reseller' },
        { data: 'distributor', distributor: 'distributor' },
        { data: 'mega_distributor', mega_distributor: 'mega_distributor' },
        {render:function(data, type, row){
            return "<a href='/item/"+ row.id +"'>" + '<button class="btn btn-warning"> Edit</button>' + "</a>"
            }},
    ],


    });
});


