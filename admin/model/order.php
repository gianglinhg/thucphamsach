<?php
include_once 'model/database.php';
// lấy tất cả đơn hàng
function getAllOrder()
{
    $sql = "SELECT * FROM orders";
    return query($sql);
   
}
// viết hàm xác nhận đơn hàng
function confirmOrder($id)
{
    $sql = "UPDATE orders SET status = 1 WHERE id = $id";
    execute($sql);
}
// viết hàm chi tiết đơn hàng
function getOrderByID($id)
{
    $sql = "select orders.id as orders_id,orders.fullname,orders.stat,orders.address,orders.phone,order_detail.id,order_detail.product_id,order_detail.total as price_order,order_detail.amount as qty_order,order_detail.id as detail_id,
    products.name as product_name,products.price_output as price,products.image as product_img
    from orders
    INNER JOIN order_detail ON orders.id = order_detail.order_id
    INNER JOIN products ON products.id = order_detail.product_id
  
    where orders.id  = $id";
    // tạo ra 1 mảng để chứa dữ liệu
   
    return query($sql);
}
// update trạng thái đơn hàng
function updateOrder($id,$status)
{
    $sql = "UPDATE orders SET stat = $status WHERE id = $id";
    execute($sql);
}
?>