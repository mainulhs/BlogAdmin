jQuery(document).ready(function(){
    //for logo page validation
        $("#logoForm").on("click", function(){
            $(this).validate({
              

                errorElement: "div",
                errorPlacement: function(error, element) {
                    error.appendTo( element.next(".form-error").html(''));
                    //error.appendTo($("div#errorcont"));
                },
                rules: {
                      'title': {
                          required:true
                      }

                  },
                  messages:{
                      'title': {
                          required:"Logo Required! ",
                      }
                  },
                  success: function(label) {
                      label.text("").addClass("success");
                  }
            });
        });
    //for slide page validation
        $("#slide").on("click", function(){
            $(this).validate({
              

                errorElement: "div",
                errorPlacement: function(error, element) {
                    error.appendTo( element.next(".form-error").html(''));
                    //error.appendTo($("div#errorcont"));
                },
                rules: {
                      'title': {
                          required:true
                      },
                      'caption': {
                          required:true
                      }
                  },
                  messages:{
                      'title': {
                          required:"Image title Required! ",
                      },
                      
                      'caption': {
                          required:"Caption Required! ",
                      }
                  },
                  success: function(label) {
                      label.text("").addClass("success");
                  }
            });
        });
    //for gallary page validation
        $("#gallary").on("click", function(){
            $(this).validate({
              

                errorElement: "div",
                errorPlacement: function(error, element) {
                    error.appendTo( element.next(".form-error").html(''));
                    //error.appendTo($("div#errorcont"));
                },
                rules: {
                      'imageName': {
                          required:true
                      },
                      'description': {
                          required:true
                      }
                  },
                  messages:{
                      'imageName': {
                          required:"Image Name Required! ",
                      },
                      
                      'description': {
                          required:"Description Required! ",
                      }
                  },
                  success: function(label) {
                      label.text("").addClass("success");
                  }
            });
        });
    //for article page validation
        $("#article").on("click", function(){
            $(this).validate({
              

                errorElement: "div",
                errorPlacement: function(error, element) {
                    error.appendTo( element.next(".form-error").html(''));
                    //error.appendTo($("div#errorcont"));
                },
                rules: {
                      'fileName': {
                          required:true
                      },
                      'description': {
                          required:true
                      }
                  },
                  messages:{
                      'fileName': {
                          required:"File Name Required! ",
                      },
                      
                      'description': {
                          required:"Description Required! ",
                      }
                  },
                  success: function(label) {
                      label.text("").addClass("success");
                  }
            });
        });
    //for service page validation
        $("#service").on("click", function(){
            $(this).validate({
              

                errorElement: "div",
                errorPlacement: function(error, element) {
                    error.appendTo( element.next(".form-error").html(''));
                    //error.appendTo($("div#errorcont"));
                },
                rules: {
                      'serviceName': {
                          required:true
                      },
                      'description': {
                          required:true
                      }
                  },
                  messages:{
                      'serviceName': {
                          required:"Service Name Required! ",
                      },
                      
                      'description': {
                          required:"Description Required! ",
                      }
                  },
                  success: function(label) {
                      label.text("").addClass("success");
                  }
            });
        });
    //for team page validation
        $("#team").on("click", function(){
            $(this).validate({
              

                errorElement: "div",
                errorPlacement: function(error, element) {
                    error.appendTo( element.next(".form-error").html(''));
                    //error.appendTo($("div#errorcont"));
                },
                rules: {
                      'p_name': {
                          required:true
                      },
                      'designation': {
                          required:true
                      },
                     'content': {
                          required:true
                      }
                  },
                  messages:{
                      'p_name': {
                          required:"Person Name Required! ",
                      },
                      
                      'designation': {
                          required:"Designation Required! ",
                      },
                     'content': {
                          required:"Description Required! ",
                      }
                  },
                  success: function(label) {
                      label.text("").addClass("success");
                  }
            });
        });
    //for portfolio validation
        $("#portfolio").on("click", function(){
            $(this).validate({
              

                errorElement: "div",
                errorPlacement: function(error, element) {
                    error.appendTo( element.next(".form-error").html(''));
                    //error.appendTo($("div#errorcont"));
                },
                rules: {
                      'title': {
                          required:true
                      },
                      'description': {
                          required:true
                      }
                  },
                  messages:{
                      'p_name': {
                          required:"Image title Required! ",
                      },
                      
                      'description': {
                          required:"Description Required! ",
                      }
                  },
                  success: function(label) {
                      label.text("").addClass("success");
                  }
            });
        });
     //for testimonial validation
    $("#testimonial").on("click", function(){
            $(this).validate({
              

                errorElement: "div",
                errorPlacement: function(error, element) {
                    error.appendTo( element.next(".form-error").html(''));
                    //error.appendTo($("div#errorcont"));
                },
                rules: {
                      'p_name': {
                          required:true
                      },
                      'designation': {
                          required:true
                      },
                      'company':{
                          required:true;  
                      },
                      'comment':{
                          required:true;
                      }
                  },
                  messages:{
                      'p_name': {
                          required:"Person Name Required! ",
                      },
                      
                      'designation': {
                          required:"Designation Required! ",
                      },
                       'company':{
                          required:"Company Name Required! ", 
                      },
                      'comment':{
                          required:"Description Required! ",
                      }
                  },
                  success: function(label) {
                      label.text("").addClass("success");
                  }
            });
        });
      });