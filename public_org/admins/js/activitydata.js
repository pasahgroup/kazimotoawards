$(document).ready(function(){

      // Department Change
      $('#classg').change(function(){

         // ward
         var v = $(this).val();  
           // Empty the dropdown
    

    // alert(v);

   $('#sessionc').find('option').not(':first').remove();
    
         // AJAX request 
         $.ajax({
           url: 'getC/'+v,
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
             if(response['dataN'] != null){
               len = response['dataN'].length;
             }

             if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){

                 var id = response['dataN'][i].subcategory;
                 var name = response['dataN'][i].subcategory;             
                 var option = "<option value='"+id+"'>"+name+"</option>";                
                 $("#sessionc").append(option);
               }
             }                        
             //DAta are here
                   
           }
        });
      });

    });

//#village2
$(document).ready(function(){

      // Department Change
      $('#wardP').change(function(){

         // ward
          var w = $(this).val(); 
          //var p = $('#program_name').val();   
         // Empty the dropdown
         $('#villageP').find('option').not(':first').remove();
        // $('#project_name').find('option').not(':first').remove();
        // $('#project_activities').find('option').not(':first').remove();
   
         // AJAX request 
         $.ajax({
           url: 'getVillageProgram/'+w,
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
             if(response['dataV'] != null){
               len = response['dataV'].length;
             }
 
             if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){

                 var id = response['dataV'][i].village;
                 var name = response['dataV'][i].village;             
                 var option = "<option value='"+id+"'>"+name+"</option>";                
                 $("#villageP").append(option);
               }
             }                        
                      
           }
        });
      });
    });
//Village
$(document).ready(function(){

      // Department Change
      $('#ward').change(function(){

         // ward
          var w = $(this).val(); 
          var p = $('#program_name').val();  
          //alert(p); 
         // Empty the dropdown
         $('#village').find('option').not(':first').remove();
         $('#project_name').find('option').not(':first').remove();
         $('#project_activities').find('option').not(':first').remove();
   
         // AJAX request 
         $.ajax({
           url: 'getW/'+p+'/getVillage/'+w,
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
             if(response['dataV'] != null){
               len = response['dataV'].length;
             }
 
             if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){

                 var id = response['dataV'][i].village;
                 var name = response['dataV'][i].village;             
                 var option = "<option value='"+id+"'>"+name+"</option>";                
                 $("#village").append(option);
               }
             }                        
                      
           }
        });
      });
    });
//Fill project name
$(document).ready(function(){

      // Department Change
      $('#village').change(function(){

         // ward
          var pr = $(this).val(); 
          //var w = $('#program_name').val();   
         // Empty the dropdown
          $('#project_name').find('option').not(':first').remove();
         $('#project_activities').find('option').not(':first').remove();
   
         // AJAX request 
         $.ajax({
           url: 'getProject/'+pr,
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
             if(response['dataPr'] != null){
               len = response['dataPr'].length;
             }
             if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){

                 var id = response['dataPr'][i].project_name;
                 var name = response['dataPr'][i].project_name;             
                 var option = "<option value='"+id+"'>"+name+"</option>";    
                 $("#project_name").append(option);
               }
             }                        
                      
           }
        });
      });
    });
//Project name
    $(document).ready(function(){

      // Department Change
      $('#project_name').change(function(){

         // Department id
         var val = $(this).val();

         // Empty the dropdown
         $('#project_activities').find('option').not(':first').remove();
         // AJAX request 
         $.ajax({
           url: 'getActivities/'+val,
           type: 'get',
           dataType: 'json',
           success: function(response){
    
             var len = 0;
             if(response['dataA'] != null){
               len = response['dataA'].length;
             }

             if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){

                 var id = response['dataA'][i].bundle_name;
                 var name = response['dataA'][i].bundle_name;             
                 var option = "<option value='"+id+"'>"+name+"</option>"; 
                 $("#project_activities").append(option);
               }
             }
           }
        });

      });

    });

   

    //Project tasks
       $(document).ready(function(){

      // Department Change
      $('#project_activities').change(function(){
   //$('#dts').clear();
      $("#dts tbody").empty();
         // Department id
         var t = $(this).val();
         var v= $('#village').val();  
         // Empty the dropdown
        // $('#task_name').find('option').not(':first').remove();
         // AJAX request        

    $.ajax({

          url: 'getTasks2/'+t+'/getVillage/'+v,         
          // url: 'getTasks/'+t,
           type: 'get',
           dataType: 'json',
           success: function(response){
    
             var len = 0;
             if(response['dataT2'] != null){
               len = response['dataT2'].length;
              }  
                if(len > 0){              
                for(var i=0; i<len; i++){

                 var id = response['dataT2'][i].task_name;
                 var name = response['dataT2'][i].task_name;     
                         
                 var option = "<tr><td> "+name+" <input type='hidden' name='task_name[]' id='"+id+"' value='"+name+"'></td><td><input type='text' name='value[]'></td><td><input type='text' name='year[]'></td></tr>";
                 $("#dts").append(option);
               }
             }
             else
             {
              //---------------
          $.ajax({
          url: 'getTasks3/'+t+'/getVillage/'+v, 
           type: 'get',
           dataType: 'json',
           success: function(response){
    
             var len = 0;
             if(response['dataT3'] != null){
               len = response['dataT3'].length;
             }

             if(len > 0){
               // Read data and create <option >
              alert("All data on this particular project activity already exist");
             }
             else{
//Zone retrieving data from Activity table
 $.ajax({
           url: 'getTasks/'+t,
           type: 'get',
           dataType: 'json',
           success: function(response){
    
             var len = 0;
             if(response['dataT'] != null){
               len = response['dataT'].length;
             }

             if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){

                 var id = response['dataT'][i].task_name;
                 var name = response['dataT'][i].task_name;     
                         
                 var option = "<tr><td> "+name+" <input type='hidden' name='task_name[]' id='"+id+"' value='"+name+"'></td><td><input type='text' name='value[]'></td><td><input type='text' name='year[]'></td></tr>";
                 $("#dts").append(option);
               
               }
             }
           }
        });
//End of Activities table

             }
           }
        });
              
             }
           }
        });



      });

    });

    //SCRIPT