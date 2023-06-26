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