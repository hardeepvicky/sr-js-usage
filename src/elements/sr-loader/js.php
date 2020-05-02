$(".loader").srLoader();

$(".loader").on("sr-loader.onShown", function()
{
    console.log("loaded shown");
    console.log($(this));
});

$(".loader").trigger("sr-loader.show");
