$(function(){

    var typeSave = null;
    var var_instution = null;
    var object = null;
    var var_id = null;

    $("#agf-selectPhoto").click(function(event) {
        $("#agf_photo").trigger('click');
    });

    $("body").on("click", ".agf-btnround-conf", function(){
        var_instution = $(this).data('h');
        admChHomController.getChildren(var_instution);
        $("#agf-row-inst").hide();
        $("#agf-row-children").show();
        $("#agf-row-children").addClass('animated zoomIn');
    });

    $("body").on("click", "#agf-back", function(){
        $("#adf-boxChildren").empty();
        $("#agf-row-children").hide();
        $("#agf-row-inst").show();
        $("#agf-row-inst").addClass('animated zoomIn');
    });

    $("body").on("click", ".agf-btnround-confChild", function(){
        var_id = parseInt($(this).data('o').id);
        let object;
        try {
            object = JSON.parse($(this).data('o'));
        } catch (e) {
            object = $(this).data('o');
        }
        console.log(object);
        admChHomController.fillData(object, $(this).data('f'));
        typeSave = "update";
        $("#agf-modal").modal("show");
    });

    $("body").on("click", "#agf-btnReg", function(){
        admChHomController.photo = '/packages/assets/media/images/padrino_curiosity/child-default.png';
        $("#agf_ph").attr('src', admChHomController.photo);
        typeSave = "registry";
        $("#agf-form input").val("");
        $("#agf-modal").modal("show");
    });

    $("body").on("click", "#agf-save", function(){
        admChHomController.saveChild(var_instution, var_id, typeSave);
    });

    $("#agf_photo").change(function(event) {
        admChHomController.selectFile($(this));
    });

    $("#agf-resetPhoto").click(function(event) {
        admChHomController.resetImage();
    });

    $("#agf-cancel").click(function(event) {
        admChHomController.resetImage();
    });

    $("body").on('click', '.agf-btnround-hideChild', function(){
        let id = $(this).data('c');
        let messageDialog = {
            title : "Espera un momento",
            text: "Hemos detectado que esta actividad ya cuenta con un juego, elige la opción que deseas realizar.",
            type: "question"
        }
        Curiosity.notyInput("Escribe la palabra ELIMINAR para continuar.","text",function(input){
            if(input == "ELIMINAR" || input == "eliminar"){
                admChHomController.deleteChild(id);
            }
        });
    });

});
