<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 
   <!-- include libraries(jQuery, bootstrap) -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
   
   <link rel="stylesheet" href="{{url('/public')}}/admintheme/assets/css/style.css">
   <link rel="stylesheet" href="{{url('/public')}}/admintheme/custom/custom.css">
   <style>
       .otherPage .form-control{
text-transform: capitalize;
}
.required label:after {
  content:"*";color:red;
  margin-left: 4px;
  vertical-align: middle;
  font-size: 20px;
}
   </style>
</head>
<body class="otherPage">
  <div class="loader" id="loader"><div class="spinner"></div></div>  
        <div id="content" class="content">
@yield('content')
        </div>
        
        <script src="{{asset('public/admintheme/plugins/jquery-3.6.0.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#summernote').summernote({
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
});
            function categoryChange(item){
               if(item.value == 2){
                $('#thumbnail').show();
               }
               else{
                $('#thumbnail').hide();
               }
            }
            function refresh(){
                location.reload();
            }
            function loading(){
                $('#loader').addClass('active');
            }
            </script>  
             <script>                 
            
                    function img(data){
                        console.log(data.value);
                    }


                    $(document).ready(function() { 
        $(".btn-success.add").click(function(){ 
            var html = $(".clone").html();
            $(".increment").after(html);
        });
        
        $("body").on("click",".btn-danger.remove",function(){ 
            $(this).parents(".control-group").remove();
        });
        });
        
        function checkStatus(elm){
            console.log(elm.value);
            if(elm.value == "Reject"){
                // $("#reason").removeClass="d-none";
                document.getElementById("reason").classList.remove("d-none");
            }
            else{
                // $("#reason").addClass="d-none";
                document.getElementById("reason").classList.add("d-none");
            }
        }

        (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }

      form.classList.add('was-validated');
    }, false);
  });
})();
        function getStateCode(e){
          let str = e.value;
          let state_code;
          if(str.length == 15){
            state_code = str.slice(0,2);
            fetchStateCode(state_code);
          }
          else{
              alert("Please enter a valid GSTIN");
          }
      }
     async function fetchStateCode(state_code){
        const response = await fetch("<?php echo route('state-code'); ?>"+"/?state_code="+state_code);
        const state_codes = await response.json();
        document.getElementById("client_state").value = state_codes.data.state_name;
        document.getElementById("state_code").value = state_code;
        console.log(state_codes);
      }
      function addClient(elm){
          if(elm.value == "addNew"){
              window.open("@php echo route('add-client') @endphp",'_self');
          }
      }
                </script> 
</body>
</html>