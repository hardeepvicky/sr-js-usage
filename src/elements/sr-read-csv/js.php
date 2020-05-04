$("#my-file").srReadCSV(
{
    onRead : function (data)
    {
        try
        {
            console.log(
                $.sr.csv.combineHeaderToRow(data, {"Strike Point Type" : "strike_point"})
            );
        }
        catch(e)
        {
            $.sr.error.msg(e);
        }
    }
});