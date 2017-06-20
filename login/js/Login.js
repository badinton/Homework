var Login = function() {
	this.initialize = function() {
		this.$el = $('<div/>');
		 // this.$el.on('click', '#btnLogin', this.Logining);
		this.render();
		}
    this.render = function() {
        this.$el.html(this.template());
        return this;
    }
    // this.Logining = function()  {
    // 	  { /*function to check userid & password*/
    //             /*the following code checkes whether the entered userid and password are matching*/
                
    //             if(form.userid.value == "myuserid" && form.pswrd.value == "mypswrd") {
    // 	 		 window.location.assign( window.location.href+"#profile")
    //             }
    //             else {
    //                 alert("Error Password or Username")
    //             }
    //         }
    //  }
        this.initialize();
    
}