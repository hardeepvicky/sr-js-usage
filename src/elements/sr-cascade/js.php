$(".my-cascade").cascade(
{
    placeholder : "{v}",
    beforeGet : function(src, url)
    {
        return url;
    },
    afterGet : function(src, dest, response)
    {
        return response;
    },
    beforeValueSet : function(src, dest, val)
    {
        return val
    },
    afterValueSet : function(src, dest, val)
    {
    }
});

$("#country").trigger("sr-cascade.change", {pageLoad : 1});