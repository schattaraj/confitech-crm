$(document).ready(function(){
    $('.edit-btn').click(function(e){
    e.preventDefault();
    console.log("hellloe");
    $(".get_page").addClass("active");
    $(".get_page iframe").attr("src",e.target.href);
    console.log(e.target.href);
    });
     
    $(document).mouseup(function (e){
    $(".get_page").removeClass("active");
    });
    });
    
    function getDeleteRoute($route)
    {
        $(document).find('#confirm_del').attr('href',$route);
    }
    $('.get_page').on("click",()=>{
      hideModal();
    })
    
    function hideModal(){
        $(".get_page").removeClass("active");
        let check = $(".get_page").hasClass('active');
        if(!check){
            location.reload();
        }
    }

        
    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
  console.log("Hello");
    //  $.get("http://localhost/new-laravel/menu", function (data) {
    //      console.log(data);
            //    $('#userShowModal').modal('show');
            //    $('#user-id').text(data.id);
            //    $('#user-name').text(data.name);
            //    $('#user-email').text(data.email);
        //    })
        /* When click show user */
        //  $('body').on('click', '#show-user', function () {
        //    var userURL = $(this).data('url');
        //    $.get(userURL, function (data) {
        //        $('#userShowModal').modal('show');
        //        $('#user-id').text(data.id);
        //        $('#user-name').text(data.name);
        //        $('#user-email').text(data.email);
        //    })
        // });
        
     });
     let menuData;
     let dataList = [];
     let base_url = "http://localhost/new-laravel/";
     function fetchMenu(target){        
        $.get(base_url+"menu/"+target.value, function (data) {
            console.log(data.length);
            menuData = data;
            let html = "<option>Select an item</option>";
            for(let i = 0; i<data.length; i++){
                html = html +"<option value='"+i+"'>"+data[i].item_name+"</option>";
                $("#menu").html(html);
                $('#menu').removeAttr("disabled")
            }
        }); 
      }
   
      function selectMenu(target){
          let index = target.value;
          $("#menu-name").val(menuData[index].item_name);
          $("#price").val(menuData[index].item_mrp);
          $("#order-qty").val(1);
          $("#menu-id").val(menuData[index].id);
          console.log(menuData[index].item_name);
      }
      function addItem(){
          $("#menu-name").val();
          $("#price").val();
          $("#order-qty").val();
          console.log($("#menu-id").val());
        let newList =  menuData.find(item => item.id == $("#menu-id").val());
        newList.order_qty = $("#order-qty").val();
        console.log(typeof($("#price").val()));
        newList.order_amount = parseInt($("#order-qty").val()) * parseInt($("#price").val());
        dataList.push(newList);
        console.log(dataList);
        dataListLoop();
      }

      function dataListLoop(){
        let markup = "";
        let TotalAmount = 0;
        for(let i=0; i<dataList.length; i++){
            markup = markup + "<tr><td>"+dataList[i].item_name+"</td><td>"+dataList[i].item_mrp+"</td><td>"+dataList[i].order_qty+"</td><td>"+dataList[i].order_amount+"</td><td><button class='btn btn-danger' onclick='deleteItem("+i+")'>"+"<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-trash-2'><polyline points='3 6 5 6 21 6'></polyline><path d='M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2'></path><line x1='10' y1='11' x2='10' y2='17'></line><line x1='14' y1='11' x2='14' y2='17'></line></svg></button></td></tr>"; 
            TotalAmount = TotalAmount+dataList[i].order_amount;
        }
        $("#showList").html(markup);
        $("#total-amount").html(TotalAmount);
        $("#list-table").removeClass("d-none");
      }

      function deleteItem(id){
        dataList.splice(id,1);
        dataListLoop();
console.log(id);
      }
      function saveOrder(){
      console.log(dataList);
      $(".overlay").addClass("active");
          $.ajax({
            type:'POST',
            url:base_url+'save-order',
            data:JSON.stringify(dataList),
            dataType:'json',
                    contentType: 'application/json',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success:function(data){
                console.log(data); 
                window.location.replace(base_url+'order-list');               
            }
         });
      }