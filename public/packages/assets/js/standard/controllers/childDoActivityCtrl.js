//controller for interactuate with game
var childDoActivityCtrl {
  save : function(data){
    if(typeof data == "object"){
      var childDoActivity = new ChildDoActivity(data.score,data.efficiency,data.hits,data.mistakes,data.average);
      childDoActivity.save("POST",function(response){
      });
    }else{
      
    }
  }
}