

<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
class BaseModel extends database {
    private   $MD5_PRIVATE_KEY='09JJJjhh7834jHJG876312^&shjdgsjagdasKoks';
    public function __construct()
    {
        $this->connect=$this->connect();
    }
    // Câu lệnh kết nối 
    protected function _query($sql)
    {
       return mysqli_query($this->connect,$sql);
    }
    public function get($table,$condition=[],$orderby=[], $limitStart=0, $limitEnd=100000)
    {   
        $sql='';
        // không có cả hai
        if($condition==[]&&$orderby==[]){
            $sql="SELECT * FROM ${table} LIMIT $limitStart,$limitEnd";
        }
        // có điều kiện nhưng không có sắp xếp
        elseif ($condition!=[]&&$orderby==[]) {
            $conditions=[];
            foreach ($condition as $key => $value) {
                $conditions[]="${key}='".$value."'";
            }
            $conditions=implode(' and ',$conditions);
            $sql="SELECT * FROM ${table} WHERE ${conditions} LIMIT $limitStart,$limitEnd";

        }
        // Không có điều kiện , nhưng có sắp xếp
        elseif($condition==[]&&$orderby!=[]){
 
            $columns = array_keys($orderby)[0];
            $value = $orderby[$columns];
            $sql="SELECT * FROM ${table} ORDER BY $columns $value LIMIT $limitStart,$limitEnd";
            
        }
        // có cả điều kiện và sắp xếp
        else{
            $columns = array_keys($orderby)[0];
            $valueOrderBY = $orderby[$columns];

            $conditions=[];
            foreach ($condition as $key => $value) {
                $conditions[]="${key}='".$value."'";
            }
            $conditions=implode(' and ',$conditions);
            $sql="SELECT * FROM ${table} WHERE ${conditions} ORDER BY $columns $valueOrderBY LIMIT $limitStart,$limitEnd ";

        }
       
        $query = $this->_query($sql);
        $data= [];
        while($row=mysqli_fetch_assoc($query)){
            $data[]=$row;
        }
        return $data;
    }
    public function getIn($table,$condition=[])
    {
        $key=array_keys($condition)[0];
        $value=$condition[$key];
        $sql ="SELECT * FROM ${table} WHERE ${key} in ($value)  ";
        $query = $this->_query($sql);
        $data= [];
        while($row=mysqli_fetch_assoc($query)){
            $data[]=$row;
        }
        return $data;
    }
    public function getLike($table,$condition=[])
    {
        $key=array_keys($condition)[0];
        $value=$condition[$key];
        $sql ="SELECT * FROM ${table} WHERE ${key} LIKE ".'\'%'.$value.'%\''."  ";
        $query = $this->_query($sql);
        $data= [];
        while($row=mysqli_fetch_assoc($query)){
            $data[]=$row;
        }
        return $data;
    }
    public function getOne($table,$condition=[])
    {
        $conditions=[];
        foreach ($condition as $key => $value) {
            $conditions[]="${key}='".$value."'";
        }
        $conditions=implode(' and ',$conditions);
        $sql ="SELECT * FROM ${table} WHERE $conditions  ";
        $query=$this->_query($sql);
        return mysqli_fetch_assoc($query);

    }
    public function create($table,$data=[])
    {
        $columns=implode(',',array_keys($data));
        $valueConvert=array_map(function($value){
            return "'".$value."'";
        },array_values($data));
        $values=implode(',',$valueConvert);

        $sql = " INSERT INTO ${table}($columns) value(${values})";
        $this->_query($sql);
        return  $sql;
    }
    public function update($table,$data=[],$condition=[])
    {

        foreach($data as $key=>$value){
            $dataSet[]="${key}='$value'";
        }
        foreach ($condition as $key => $value) {
            $conditions[]="${key}='".$value."'";
        }
        $dataSet=implode(',',$dataSet);
        $conditions=implode(' and ',$conditions);
       
        $sql="UPDATE ${table} SET ${dataSet} 
                              WHERE ${conditions}";
        $this->_query($sql);
        return $sql;
    }
    public function getInnerJoin($table1,$table2,$columns=['*'],$data=[],$condition=[])
    {  
        $columns=implode(',',$columns);
        $conditions=[];
        foreach($data as $key=>$value){
            $dataSet[]="${key}.$value";
        }
        $dataSet=implode('=',$dataSet);
        if($condition==[]){
            $sql="SELECT $columns FROM $table1
                        INNER JOIN $table2 on  $dataSet";
        }
        else{
            foreach ($condition as $key => $value) {
                $conditions[]="${key}='".$value."'";
            }
            $conditions=implode(' and ',$conditions);
            $sql="SELECT $columns FROM $table1
                        INNER JOIN $table2 on  $dataSet
                        WHERE ${conditions}";

        }
        $query=$this->_query($sql);
        $data= [];
        while($row=mysqli_fetch_assoc($query)){
            $data[]=$row;
        }
        return $data;
    }
    public function deleteOne($table,$condition=[]){
        foreach ($condition as $key => $value) {
            $conditions[]="${key}='".$value."'";
        }
        $conditions=implode(' and ',$conditions);
        $sql="DELETE  FROM ${table} WHERE ${conditions}";
        $this->_query($sql);
        return $sql;
    }
    public function getComment($news_id)
    {
        $sql="SELECT comments.content,comments.createdAt,news_id,users.user_id,user_name,users.avatar FROM comments
                            INNER JOIN news on  comments.news_id=news.id
                            JOIN users on  comments.user_id=users.user_id
                            WHERE news.id=${news_id}";
        $query = $this->_query($sql);
        $data= [];
        while($row=mysqli_fetch_assoc($query)){
            $data[]=$row;
        }
        return $data;
    }
    public function getFavorite($user_id)
    {
        $sql="SELECT products.* FROM favorite
                                INNER JOIN products on favorite.product_id=products.id
                                JOIN users on  favorite.user_id=users.user_id
                                WHERE users.user_id=${user_id}";
        $query = $this->_query($sql);
        $data= [];
        while($row=mysqli_fetch_assoc($query)){
            $data[]=$row;
        }
        return $data;
    }
    public function getPwdSecurity($pwd)
    {
        return md5(md5($pwd).$this->MD5_PRIVATE_KEY);
    }
    
}
function formatMoney($number, $fractional=false) {  
    if ($fractional) {  
        $number = sprintf('%.2f', $number);  
    }  
    while (true) {  
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);  
        if ($replaced != $number) {  
            $number = $replaced;  
        } else {  
            break;  
        }  
    }  
    return $number;  
}
function clean($string) {
    $string = str_replace('', '-', $string); // Replaces all spaces with hyphens.
    return preg_replace('/[<>#%&!\$*^"\']/', '', $string); // Removes special chars.
 }

?>
