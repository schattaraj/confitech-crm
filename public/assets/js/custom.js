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
     let menuData = [];
     let dataList = [];
     let base_url = "http://localhost/new-laravel/";
     function fetchMenu(target){        
        $.get(base_url+"menu/"+target.value, function (data) {
            console.log(data);          
            for(let i = 0; i<data.length; i++){
                data[i].qty = 0;
                data[i].amount = 0;
            }
            menuData.push({category:data[0].category_name,data:data});
            dataListLoop();
            $(".data-list").removeClass("d-none");
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
        let html = '';
        console.log(menuData);
        for(let i = 0; i<menuData.length; i++){
            html = html + '<tr><th colspan="4">'+menuData[i].category+'</th></tr>';
            let innerData = menuData[i].data;
            for(let j=0;j<innerData.length;j++){
                innerData[j].amount = innerData[j].item_mrp * innerData[j].qty;
            html = html + '<tr><td><input type="text" class="form-control" value="'+innerData[j].item_name+'" readonly></td><td><input type="text" class="form-control" value="'+innerData[j].item_mrp+'" readonly></td><td><input type="number" class="form-control" id="order-qty" value="'+innerData[j].qty+'" min="0" onchange="updateQuantity(this,'+i+','+j+')"></td><td><input type="text" class="form-control" value="'+innerData[j].amount+'" readonly></td></tr>';
            TotalAmount = TotalAmount + innerData[j].amount;
            }
        }
        $("#showList").html(html);
        $("#total-amount").html(TotalAmount);
        // $("#total-amount").html(TotalAmount);
        // $("#list-table").removeClass("d-none");
      }
      function updateQuantity(target,category,id){
        menuData[category].data[id].qty = parseInt(target.value);
        console.log(menuData);
        dataListLoop();
      }

      function deleteItem(id){
        dataList.splice(id,1);
        dataListLoop();
console.log(id);
      }
      function saveOrder(){
      console.log(dataList);
      let slotId = $("input[type='radio'][name='slot_id']:checked").val();
      console.log("slotId",slotId);
      $(".overlay").addClass("active");
          $.ajax({
            type:'POST',
            url:base_url+'save-order',
            data:JSON.stringify({slot_id:slotId,orders:menuData}),
            dataType:'json',
                    contentType: 'application/json',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success:function(data){
                window.location.replace(base_url+'order-list');
                $(".overlay").removeClass("active");               
            }
         });
      }

      function activeCategory(){
        $(".js-example-basic-multiple").prop("disabled",false);
      }