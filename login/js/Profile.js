var Profile = function() {
    var name;
    var dat = {'name': localStorage.getItem("name"),'img': localStorage.getItem("img"),'university': localStorage.getItem("university"),'highschool': localStorage.getItem("highschool"),'email': localStorage.getItem("email"),'phone': localStorage.getItem("phone"),'id': localStorage.getItem("id"),'address': localStorage.getItem("address"),'facebook': localStorage.getItem("facebook")}
    tmp = localStorage.getItem("activity"); 
    dat.activity = JSON.parse(tmp)
    console.log(dat.img)
	this.initialize = function() {
		this.$el = $('<div/>');
       
        this.render();		
    }
   
    this.render = function() {
        this.$el.html(this.template(dat));
        return this;
    }
   
        this.initialize();
    
}