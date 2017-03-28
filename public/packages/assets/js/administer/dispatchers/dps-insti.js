$(function(){

  var tempStates=[], tempCities=[], tempInstitutes=[];
  var states, cities;
  var instituteType = null;

  Institution.allInstitutes(function(institutes){
    tempInstitutes = JSON.stringify(institutes);
  });

  Institution.allCities(function(cities){
    tempCities = JSON.stringify(cities)
  });

  Institution.allStates(function(states){
    tempStates = JSON.stringify(states);
  });

  var intervalInstitutes = setInterval(function(){
    if (tempInstitutes != "") {
      institutes = JSON.parse(tempInstitutes);
      clearInterval(intervalInstitutes);
    }
  },1000);

  var intervalStates = setInterval(function(){
    if (tempStates != "") {
      states = JSON.parse(tempStates);
      clearInterval(intervalStates);
    }
  },1000);

  var intervalCities = setInterval(function(){
    if (tempCities != "") {
      cities = JSON.parse(tempCities);
      clearInterval(intervalCities);
    }
  },1000);

  $("body").on('change','#type',function(){
    instituteType = $("#type").val();
    var perro  = atrib(institutes,'tipo',instituteType);
    addInsti("#adIn-table>tbody",perro);
  });

  $("body").on('click','#add-insti',function(){
    if (instituteType == null) {
      Curiosity.noty.info("Por favor selecciona un tipo de institucion", "Atención");
    }else {
      modal();
      $("#adIn-state").empty();
      addStates(states,"#adIn-state");
      $('.select').material_select();
    }
  });

  $('body').on('change','#adIn-state',function() {
    var id = $('#adIn-state').val()
    $('#cities-cont').empty();
    $('#cities-cont').append(
      "<select class='select-city' id='adIn-city'>" +
      "</select>"
    );
    addCities(cities,id,'#adIn-city');
    $('.select-city').material_select();
  });

  $("body").on('click','#first-register',function(){
    ainstiController.save(instituteType);
  });

  $("body").on('click','.adIn-upd-btn',function(){
    Institution.infoInsti($(this).data('id'),function(info){
      modalUpdate(info);
    });
  });

  $("body").on('click','.adIn-delete',function(){
    ainstiController.delete($(this).data('id'))
  });

});

function addInsti(selector,obj){
  $.each(obj,function(i){
    $(selector).append($(
      "<tr>" +
        "<th scope='row'>" + obj[i].nombre + "</th>"  +
        "<td class='col-md-6 offset-md-3'>" +
          "<button type='button' data-id='" + obj[i].id + "' class='adIn-upd-btn btn btn btn-primary waves-effect' data-toggle='modal' data-target='#myModalRefresh'><i class='fa fa-refresh' aria-hidden='true'></i></button>" +
          "<button type='button' data-id='" + obj[i].id + "' class='btn btn-outline-primary waves-effect'><i class='fa fa-balance-scale' aria-hidden='true'></i></button>" +
          "<button type='button' data-id='" + obj[i].id + "' class='adIn-delete btn btn-outline-danger waves-effect'><i class='fa fa-trash' aria-hidden='true'></i></button>" +
        "</td>" +
      "</tr>"
    ));
  });
}

function addCities(obj,data,selector){
  $.each(obj,function(i){
    if (obj[i].estado_id == data) {
      $(selector).append(
        "<option value='" + obj[i].id + "'>" + obj[i].nombre + "</option>"
      );
    }
  });
}

function addStates(obj,selector){
  $.each(obj,function(i){
    $(selector).append($(
      "<option value='" + obj[i].id + "'>" + obj[i].nombre + "</option>"
    ));
  });
}

function modal(){

  if ($("#modals").length > 0) {
    $("#modals").empty();
  }

  $("#modals").append($(

  "<div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>" +
      "<div class='modal-dialog' role='document'>" +

          "<div class='modal-content'>" +

              "<div class='modal-header'>" +
                  "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>" +
                      "<span aria-hidden='true'>&times;</span>" +
                  "</button>" +
                  "<h4 class='modal-title w-100' id='myModalLabel'>Agregar Institucion</h4>" +
              "</div>" +

              "<div class='modal-body'>" +

                    "<div class='col-md-6'>" +
                      "<div class='card adIn'>" +
                        "<div class='card-block'>" +
                          "<img src='/packages/assets/media/images/child/emoji-good.png' alt=''>" +
                        "</div>" +

                      "</div>" +
                      "<form  id='adAv-imgForm'>" +
                        "<div class='md-form'>" +
                          "<div class='file-field'>" +
                            "<div class='btn btn-primary btn-rounded btn-sm'>" +
                              "<span>Choose file</span>" +
                              "<input type='file' id='adIn-img' name='adAv-img'>" +
                            "</div>" +
                            "<div class='file-path-wrapper'>" +
                              // "<input class='file-path validate' type='text' placeholder='Upload your file'>" +
                            "</div>" +
                          "</div>" +
                        "</div><br><br>" +
                      "</form>" +
                  "</div>" +
                    "<div class='col-md-6'>" +

                    "<form class='' >" +
                      "<div class='md-form'>" +
                        "<input type='text' id='adIn-name' class='form-control'>" +
                        "<label for='form1' class=''>Nombre</label>" +
                      "</div>" +

                      "<div class='md-form'>" +
                        "<input type='text' id='adIn-calle' class='form-control'>" +
                        "<label for='form1' class=''>Calle</label>" +
                      "</div>" +

                      "<div class='md-form'>" +
                        "<input type='text' id='adIn-colonia' class='form-control'>" +
                        "<label for='form1' class=''>Colonia</label>" +
                      "</div>" +

                      "<div class='md-form'>" +
                        "<input type'text' id='adIn-number' class='form-control'>" +
                        "<label for='form1' class=''>Numero</label>" +
                      "</div>" +

                      "<div class='md-form'>" +
                        "<input type='text' id='adIn-Cp' class='form-control'>" +
                        "<label for='form1' class=''>Codigo Postal</label>" +
                      "</div>" +

                      "<select class='select' id='adIn-state'>" +

                      "</select>" +

                      "<div id='cities-cont'>" +
                      "</div>" +

                    "</div>" +

                  "</form>" +
              "</div>" +

              "<div class='modal-footer'>" +
                  "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>" +
                  "<button type='button' class='btn btn-primary' id='first-register'>Save changes</button>" +
              "</div>" +
          "</div>" +

      "</div>" +
  "</div>" +

  "</div>"
  ))
}

function modalUpdate(info){

    if ($("#modals").length > 0) {
      $("#modals").empty();
    }

    $("#modals").append($(
      "<div class='modal fade' id='myModalRefresh' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>" +
          "<div class='modal-dialog' role='document'>" +

              "<div class='modal-content'>" +

                  "<div class='modal-header'>" +
                      "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>" +
                          "<span aria-hidden='true'>&times;</span>" +
                      "</button>" +
                      "<h4 class='modal-title w-100' id='myModalLabel'>Agregar Institucion</h4>" +
                  "</div>" +

                  "<div class='modal-body'>" +

                        "<div class='col-md-6'>" +
                          "<div class='card adIn'>" +
                            "<div class='card-block'>" +
                              "<img src='/packages/assets/media/images/child/emoji-good.png' alt=''>" +
                            "</div>" +

                          "</div>" +
                          "<form  id='adAv-imgForm'>" +
                            "<div class='md-form'>" +
                              "<div class='file-field'>" +
                                "<div class='btn btn-primary btn-rounded btn-sm'>" +
                                  "<span>Choose file</span>" +
                                  "<input type='file' id='adAv-img' name='adAv-img'>" +
                                "</div>" +
                                "<div class='file-path-wrapper'>" +
                                  // "<input class='file-path validate' type='text' placeholder='Upload your file'>" +
                                "</div>" +
                              "</div>" +
                            "</div><br><br>" +
                          "</form>" +
                      "</div>" +
                        "<div class='col-md-6'>" +

                        "<form class='' >" +
                          "<div class='md-form'>" +
                            "<input type='text' id='adIn-name' class='form-control' placeholder='" + info[1].nombre + "'>" +
                            "<label for='form1' class='active'>Nombre</label>" +
                          "</div>" +

                          "<div class='md-form'>" +
                            "<input type='text' id='adIn-calle' class='form-control' placeholder='" + info[0].calle + "'>" +
                            "<label for='form1' class='active'>Calle</label>" +
                          "</div>" +

                          "<div class='md-form'>" +
                            "<input type='text' id='adIn-colonia' class='form-control' placeholder='" + info[0].colonia + "'>" +
                            "<label for='form1' class='active'>Colonia</label>" +
                          "</div>" +

                          "<div class='md-form'>" +
                            "<input type='text' id='adIn-number' class='form-control' placeholder='" + info[0].numero + "'>" +
                            "<label for='form1' class='active'>Numero</label>" +
                          "</div>" +

                          "<div class='md-form'>" +
                            "<input type='text' id='adIn-Cp' class='form-control' placeholder='" + info[0].codigo_postal + "'>" +
                            "<label for='form1' class='active'>Codigo Postal</label>" +
                          "</div>" +

                          "<select class='select' id='adIn-state'>" +

                          "</select>" +

                          "<div id='cities-cont'>" +
                          "</div>" +

                        "</div>" +

                      "</form>" +
                  "</div>" +

                  "<div class='modal-footer'>" +
                      "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>" +
                      "<button type='button' class='btn btn-primary' id='first-register'>Save changes</button>" +
                  "</div>" +
              "</div>" +

          "</div>" +
      "</div>" +

      "</div>"
    ))
}

function atrib(obj,attr,data){
  var response=[];
  $.each(obj,function(index,obj,i){
    if (obj[attr] == data) {
      response[index] = obj;
    }
  });
  return response;
}
