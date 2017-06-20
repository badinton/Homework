var Edit = function() {
    var dat = {'name': localStorage.getItem("name"),'img': localStorage.getItem("img"),'university': localStorage.getItem("university"),'highschool': localStorage.getItem("highschool"),'email': localStorage.getItem("email"),'phone': localStorage.getItem("phone"),'id': localStorage.getItem("id"),'address': localStorage.getItem("address"),'facebook': localStorage.getItem("facebook")}
	console.log(dat)
	var activitykeep;
	var arrayActivity = ["game","card","music","basketball",'football'];
	var phototmp;
	var spphoto
	dat.activity = ["game","card","music","basketball",'football']
	this.initialize = function() {
		this.$el = $('<div/>');
		this.$el.on('click', '.activity',this.saveActivity);
		this.render();
		}
		this.saveActivity = function() {
			activitykeep = [];
	for (var i = 0; i < arrayActivity.length; i++) {
	var x = document.getElementById(dat.activity[i]+"-check").checked;
     if(x){
     	arrayActivity[i] =  dat.activity[i];

     }
     else{
     	arrayActivity[i] =  null;
     }
     }
     console.log(arrayActivity)
	for (var i = 0 ; i <  arrayActivity.length ; i++) {
        if(arrayActivity[i]){
        activitykeep.push({activity :arrayActivity[i]});
   	 }
  	}
    var tmp = JSON.stringify(activitykeep);
      localStorage.setItem('activity',tmp);
      console.log(activity)
       
 }
     

  

    this.render = function() {
        this.$el.html(this.template(dat));
        return this;
    }
        this.initialize();
    
}
