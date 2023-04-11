function addToCart(productId,amount) {
    $.post('./controller/detail/add.php', {
            productId,
            amount,

        },
        (data) => {


        })
}
function addToFavorite(productId,userId="") {
         $.post('./controller/favorite/add.php', {
                 productId,
                 userId,
     
             },
             (data) => {
                 if(data==1){
                     toastr.success('Bạn vừa thêm 1 sản phẩm vào mục yêu thích!', 'Tuyệt vời')
                 }
                 if (data==0) {
                    toastr.warning('Bạn vừa bỏ sản phẩm ra khỏi mục yêu thích!', 'Thông báo')
                 }
     
             })

    
    

}
function removeToFavorite(productId,userId="") {
    // if(userId==""){
    //     alert('vui lòng đăng nhập để thực hiện chức năng này ')
    // }
    // else{
    //     $.post('./controller/favorite/add.php', {
    //             productId,
    //             userId,
    
    //         },
    //         (data) => {
    //              return data
    
    //         })
    //     console.log('thêm thành công vào f')
    // }

}

