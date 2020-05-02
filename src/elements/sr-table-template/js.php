$(".sr-table-template").srTableTemplate(
{
    beforeRowAdd : function(table, id)
    {
        console.log("event beforeRowAdd " + id);
        
        return true;
    },
    afterRowAdd : function(table, id, tr)
    {
        console.log("event afterRowAdd " + id);
        
        return true;
    },
    beforeRowDel : function(table, id, tr)
    {
        console.log("event beforeRowDel " + id);
        
        return true;
    },
    afterRowDel : function(table, id, tr)
    {
        console.log("event afterRowDel " + id);
        
        return true;
    },
});
